import dashboardView from './dashboard';
import obtenerDatosAntes from './registrosSubir';
import uploadArray from './registrosSubir';
import array from './registrosSubir';

let currentHash = "";

export default function rutasUrl() {
    const hash = window.location.href; // Obtiene el fragmento actual (#catalogo)

    // Evitar procesar la misma URL dos veces
    if (hash === currentHash) {
        return;
    }
    currentHash = hash; // Actualiza el hash actual

    if (hash.includes('/composteras')) {

    } else if (hash.includes('/registro') || hash.includes('/registro#antes')) {
        const boton = document.getElementById('botonAntes');
        boton.addEventListener('click', async () => {
            obtenerDatosAntes();
            uploadArray();
          });

    } else if (hash.includes('/registro#durante')) {


    } else if (hash.includes('/registro#despues')) {


    } else if (hash.includes('/dashboard')) {
        dashboardView();
    }
}