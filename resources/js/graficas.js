import ApexCharts from 'apexcharts';

let array = [];
const urlAntes = 'http://tage.test/api/antes';
const token = sessionStorage.getItem('apiToken');

const url = 'http://tage.test/api/registros';

function viewGraficas(valores, compReg) {

    const idCompostera = window.location.href.slice(-1);
    let valoresArray = valores.data;

    let idWithCompostera = compReg.map(e => {
        return e.compostera == idCompostera ? e.id : null;
    }).filter(id => id != null);

    let filtroId = valoresArray.filter(e => idWithCompostera.includes(e.registro_id))

    const arrayTempAmb = filtroId.map(e => e.tempAmbiente);
    const arrayFechaInsercion = filtroId.map(e => e.created_at.slice(0,10));

  var options = {
    series: [{
      name: "Temperatura",
      data: arrayTempAmb
    }],
    chart: {
      height: 200,
      type: 'line',
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: `Temperatura de la compostera ${idCompostera}`,
      align: 'left'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'],
        opacity: 0.5
      },
    },
    xaxis: {
      categories: arrayFechaInsercion,
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
};

export default async function fetchDataAntes() {
    const comp = await regComposte();
  try {
    const response = await fetch(urlAntes, {
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json',
      },
    });

    // Verificar si la respuesta es válida
    if (!response.ok) {
      const errorData = await response.text(); // Usamos .text() para inspeccionar el error
      console.error('Errores devueltos por el servidor:', errorData);
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    // Verificar si el cuerpo tiene contenido antes de convertir a JSON
    const textResponse = await response.text();
    if (textResponse.trim() === "") {
      console.warn("El servidor devolvió una respuesta vacía.");
      return [];
    }

    const result = JSON.parse(textResponse); // Convertir el texto a JSON
    console.log('Datos obtenidos de la base de datos:', result);

    // result.map(e => {
    //     console.log(e.id)
    // })

    // Actualizamos el array con la información obtenida
    array = result;

    viewGraficas(array, comp);
  } catch (error) {
    console.error('Error al obtener los datos:', error);
    throw error; // Propagamos el error para manejarlo en otro lugar si es necesario
  }
}

async function regComposte() { // Cambiamos el nombre de la función para mayor claridad
    try {
      const response = await fetch(url, {
        method: 'GET',
        headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'application/json',
        },
      });
  
      const datos = await response.json(); // Convertir a JSON
      console.log('Datos recibidos:', datos); // Verificar qué estructura tiene la API
  
      // Asegúrate de que "datos" sea un array
      const registros = Array.isArray(datos) ? datos : datos.data || [];
  
      if (registros.length === 0) {
        console.log('No hay registros disponibles.');
        return [];
      }
  
      // Ordenar por fecha (descendente), si es necesario
      const registrosOrdenados = registros.sort((a, b) =>
        new Date(b.created_at) - new Date(a.created_at)
      );
  
      console.log('Registros ordenados:', registrosOrdenados);
      return registrosOrdenados; // Devolver el arreglo completo
    } catch (error) {
      console.log(`Error en la promesa: ${error}`);
      return []; // Devolver un arreglo vacío en caso de error
    }
  }