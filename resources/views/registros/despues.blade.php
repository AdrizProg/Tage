<!-- Después -->
<div class="border-t pt-4 text-center">
    <h3 class="text-lg font-semibold text-gray-800">Registro</h3>

    <!-- Nivel Llenado -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Nivel Llenado:</span>
        <span class="text-sm text-gray-900">
            <?php echo $despues->nivelLlenado == null ? 'Ningún dato' : $despues->nivelLlenado; ?>
        </span>
    </div>

    <!-- Observaciones -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Observaciones:</span>
        <span class="text-sm text-gray-900">
            <?php echo $despues->observaciones == null ? 'Ningún dato' : $despues->observaciones; ?>
        </span>
    </div>
</div>