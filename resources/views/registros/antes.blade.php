<!-- Antes -->
<div class="border-t pt-4 text-center">
    <h3 class="text-lg font-semibold text-gray-800">Antes</h3>

    <!-- Temp Ambiente -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Temp Ambiente:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->tempAmbiente == null ? 'Ningún dato' : $antes->tempAmbiente; ?>
        </span>
    </div>

    <!-- Temp Compostera -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Temp Compostera:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->tempCompostera == null ? 'Ningún dato' : $antes->tempCompostera; ?>
        </span>
    </div>

    <!-- Nivel Llenado -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Nivel Llenado:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->nivelLlenado == null ? 'Ningún dato' : $antes->nivelLlenado; ?>
        </span>
    </div>

    <!-- Olor -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Olor:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->olor == null ? 'Ningún dato' : $antes->olor; ?>
        </span>
    </div>

    <!-- Otro Olor -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Otro Olor:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->otroOlor == null ? 'Ningún dato' : $antes->otroOlor; ?>
        </span>
    </div>

    <!-- Insectos -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Insectos:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->insectos == null ? 'Ningún dato' : $antes->insectos; ?>
        </span>
    </div>

    <!-- Otro Insectos -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Otro Insectos:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->otroInsecto == null ? 'Ningún dato' : $antes->otroInsecto; ?>
        </span>
    </div>

    <!-- Humedad -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Humedad:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->humedad == null ? 'Ningún dato' : $antes->humedad; ?>
        </span>
    </div>

    <!-- Otro Humedad -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Otro Humedad:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->otroHumedad == null ? 'Ningún dato' : $antes->otroHumedad; ?>
        </span>
    </div>

    <!-- Observaciones -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Observaciones:</span>
        <span class="text-sm text-gray-900">
            <?php echo $antes->observaciones == null ? 'Ningún dato' : $antes->observaciones; ?>
        </span>
    </div>
</div>