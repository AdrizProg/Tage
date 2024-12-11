let array = [];
const urlAntes = '/api/antes';
const token = sessionStorage.getItem('apiToken');

export default async function AntesBorrar() {
    const idCompostera = window.location.href.slice(-1);

    try {
        const response = await fetch(urlAntes, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });

        if (!response.ok) {
            throw new Error(`Failed to fetch data: ${response.status} - ${response.statusText}`);
        }

        const textResponse = await response.text();
        const result = JSON.parse(textResponse); // Convertir el texto a JSON
        const antesResult = result.data;

        if (localStorage.getItem('antes' + idCompostera)) {
            const idRegistro = localStorage.getItem('reg' + idCompostera);

            // Get relevant IDs
            const idAntes = antesResult
                .filter(e => e.registro_id == idRegistro.slice(-1)) // Filter based on condition
                .map(e => e.id); // Map to IDs only

            if (idAntes.length === 0) {
                console.warn('No matching records found for deletion.');
                return;
            }

            // Iterate through IDs to delete each
            for (const id of idAntes) {
                const deleteUrl = `${urlAntes}/${id}`;
                const borrar = await fetch(deleteUrl, {
                    method: 'DELETE',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json',
                    },
                });

                if (borrar.ok) {
                    console.log(`Registro Antes con ID ${id} eliminado exitosamente.`);
                } else {
                    console.error(`Error al eliminar usuario con ID ${id}: ${borrar.status} - ${borrar.statusText}`);
                }
            }
        }
    } catch (error) {
        console.error('Error al obtener o eliminar los datos:', error);
    }
}
