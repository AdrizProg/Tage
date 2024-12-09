import idRegistro from './selectIdRegistro';

let array = [];
const urlDespues = 'http://tage.test/api/despues';
const token = sessionStorage.getItem('apiToken');

function obtenerDatosDespues(idReg) {
  const nivLLeno = document.getElementById('nivelLlenado').value;
  const observaciones = document.getElementById('observacionesDespues').value;

  array = [{ registro_id: idReg, nivelLlenado: nivLLeno, fotoFinal: null, observaciones: observaciones }];
}

export default async function uploadDespues() {
  const id = await idRegistro();
  obtenerDatosDespues(id);

  const idComp = window.location.href.slice(-1);
  try {
    const response = await fetch(urlDespues, {
      method: 'POST', // Usamos POST para enviar datos
      headers: {
        'Authorization': `Bearer ${token}`, // Autenticación con el token
        'Content-Type': 'application/json', // Indicamos que el cuerpo de la solicitud es JSON
      },
      body: JSON.stringify(array[0]), // Convertimos el array en JSON para enviarlo
    });

    localStorage.setItem('despues' + idComp, JSON.stringify(array[0]));

    const result = await response.json();
    console.log('Respuesta del servidor:', result);
  } catch (error) {
    console.error('Error al subir los datos:' + error);
  }

  location.replace('/dashboard');
}