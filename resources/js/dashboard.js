const app = document.getElementById('app');

export default function dashboardView() {
  app.innerHTML = `
<div class="flex justify-between items-center p-4 bg-black-100">
  <div class="p-4 w-32 h-32 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <a href="#composteras"> Izquierda </a>
  </div>
  <div class="p-4 w-32 h-32 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
    <a href="#composteras" class="pl-4"> Derecha </a>
  </div>
</div>
    `;
};