import ApexCharts from 'apexcharts';

let array = [];
const urlAntes = 'http://tage.test/api/antes';
const token = sessionStorage.getItem('apiToken');

function viewGraficas(valores) {

    let valoresArray = valores.data;
    const arrayTempAmb = valoresArray.map(e => e.tempAmbiente);
    const arrayFechaInsercion = valoresArray.map(e => e.created_at.slice(0,10));
    const idCompostera = window.location.href.slice(-1);

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

    viewGraficas(array);
  } catch (error) {
    console.error('Error al obtener los datos:', error);
    throw error; // Propagamos el error para manejarlo en otro lugar si es necesario
  }
}
