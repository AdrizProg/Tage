<!-- Durante -->
<div class="border-t pt-4 text-center">
    <h3 class="text-lg font-semibold text-gray-800">Durante</h3>

    <!-- Riego -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Riego:</span>
        <span class="text-sm text-gray-900">
            <?php echo $durante->riego == null ? 'Ningún dato' : $durante->riego; ?>
        </span>
    </div>

    <!-- Revolver -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Revolver:</span>
        <span class="text-sm text-gray-900">
            <?php echo $durante->revolver == null ? 'Ningún dato' : $durante->revolver; ?>
        </span>
    </div>

    <!-- Aporte Verde -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Aporte Verde:</span>
        <span class="text-sm text-gray-900">
            <?php echo $durante->aporteVerde == null ? 'Ningún dato' : $durante->aporteVerde; ?>
        </span>
    </div>

    <!-- Tipo Aporte Verde -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Tipo Aporte Verde:</span>
        <span class="text-sm text-gray-900">
            <?php echo $durante->tipoAporteVerde == null ? 'Ningún dato' : $durante->tipoAporteVerde; ?>
        </span>
    </div>

    <!-- Aporte Seco -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Aporte Seco:</span>
        <span class="text-sm text-gray-900">
            <?php echo $durante->aporteSeco == null ? 'Ningún dato' : $durante->aporteSeco; ?>
        </span>
    </div>

    <!-- Tipo Aporte Seco -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Tipo Aporte Seco:</span>
        <span class="text-sm text-gray-900">
            <?php echo $durante->tipoAporteSeco == null ? 'Ningún dato' : $durante->tipoAporteSeco; ?>
        </span>
    </div>

    <!-- Observaciones -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Observaciones:</span>
        <span class="text-sm text-gray-900">
            <?php echo $durante->observaciones == null ? 'Ningún dato' : $durante->observaciones; ?>
        </span>
    </div>
</div>