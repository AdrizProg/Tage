const token = sessionStorage.getItem('apiToken');
const id = window.location.href.slice(-1);

export default async function actualizarTipoCompostera() {
    const url = `/api/composteras/${id}`; // Cambia la URL por la correcta
    let data;

    let datosCompostera = await composteras();
    let compostera = datosCompostera.filter(e => e.id == id);
    const tipoComp = compostera[0].tipo;

    if (tipoComp == 'Vacia') {
        // const nuevoTipo = 'Aporte';
        data = {
            tipo: 'Aporte'
        };
    } else if (tipoComp == 'Aporte') {
        // const nuevoTipo = 'Degradacion';
        data = {
            tipo: 'Degradacion'
        };
    } else if (tipoComp == 'Degradacion') {
        // const nuevoTipo = 'Maduracion';
        data = {
            tipo: 'Maduracion'
        };
    } else if (tipoComp == 'Maduracion') {
        // const nuevoTipo = 'Vacia';
        data = {
            tipo: 'Vacia'
        };
    } 

    // const data = {
    //     tipo: nuevoTipo
    // };

    try {
        const response = await fetch(url, {
            method: 'PATCH', // Usamos POST para enviar datos
            headers: {
                'Authorization': `Bearer ${token}`, // Autenticación con el token
                'Content-Type': 'application/json', // Indicamos que el cuerpo de la solicitud es JSON
            },
            body: JSON.stringify(data), // Convertimos el array en JSON para enviarlo
        });

        if (!response.ok) {
            const errorData = await response.json();
            console.error('Error al actualizar la compostera:', errorData);
            alert('Error al actualizar: ' + (errorData.error || 'Error desconocido'));
        } else {
            const result = await response.json();
            console.log('Compostera actualizada:', result);
            alert('Compostera actualizada con éxito');
        }
    } catch (error) {
        console.error('Error de red o del servidor:', error);
        alert('Error al conectar con el servidor');
    }

    location.replace('/dashboard');
}

async function composteras() {
    try {
        const response = await fetch('/api/composteras', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });

        // Verificar si la respuesta es válida
        if (!response.ok) {
            const errorData = await response.text(); // Usamos .text() para inspeccionar el error
            console.error('Errores devueltos por el servidor:', errorData);
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        // Verificar si el cuerpo tiene contenido antes de convertir a JSON
        const textResponse = await response.text();
        if (textResponse.trim() === "") {
            console.warn("El servidor devolvió una respuesta vacía.");
            return []; // Retornar un array vacío en caso de respuesta vacía
        }

        const result = JSON.parse(textResponse); // Convertir el texto a JSON
        console.log('Datos obtenidos de la base de datos:', result);

        return result; // Retornar los datos obtenidos

    } catch (error) {
        console.error('Error al obtener los datos:', error);
        throw error; // Propagar el error para manejarlo en otro lugar si es necesario
    }
}