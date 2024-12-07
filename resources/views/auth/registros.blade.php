<x-app-layout>
    @foreach ($registros as $registro)
    <div class="bg-white p-8 rounded-lg shadow-lg w-full sm:w-96 mb-5">
        <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Registro: {{$registro->id}}</h2>

        <!-- Card Content -->
        <div class="space-y-4">
            <!-- ID -->
            <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-700">ID:</span>
                <span class="text-sm text-gray-900">{{$registro->id}}</span>
            </div>

            <!-- Inicio de Ciclo -->
            <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-700">Inicio de Ciclo:</span>
                <span class="text-sm text-gray-900">{{$registro->iniCiclo}}</span>
            </div>

            <!-- Compostera -->
            <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-700">Compostera:</span>
                <span class="text-sm text-gray-900">{{$registro->compostera}}</span>
            </div>

            <!-- ID de Usuario -->
            <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-700">ID de Usuario:</span>
                <span class="text-sm text-gray-900">{{$registro->user_id}}</span>
            </div>

            <!-- Creación -->
            <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-700">Creado:</span>
                <span class="text-sm text-gray-900">{{$registro->created_at}}</span>
            </div>

            <!-- Actualización -->
            <div class="flex justify-between">
                <span class="text-sm font-medium text-gray-700">Actualizado:</span>
                <span class="text-sm text-gray-900">{{$registro->updated_at}}</span>
            </div>
        </div>

        <!-- Formularios -->
        <div class="mt-6 space-y-6">
            <!-- Antes -->
            <div class="border-t pt-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">Antes</h3>

                <!-- Temp Ambiente -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Temp Ambiente:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Temp Compostera -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Temp Compostera:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Nivel Llenado -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Nivel Llenado:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Olor -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Olor:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Otro Olor -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Otro Olor:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Insectos -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Insectos:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Otro Insectos -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Otro Insectos:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Humedad -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Humedad:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Otro Humedad -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Otro Humedad:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Observaciones -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Observaciones:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>
            </div>

            <!-- Durante -->
            <div class="border-t pt-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">Durante</h3>

                <!-- Riego -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Riego:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Revolver -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Revolver:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Aporte Verde -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Aporte Verde:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Tipo Aporte Verde -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Tipo Aporte Verde:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Aporte Seco -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Aporte Seco:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Tipo Aporte Seco -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Tipo Aporte Seco:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Observaciones -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Observaciones:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>
            </div>

            <!-- Después -->
            <div class="border-t pt-4 text-center">
                <h3 class="text-lg font-semibold text-gray-800">Registro</h3>

                <!-- Nivel Llenado -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Nivel Llenado:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>

                <!-- Observaciones -->
                <div class="flex justify-between">
                    <span class="text-sm font-medium text-gray-700">Observaciones:</span>
                    <span class="text-sm text-gray-900"></span>
                </div>
            </div>
        </div>
    </div>


    @endforeach
</x-app-layout>