let array = []; // Array para almacenar los datos
const dashboardPosition = document.getElementById('dash');
const url = '/api/registros/';
const token = sessionStorage.getItem('apiToken');

async function fetchData() { // Cambiamos el nombre de la función para evitar conflictos
  try {
    const response = await fetch(url, { // Usamos la función global fetch
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json',
      },
    });

    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const resultadoJSON = await response.json();
    array = resultadoJSON; // Almacena los datos en el array
    console.log('Datos cargados en el array:', array); // Muestra los datos después de cargarlos
  } catch (error) {
    console.log(`Error en la promesa: ${error}`);
  }
}

window.addEventListener('load', async () => {
  await fetchData(); // Llama a la función fetchData al cargar la página
  arrayVer()
});

function arrayVer() {
console.log(array.data);
}