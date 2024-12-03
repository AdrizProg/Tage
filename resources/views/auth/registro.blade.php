<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Formulario</title>
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Registro de Datos</h2>
        <form>
            @csrf <!-- Si usas Laravel, incluye la directiva CSRF -->

            <div class="mb-4">
                <label for="tempAmbiente" class="block text-sm font-medium text-gray-700">Temperatura Ambiente</label>
                <input type="number" name="tempAmbiente" id="tempAmbiente" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label for="tempCompostera" class="block text-sm font-medium text-gray-700">Temperatura Compostera</label>
                <input type="number" name="tempCompostera" id="tempCompostera" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label for="nivelLLenado" class="block text-sm font-medium text-gray-700">Nivel de Llenado</label>
                <input type="number" name="nivelLLenado" id="nivelLLenado" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label for="olor" class="block text-sm font-medium text-gray-700">Olor</label>
                <select name="olor" id="olor" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    <option value="">Seleccione</option>
                    <option value="Podrido">Podrido</option>
                    <option value="Amoniaco">Amoniaco</option>
                    <option value="Sin olor">Sin olor</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="insectos" class="block text-sm font-medium text-gray-700">Insectos</label>
                <input type="text" name="insectos" id="insectos" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label for="humedad" class="block text-sm font-medium text-gray-700">Humedad</label>
                <select name="humedad" id="humedad" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                    <option value="">Seleccione</option>
                    <option value="Muy mojado">Muy mojado</option>
                    <option value="Seco">Seco</option>
                    <option value="Bien">Bien</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</body>

</html>