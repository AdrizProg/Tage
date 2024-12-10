import idRegistro from './selectIdRegistro';

let array = [];
const urlDurante = 'http://tage.test/api/durante';
const token = sessionStorage.getItem('apiToken');

export function obtenerDatosDurante(idReg) {
  const riego = document.getElementById('riego').value;
  const revolver = document.getElementById('revolver').value;
  const aporteVerde = document.getElementById('aporteVerde').value;
  const tipoAporteVerde = document.getElementById('tipoAporteVerde').value;
  const aporteSeco = document.getElementById('aporteSeco').value;
  const tipoAporteSeco = document.getElementById('tipoAporteSeco').value;
  const observaciones = document.getElementById('observacionesDurante').value;

  array = [{ registro_id: idReg, riego: riego, revolver: revolver, aporteVerde: aporteVerde, tipoAporteVerde: tipoAporteVerde, aporteSeco: aporteSeco, tipoAporteSeco: tipoAporteSeco, fotoDurante: null, observaciones: observaciones }];
}

export default async function uploadDurante() {
  const id = await idRegistro();
  obtenerDatosDurante(id);

  const idComp = window.location.href.slice(-1);
  try {
    const response = await fetch(urlDurante, {
      method: 'POST', // Usamos POST para enviar datos
      headers: {
        'Authorization': `Bearer ${token}`, // Autenticación con el token
        'Content-Type': 'application/json', // Indicamos que el cuerpo de la solicitud es JSON
      },
      body: JSON.stringify(array[0]), // Convertimos el array en JSON para enviarlo
    });
    localStorage.setItem('durante' + idComp, JSON.stringify(array[0]));

    const result = await response.json();
    console.log('Respuesta del servidor:', result);
  } catch (error) {
    console.error('Error al subir los datos:' + error);
  }

  location.replace('/registro#despues' + idComp);
}