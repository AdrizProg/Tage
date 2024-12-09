const url = 'http://tage.test/api/registros';
const token = sessionStorage.getItem('apiToken');

export default async function idRegistro() {
  try {
    let allRegistros = [];
    let currentPage = 1;
    let totalPages = 1;

    do {
      const response = await fetch(`${url}?page=${currentPage}`, {
        method: 'GET',
        headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'application/json',
        },
      });

      const datos = await response.json();
      console.log(`Datos de la página ${currentPage}:`, datos);

      const registros = datos.data || [];
      allRegistros = allRegistros.concat(registros);

      // Actualiza las variables de paginación
      totalPages = datos.meta?.last_page || 1;
      currentPage++;
    } while (currentPage <= totalPages);

    // Encuentra el registro con el ID más grande
    const registroIdMasGrande = allRegistros.reduce((max, registro) =>
      registro.id > max.id ? registro : max, allRegistros[0]
    );

    console.log('ID más grande:', registroIdMasGrande?.id);
    return registroIdMasGrande?.id;
  } catch (error) {
    console.log(`Error en la promesa: ${error}`);
  }
}