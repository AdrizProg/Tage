export default async function actualizarTipoCompostera(nuevoTipo) {
    const id = window.location.href.slice(-1);
    const url = `/api/composteras/${id}`; // Cambia la URL por la correcta
    const token = sessionStorage.getItem('apiToken');
    const data = {
        tipo: nuevoTipo
    };

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
