import dashboardView from './dashboard';
import mostrarRegistros from './cambiarRegistro';
import uploadAntes from './subirAntes';
import uploadDurante from './subirDurante';
import uploadDespues from './subirDespues';
import hola from './registroAntes';
import idRegistro from './selectIdRegistro';
// import composterasMostrar from './registroComposteras';
import fetchDataAntes from './graficas';

let currentHash = "";

export default function rutasUrl() {
    const hash = window.location.href; // Obtiene el fragmento actual (#catalogo)

    // Evitar procesar la misma URL dos veces
    if (hash === currentHash) {
        return;
    }
    currentHash = hash; // Actualiza el hash actual

    if (hash.includes('/composteras')) {

    } else if (hash.includes('/estadisticas')) {

        fetchDataAntes();

        const id = window.location.href.slice(-1);
        const boton = document.getElementById('createreg');
        boton.addEventListener('click', () => {
            location.replace('/registro#antes' + id);
        });


    } else if (hash.includes('/registro#durante')) {

        mostrarRegistros(2);

        const idComp = window.location.href.slice(-1);
        const btnAnterior = document.getElementById('btnAnterior');
        btnAnterior.addEventListener('click', async () => {
            location.replace('/registro#antes' + idComp);
        });

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

        // composterasMostrar();

        const olorMostrar = document.getElementById('olor');
        olorMostrar.addEventListener('change', hola);

        const insectosMostrar = document.getElementById('insectos');
        insectosMostrar.addEventListener('change', hola);

        const humedadMostrar = document.getElementById('humedad');
        humedadMostrar.addEventListener('change', hola);

        const boton = document.getElementById('boton');
        boton.addEventListener('click', async () => {

            const idComp = window.location.href.slice(-1);

            const alertHTML = `
                <div id="alert-message" class="fixed top-5 right-5 bg-red-500 text-white px-4 py-2 rounded shadow-md text-sm opacity-0 transition-opacity duration-300">
                    El registro ya ha sido introducido, acabe todos los formularios o cancele el registro.
                </div>
                            `;

            // Insertar el mensaje de alerta en el cuerpo del documento
            document.body.insertAdjacentHTML('beforeend', alertHTML);

            if (localStorage.getItem('antes' + idComp)) {
                const alertElement = document.getElementById('alert-message');
                if (alertElement) {
                    alertElement.classList.remove('opacity-0'); // Hacer visible el mensaje
                    alertElement.classList.add('opacity-100');

                    // Ocultar el mensaje después de 3 segundos
                    setTimeout(() => {
                        alertElement.classList.remove('opacity-100');
                        alertElement.classList.add('opacity-0');

                        // Eliminar el elemento del DOM después de la animación de salida
                        setTimeout(() => alertElement.remove(), 1000);
                    }, 3000);
                }

                location.replace('/registro#durante' + idComp);
            } else {
                uploadAntes();
            }


        });

    } else if (hash.includes('/dashboard')) {
        if (localStorage.getItem('antes1') && localStorage.getItem('durante1') && localStorage.getItem('despues1')) {

            localStorage.removeItem('antes1');
            localStorage.removeItem('durante1');
            localStorage.removeItem('despues1');

        } else if (localStorage.getItem('antes2') && localStorage.getItem('durante2') && localStorage.getItem('despues2')) {

            localStorage.removeItem('antes2');
            localStorage.removeItem('durante2');
            localStorage.removeItem('despues2');

        } else if (localStorage.getItem('antes3') && localStorage.getItem('durante3') && localStorage.getItem('despues3')) {

            localStorage.removeItem('antes3');
            localStorage.removeItem('durante3');
            localStorage.removeItem('despues3');

        }
    }
}

window.addEventListener('hashchange', rutasUrl);