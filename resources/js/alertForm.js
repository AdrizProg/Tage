export default function alertFormularios() {

    const alertHTML = `
                <div id="alert-message" class="fixed top-5 right-5 bg-red-500 text-white px-4 py-2 rounded shadow-md text-sm opacity-0 transition-opacity duration-300">
                    El registro ya ha sido introducido, acabe todos los formularios o cancele el registro.
                </div>
                            `;

    // Insertar el mensaje de alerta en el cuerpo del documento
    document.body.insertAdjacentHTML('beforeend', alertHTML);

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

}
