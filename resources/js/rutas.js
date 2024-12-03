import dashboardView from './dashboard';
import hola from './registro';

let currentHash = "";

export default function rutasUrl() {
    const hash = window.location.href; // Obtiene el fragmento actual (#catalogo)

    // Evitar procesar la misma URL dos veces
    if (hash === currentHash) {
        return;
    }
    currentHash = hash; // Actualiza el hash actual

    if (hash.includes('/composteras')) {

    } else if (hash.includes('/registro')) {
        hola();
    } else if (hash.includes('/dashboard')) {
        dashboardView();
    }
}