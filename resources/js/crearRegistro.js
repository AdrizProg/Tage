let array = [];
const urlRegistros = 'http://tage.test/api/registros';
const token = sessionStorage.getItem('apiToken');

function obtenerDatosRegistro() {
    const compostera = 1;

    array = [{ iniCiclo: 0, compostera: compostera, user_id: 1}];
}

export default async function newRegistro() {
    obtenerDatosRegistro();
    try {
      const response = await fetch(urlRegistros, {
        method: 'POST', // Usamos POST para enviar datos
        headers: {
          'Authorization': `Bearer ${token}`, // Autenticación con el token
          'Content-Type': 'application/json', // Indicamos que el cuerpo de la solicitud es JSON
        },
        body: JSON.stringify(array[0]), // Convertimos el array en JSON para enviarlo
      });
      console.log(response)
      // if (!response.ok) {
      //   const errorData = await response.json();
      //   console.error('Errores devueltos por el servidor:', errorData);
      //   throw new Error(`HTTP error! Status: ${response.status}`);
      // }
  
      const result = await response.json();
      console.log('Respuesta del servidor:', result);
    } catch (error) {
      // console.error('Error al subir los datos:' + error);
    }
  }