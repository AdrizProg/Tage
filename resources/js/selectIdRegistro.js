const url = 'http://tage.test/api/registros/';
const token = sessionStorage.getItem('apiToken');

export default async function idRegistro() { // Cambiamos el nombre de la función para evitar conflictos
  try {
    const response = await fetch(url, { // Usamos la función global fetch
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json',
      },
    });

    const datos = await response.json(); // Convertir a JSON
    console.log('Datos recibidos:', datos); // Verificar qué estructura tiene la API

    // Asegúrate de que "datos" sea un array
    const registros = Array.isArray(datos) ? datos : datos.data || [];

    if (registros.length === 0) {
      console.log('No hay registros disponibles.');
      return null;
    }

    // Ordenar por fecha (descendente) y tomar el primero
    const registroMasReciente = registros.sort((a, b) => 
      new Date(b.created_at) - new Date(a.created_at)
    )[0];

    // Obtener el ID del registro más reciente
    const idMasReciente = registroMasReciente?.id;

    console.log('ID del registro más reciente:', idMasReciente);
    return idMasReciente;
  } catch (error) {
    console.log(`Error en la promesa: ${error}`);
  }
}