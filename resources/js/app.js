import './bootstrap';

import Alpine from 'alpinejs';

import pintar from './ruta';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('popstate', pintar);

window.addEventListener('load', async () => {
    // await consulta();
    pintar();
});