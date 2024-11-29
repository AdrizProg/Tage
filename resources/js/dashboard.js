const app = document.getElementById('app');

export default function dashboardView() {
    app.innerHTML = `
      <div class="bg-white shadow-md rounded-lg p-6 max-w-sm">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Hola, Mundo!</h2>
        <p class="text-gray-600 mb-4">
          Este elemento fue generado dinámicamente con JavaScript y estilizado con Tailwind CSS.
        </p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Click Me
        </button>
      </div>
    `;
};