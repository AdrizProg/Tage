let array = []; // Array para almacenar los datos
const dashboardPosition = document.getElementById('dash');
const url = 'http://tage.test/api/registros/';
const token = sessionStorage.getItem('apiToken');

async function uploadArray(dataArray) {
    for (const item of dataArray) {
      try {
        const response = await fetch(url, {
          method: 'POST',
          headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(item),
        });
  
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }
  
        const result = await response.json();
        console.log('Respuesta para item:', item, result);
      } catch (error) {
        console.error('Error al subir el item:', item, error);
      }
    }
  }
  
  window.addEventListener('load', async () => {
    await uploadArray(array); 
  });