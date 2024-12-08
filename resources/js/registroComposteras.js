const composteras = document.getElementById('aqui');

let array = []; // Array para almacenar los datos
const url = 'http://tage.test/api/composteras';
const token = sessionStorage.getItem('apiToken');

export default async function composterasMostrar() { // Nombre más descriptivo
    try {
        const response = await fetch(url, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });

        if (!response.ok) {
            throw new Error(`Error en la solicitud: ${response.status} - ${response.statusText}`);
        }

        const data = await response.json();
        array = Array.isArray(data) ? data : [data]; // Asegúrate de que siempre sea un array

        array.map(e => {
            // console.log(e.nombre)
            composteras.innerHTML = `
                <option> ${e.nombre} </option>
    `;
        })
        console.log('Datos cargados en el array:', array);
        return array; // Devuelve los datos para que puedan ser usados directamente
    } catch (error) {
        console.error('Error al obtener los datos:', error.message);
        return []; // Devuelve un array vacío si hay un error
    }
}