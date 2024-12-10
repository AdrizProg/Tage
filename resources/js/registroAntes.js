export default function hola() {
    const valueOlor = document.getElementById('olor').value;
    const valueinsectos = document.getElementById('insectos').value;
    const valueHumedad = document.getElementById('humedad').value;

    const posOlor = document.getElementById('positionOlor');

    if (valueOlor == 'Otro') {
        posOlor.innerHTML = '<div class="w-full md:w-1/2 px-3">\
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">\
        Olor\
    </label>\
    <input id="textOlor"\
        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"\
        id="grid-last-name" type="text" placeholder="Doe">\
</div>';
    } else if (posOlor.innerHTML != '' && valueOlor != 'Otro') {
        posOlor.innerHTML = '';
    }



    const posInsecto = document.getElementById('positionInsectos');

    if (valueinsectos == 'Otro') {
        posInsecto.innerHTML = `
    <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tempCompostera">
            Insectos
        </label>
        <input id="textInsectos"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            type="text" placeholder="Ingrese insectos">
    </div>
`;
    } else if (posInsecto.innerHTML != '' && valueinsectos != 'Otro') {
        posInsecto.innerHTML = '';
    }



    const posHumedad = document.getElementById('positionHumedad');

    if (valueHumedad == 'Otro') {
        posHumedad.innerHTML = `
        <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Humedad
        </label>
        <input id="textHumedad"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-last-name" type="text" placeholder="Doe">
    </div>
`;
    } else if (posHumedad.innerHTML != '' && valueHumedad != 'Otro') {
        posHumedad.innerHTML = '';
    }
}