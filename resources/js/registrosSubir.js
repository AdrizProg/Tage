export let array = [
  { registro_id: 2, tempAmbiente: 20, tempCompostera: 25, nivelLLenado: 70, olor: 'Podrido', insectos: 'N', humedad: 'Muy mojado', foto: null, observaciones: null },
];
const url = 'http://tage.test/api/antes';
const token = sessionStorage.getItem('apiToken');

export default function obtenerDatosAntes() {
  const tempAmb = document.getElementById('tempAmbiente').value;
  const tempComp = document.getElementById('tempCompostera').value;
  const nivLLeno = document.getElementById('nivelLlenado').value;
  const olor = document.getElementById('olor').value;
  const textOlor = document.getElementById('textOlor');
  const insectos = document.getElementById('insectos').value;
  const humedad = document.getElementById('humedad').value;
  const observaciones = document.getElementById('observacionesAntes').value;

  array = [{registro_id: 2, tempAmbiente: tempAmb, tempCompostera: tempComp, nivelLLenado: nivLLeno, olor: olor, insectos: insectos, humedad: humedad, foto: null, observaciones: observaciones }];

  console.log(array)
}

export async function uploadArray() {
  try {
    const response = await fetch(url, {
      method: 'POST', // Usamos POST para enviar datos
      headers: {
        'Authorization': `Bearer ${token}`, // Autenticación con el token
        'Content-Type': 'application/json', // Indicamos que el cuerpo de la solicitud es JSON
      },
      body: JSON.stringify(array[0]), // Convertimos el array en JSON para enviarlo
    });

    if (!response.ok) {
      const errorData = await response.json();
      console.error('Errores devueltos por el servidor:', errorData);
      throw new Error(`HTTP error! Status: ${response.status}`);
    }

    const result = await response.json();
    console.log('Respuesta del servidor:', result);
  } catch (error) {
    console.error('Error al subir los datos:', error);
  }
}