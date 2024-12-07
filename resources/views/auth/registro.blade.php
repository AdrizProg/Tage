<x-app-layout>
    <div id="formularios" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md" style="margin-left: 27%;">
        <div id="formularioAntes">
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
                <div class="mb-4">
                    <label class="block mb-2" for="compostera">
                        Elige tu compostera
                    </label>

                    <select id="seleccionarCompostera" name="seleccionarCompostera" class="w-full p-2 border rounded" required>

                        @foreach ($composteras as $compostera)
                        <option>
                            {{ $compostera->nombre }}
                        </option>
                        @endforeach

                        <x-input-error :messages="$errors->get('centro')" class="mt-2" />
                    </select>
                </div>

                <div class="flex space-x-4 mb-4">
                    <div class="w-1/2">
                        <label class="block mb-2" for="ambiente">
                            Temperatura ambiente
                        </label>

                        <input id="tempAmbiente" type="number" placeholder="30" class="w-full p-2 border rounded" />
                    </div>

                    <div class="w-1/2">
                        <label class="block mb-2" for="compostera">
                            Temperatura compostera
                        </label>

                        <input id="tempCompostera" type="number" placeholder="30" class="w-full p-2 border rounded" />
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
        </div>

        <div id="formularioDurante">
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

                        <select id="aporteVerde" class="w-full p-2 border rounded">
                            <option>Si</option>
                            <option>No</option>
                        </select>

                        <textarea id="aporteVerde" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                    </div>

                    <div class="w-1/3">
                        <label class="block mb-2" for="olor">
                            Aporte seco
                        </label>

                        <select id="aporteSeco" class="w-full p-2 border rounded">
                            <option>Si</option>
                            <option>No</option>
                        </select>

                        <textarea id="aporteSeco" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block mb-2" for="observaciones">
                        Observaciones
                    </label>

                    <textarea id="observacionesAntes" class="w-full p-2 border rounded"></textarea>
                </div>
            </form>

            <div class="flex space-x-4 mb-4">
                <button id="btnRegistroAnterior" class="bg-green-600 text-white w-full py-2 rounded">
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
        </div>

        <div id="formularioDespues">
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

                    <textarea id="observacionesAntes" class="w-full p-2 border rounded"></textarea>
                </div>
            </form>

            <div class="flex space-x-4 mb-4">
                <button id="btnRegistroAnterior" class="bg-green-600 text-white w-full py-2 rounded">
                    Anterior
                </button>
            </div>

            <div class="flex space-x-4">
                <button id="btnCancelar" class="bg-green-600 text-white w-full py-2 rounded">
                    Cancelar registro
                </button>
            </div>
        </div>
    </div>
</x-app-layout>

@if (session('token'))
<p>Token: {{ session('token') }}</p>
@endif

<script>
    sessionStorage.setItem('apiToken', "{{session('token')}}")
</script>