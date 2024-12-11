<!-- Antes -->
<div class="border-t pt-4 text-center">
    <h3 class="text-lg font-semibold text-gray-800">Antes</h3>

    <!-- Temp Ambiente -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Temp Ambiente:</span>
        <span class="text-sm text-gray-900">{{$antes->tempAmbiente}}</span>
    </div>

    <!-- Temp Compostera -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Temp Compostera:</span>
        <span class="text-sm text-gray-900">{{$antes->tempCompostera}}</span>
    </div>

    <!-- Nivel Llenado -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Nivel Llenado:</span>
        <span class="text-sm text-gray-900">{{$antes->nivelLlenado}}</span>
    </div>

    <!-- Olor -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Olor:</span>
        <span class="text-sm text-gray-900">{{$antes->olor}}</span>
    </div>

    <!-- Otro Olor -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Otro Olor:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->otroOlor == null ? 'Ninguno' : $antes->otroOlor; ?>
        </span>
    </div>

    <!-- Insectos -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Insectos:</span>
        <span class="text-sm text-gray-900">{{$antes->insectos}}</span>
    </div>

    <!-- Otro Insectos -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Otro Insectos:</span>
        <span class="text-sm text-gray-900">{{$antes->otroInsecto}}</span>
    </div>

    <!-- Humedad -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Humedad:</span>
        <span class="text-sm text-gray-900">{{$antes->humedad}}</span>
    </div>

    <!-- Otro Humedad -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Otro Humedad:</span>
        <span class="text-sm text-gray-900">{{$antes->otroHumedad}}</span>
    </div>

    <!-- Observaciones -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Observaciones:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->observaciones == null ? 'Ninguno' : $antes->observaciones; ?>
        </span>
    </div>
</div>