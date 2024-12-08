import dashboardView from './dashboard';
import mostrarRegistros from './cambiarRegistro';
import uploadAntes from './subirAntes';
import uploadDurante from './subirDurante';
import uploadDespues from './subirDespues';
import hola from './registroAntes';
import idRegistro from './selectIdRegistro';
import composterasMostrar from './registroComposteras';

let currentHash = "";

export default function rutasUrl() {
    const hash = window.location.href; // Obtiene el fragmento actual (#catalogo)

    // Evitar procesar la misma URL dos veces
    if (hash === currentHash) {
        return;
    }
    currentHash = hash; // Actualiza el hash actual

    if (hash.includes('/composteras')) {

    } else if (hash.includes('/registro#durante')) {

        mostrarRegistros(2);

        const boton = document.getElementById('boton');
        boton.addEventListener('click', async () => {

            uploadDurante();

        });

    } else if (hash.includes('/registro#despues')) {

        mostrarRegistros(3);

        const boton = document.getElementById('boton');
        boton.addEventListener('click', async () => {

            uploadDespues();

        });

    } else if (hash.includes('/registro') || hash.includes('/registro#antes')) {

        mostrarRegistros(1);

        composterasMostrar();

        const olorMostrar = document.getElementById('olor');
        olorMostrar.addEventListener('change', hola);

        const insectosMostrar = document.getElementById('insectos');
        insectosMostrar.addEventListener('change', hola);

        const humedadMostrar = document.getElementById('humedad');
        humedadMostrar.addEventListener('change', hola);

        const boton = document.getElementById('boton');
        boton.addEventListener('click', async () => {

            uploadAntes();

        });

    } else if (hash.includes('/dashboard')) {
        dashboardView();
    }
}

window.addEventListener('hashchange', rutasUrl);