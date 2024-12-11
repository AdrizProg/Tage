// import composterasMostrar from './registroComposteras';

export default function mostrarRegistros(e) {
    const Form = document.getElementById('formularios');
    const idCompostera = window.location.href.slice(-1);

    if (e == 1) {
        if (localStorage.getItem('antes' + idCompostera)) {
            const dataAntes = localStorage.getItem('antes' + idCompostera);
            const arrayAntes = JSON.parse(dataAntes);

            Form.innerHTML = `
            <nav id="navbar-sticky" class="flex justify-between mb-4 bg-gray-200 p-2 rounded">
                <a href="#antes">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">
                        Antes
                    </button>
                </a>

                <a href="#durante">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Durante
                    </button>
                </a>

                <a href="#despues">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Después
                    </button>
                </a>
            </nav>

            <form class="w-full max-w-lg">
                <div class="flex space-x-4 mb-4">
                    <div class="w-1/2">
                        <label class="block mb-2" for="ambiente">
                            Temperatura ambiente
                        </label>

                        <input id="tempAmbiente" min="0" type="number" placeholder="30" class="w-full p-2 border rounded" value="${arrayAntes.tempAmbiente}" required/>
                    </div>

                    <div class="w-1/2">
                        <label class="block mb-2" for="compostera">
                            Temperatura compostera
                        </label>

                        <input id="tempCompostera" min="0" type="number" placeholder="30" class="w-full p-2 border rounded" value="${arrayAntes.tempCompostera}" required/>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block mb-2" for="nivel">
                        Nivel llenado
                    </label>

                    <input id="nivelLlenado" type="range" class="w-full" value="${arrayAntes.nivelLlenado}"/>
                </div>

                <div class="flex space-x-4 mb-4">
                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Olor
                        </label>

                        <select id="olor" class="w-full p-2 border rounded">
                            <option>Podrido</option>
                            <option>Amoniaco</option>
                            <option>Sin olor</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="insectos">
                            Insectos
                        </label>

                        <select id="insectos" class="w-full p-2 border rounded">
                            <option>Moscas</option>
                            <option>Larbas</option>
                            <option>Ratones</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="humedad">
                            Humedad
                        </label>

                        <select id="humedad" class="w-full p-2 border rounded">
                            <option>Muy mojado</option>
                            <option>Bien</option>
                            <option>Seco</option>
                            <option>Otro</option>
                        </select>
                    </div>
                </div>

                <div id="positionOlor"></div>

                <div id="positionInsectos"></div>

                <div id="positionHumedad"></div>

                <div class="mb-4">
                    <label class="block mb-2" for="observaciones" value="${arrayAntes.observaciones}">
                        Observaciones
                    </label>

                    <textarea id="observacionesAntes" class="w-full p-2 border rounded"></textarea>
                </div>
            </form>

            <div class="flex space-x-4 mb-4">
                <button id="boton" class="bg-green-600 text-white w-full py-2 rounded">
                    Siguiente
                </button>
            </div>

            <div class="flex space-x-4">
                <button id="btnCancelar" class="bg-green-600 text-white w-full py-2 rounded">
                    Cancelar registro
                </button>
            </div>
        `;
        } else {
            Form.innerHTML = `
            <nav id="navbar-sticky" class="flex justify-between mb-4 bg-gray-200 p-2 rounded">
                <a href="#antes">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">
                        Antes
                    </button>
                </a>

                <a href="#durante">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Durante
                    </button>
                </a>

                <a href="#despues">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Después
                    </button>
                </a>
            </nav>

            <form class="w-full max-w-lg">
                <div class="flex space-x-4 mb-4">
                    <div class="w-1/2">
                        <label class="block mb-2" for="ambiente">
                            Temperatura ambiente
                        </label>

                        <input id="tempAmbiente" min="0" type="number" placeholder="30" class="w-full p-2 border rounded" required/>
                    </div>

                    <div class="w-1/2">
                        <label class="block mb-2" for="compostera">
                            Temperatura compostera
                        </label>

                        <input id="tempCompostera" min="0" type="number" placeholder="30" class="w-full p-2 border rounded" required/>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block mb-2" for="nivel">
                        Nivel llenado
                    </label>

                    <input id="nivelLlenado" type="range" class="w-full" />
                </div>

                <div class="flex space-x-4 mb-4">
                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Olor
                        </label>

                        <select id="olor" class="w-full p-2 border rounded">
                            <option>Podrido</option>
                            <option>Amoniaco</option>
                            <option>Sin olor</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="insectos">
                            Insectos
                        </label>

                        <select id="insectos" class="w-full p-2 border rounded">
                            <option>Moscas</option>
                            <option>Larbas</option>
                            <option>Ratones</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="humedad">
                            Humedad
                        </label>

                        <select id="humedad" class="w-full p-2 border rounded">
                            <option>Muy mojado</option>
                            <option>Bien</option>
                            <option>Seco</option>
                            <option>Otro</option>
                        </select>
                    </div>
                </div>

                <div id="positionOlor"></div>

                <div id="positionInsectos"></div>

                <div id="positionHumedad"></div>

                <div class="mb-4">
                    <label class="block mb-2" for="observaciones">
                        Observaciones
                    </label>

                    <textarea id="observacionesAntes" class="w-full p-2 border rounded"></textarea>
                </div>
            </form>

            <div class="flex space-x-4 mb-4">
                <button id="boton" class="bg-green-600 text-white w-full py-2 rounded">
                    Siguiente
                </button>
            </div>

            <div class="flex space-x-4">
                <button id="btnCancelar" class="bg-green-600 text-white w-full py-2 rounded">
                    Cancelar registro
                </button>
            </div>
        `;
        }
    } else if (e == 2) {
        if (localStorage.getItem('durante' + idCompostera)) {
            const dataDurante = localStorage.getItem('durante' + idCompostera);
            const arrayDurante = JSON.parse(dataDurante);

            Form.innerHTML = `
            <nav id="navbar-sticky" class="flex justify-between mb-4 bg-gray-200 p-2 rounded">
                <a href="#antes">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Antes
                    </button>
                </a>

                <a href="#durante">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">
                        Durante
                    </button>
                </a>

                <a href="#despues">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Después
                    </button>
                </a>
            </nav>

            <form class="w-full max-w-lg">
                <div class="flex mb-4 justify-around">
                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Riego
                        </label>

                        <select id="riego" class="w-full p-2 border rounded">
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Revolver
                        </label>

                        <select id="revolver" class="w-full p-2 border rounded">
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>

                <div class="flex mb-4 justify-around">
                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Aporte verde
                        </label>

                        <input id="aporteVerde" min="0" type="number" placeholder="30" class="w-full p-2 border rounded" value="${arrayDurante.aporteVerde}" required/>

                        <label class="block mb-2" for="olor">
                            Tipo Aporte verde
                        </label>

                        <input id="tipoAporteVerde" type="text" placeholder="Palmera" class="w-full p-2 border rounded" value="${arrayDurante.tipoAporteVerde}"/>
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Aporte seco
                        </label>

                        <input id="aporteSeco" min="0" type="number" placeholder="30" class="w-full p-2 border rounded" value="${arrayDurante.aporteSeco}" required/>

                        <label class="block mb-2" for="olor">
                            Tipo Aporte seco
                        </label>

                        <input id="tipoAporteSeco" type="text" placeholder="Palmera" class="w-full p-2 border rounded" value="${arrayDurante.tipoAporteSeco}"/>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block mb-2" for="observaciones">
                        Observaciones
                    </label>

                    <input id="observacionesDurante" type="text" placeholder="Observaciones" class="w-full p-2 border rounded" value="${arrayDurante.observaciones}"/>
                </div>
            </form>

            <div class="flex space-x-4 mb-4">
                <button id="btnAnterior" class="bg-green-600 text-white w-full py-2 rounded">
                    Anterior
                </button>

                <button id="boton" class="bg-green-600 text-white w-full py-2 rounded">
                    Siguiente
                </button>
            </div>

            <div class="flex space-x-4">
                <button id="btnCancelar" class="bg-green-600 text-white w-full py-2 rounded">
                    Cancelar registro
                </button>
            </div>
        `;
        } else {
            Form.innerHTML = `
            <nav id="navbar-sticky" class="flex justify-between mb-4 bg-gray-200 p-2 rounded">
                <a href="#antes">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Antes
                    </button>
                </a>

                <a href="#durante">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">
                        Durante
                    </button>
                </a>

                <a href="#despues">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Después
                    </button>
                </a>
            </nav>

            <form class="w-full max-w-lg">
                <div class="flex mb-4 justify-around">
                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Riego
                        </label>

                        <select id="riego" class="w-full p-2 border rounded">
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Revolver
                        </label>

                        <select id="revolver" class="w-full p-2 border rounded">
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>

                <div class="flex mb-4 justify-around">
                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Aporte verde
                        </label>

                        <input id="aporteVerde" min="0" type="number" placeholder="30" class="w-full p-2 border rounded" />

                        <label class="block mb-2" for="olor">
                            Tipo Aporte verde
                        </label>

                        <input id="tipoAporteVerde" type="text" placeholder="Palmera" class="w-full p-2 border rounded" />
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Aporte seco
                        </label>

                        <input id="aporteSeco" type="number" min="0" placeholder="30" class="w-full p-2 border rounded" />

                        <label class="block mb-2" for="olor">
                            Tipo Aporte seco
                        </label>

                        <input id="tipoAporteSeco" type="text" placeholder="Palmera" class="w-full p-2 border rounded" />
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block mb-2" for="observaciones">
                        Observaciones
                    </label>

                    <input id="observacionesDurante" type="text" placeholder="Observaciones" class="w-full p-2 border rounded" />
                </div>
            </form>

            <div class="flex space-x-4 mb-4">
                <button id="btnAnterior" class="bg-green-600 text-white w-full py-2 rounded">
                    Anterior
                </button>

                <button id="boton" class="bg-green-600 text-white w-full py-2 rounded">
                    Siguiente
                </button>
            </div>

            <div class="flex space-x-4">
                <button id="btnCancelar" class="bg-green-600 text-white w-full py-2 rounded">
                    Cancelar registro
                </button>
            </div>
        `;
        }
    } else if (e == 3) {
        if (localStorage.getItem('despues' + idCompostera)) {
            const dataDespues = localStorage.getItem('despues' + idCompostera);
            const arrayDespues = JSON.parse(dataDespues);

            Form.innerHTML = `
            <nav id="navbar-sticky" class="flex justify-between mb-4 bg-gray-200 p-2 rounded">
                <a href="#antes">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Antes
                    </button>
                </a>

                <a href="#durante">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Durante
                    </button>
                </a>

                <a href="#despues">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">
                        Después
                    </button>
                </a>
            </nav>

            <form class="w-full max-w-lg">
                <div class="mb-4">
                    <label class="block mb-2" for="nivel">
                        Nivel llenado
                    </label>

                    <input id="nivelLlenado" type="range" class="w-full" value="${arrayDespues.nivelLlenado}"/>
                </div>

                <div class="mb-4">
                    <label class="block mb-2" for="observaciones">
                        Observaciones
                    </label>

                    <input id="observacionesDespues" type="text" placeholder="Observaciones" class="w-full p-2 border rounded" value="${arrayDespues.observaciones}"/>
                </div>
            </form>

            <div class="flex space-x-4 mb-4">
                <button id="btnAnterior" class="bg-green-600 text-white w-full py-2 rounded">
                    Anterior
                </button>

                <button id="boton" class="bg-green-600 text-white w-full py-2 rounded">
                    Terminar
                </button>
            </div>

            <div class="flex space-x-4">
                <button id="btnCancelar" class="bg-green-600 text-white w-full py-2 rounded">
                    Cancelar registro
                </button>
            </div>
    `;
        } else {
            Form.innerHTML = `
            <nav id="navbar-sticky" class="flex justify-between mb-4 bg-gray-200 p-2 rounded">
                <a href="#antes">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Antes
                    </button>
                </a>

                <a href="#durante">
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        Durante
                    </button>
                </a>

                <a href="#despues">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">
                        Después
                    </button>
                </a>
            </nav>

            <form class="w-full max-w-lg">
                <div class="mb-4">
                    <label class="block mb-2" for="nivel">
                        Nivel llenado
                    </label>

                    <input id="nivelLlenado" type="range" class="w-full" />
                </div>

                <div class="mb-4">
                    <label class="block mb-2" for="observaciones">
                        Observaciones
                    </label>

                    <input id="observacionesDespues" type="text" placeholder="Observaciones" class="w-full p-2 border rounded" />
                </div>
            </form>

            <div class="flex space-x-4 mb-4">
                <button id="btnAnterior" class="bg-green-600 text-white w-full py-2 rounded">
                    Anterior
                </button>

                <button id="boton" class="bg-green-600 text-white w-full py-2 rounded">
                    Terminar
                </button>
            </div>

            <div class="flex space-x-4">
                <button id="btnCancelar" class="bg-green-600 text-white w-full py-2 rounded">
                    Cancelar registro
                </button>
            </div>
    `;
        }
    }
}