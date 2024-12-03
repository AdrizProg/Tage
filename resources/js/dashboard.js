let array = []; // Array para almacenar los datos
const dashboardPosition = document.getElementById('dash');
const url = 'http://tage.test/api/registros/';
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
  console.log(array.data); // Muestra el array después de la carga
  arrayVer()
});

function arrayVer() {
console.log(array.data);
}
export default function dashboardView() {
  dashboardPosition.innerHTML = `
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($composteras as $compostera)
        <a href="#compostera{{ $compostera->id }}" class="bg-white shadow-md rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-lg">
            <div class="p-4 text-center">
                <h2 class="text-xl font-bold mb-2">
                    {{ $compostera->id }}
                </h2>
            </div>
            <img alt="A placeholder image of 400x400 pixels with a gray background and white text in the center" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/xno9T45D0GI8Jl9ryOq578L6TUkdReN4IKWVsmzeQedjTvsnA.jpg" width="400" />
            <div class="p-4">
                <span class="inline-block bg-green-200 text-green-800 text-xs px-2 py-1 rounded-full">
                    {{ $compostera->tipo }}
                </span>
            </div>
        </a>
        @endforeach
    </div>
    `;
};