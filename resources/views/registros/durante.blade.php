<!-- Durante -->
<div class="border-t pt-4 text-center">
    <h3 class="text-lg font-semibold text-gray-800">Durante</h3>

    <!-- Riego -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Riego:</span>
        <span class="text-sm text-gray-900">{{$durante->riego}}</span>
    </div>

    <!-- Revolver -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Revolver:</span>
        <span class="text-sm text-gray-900">{{$durante->revolver}}</span>
    </div>

    <!-- Aporte Verde -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Aporte Verde:</span>
        <span class="text-sm text-gray-900">{{$durante->aporteVerde}}</span>
    </div>

    <!-- Tipo Aporte Verde -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Tipo Aporte Verde:</span>
        <span class="text-sm text-gray-900">{{$durante->tipoAporteVerde}}</span>
    </div>

    <!-- Aporte Seco -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Aporte Seco:</span>
        <span class="text-sm text-gray-900">{{$durante->aporteSeco}}</span>
    </div>

    <!-- Tipo Aporte Seco -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Tipo Aporte Seco:</span>
        <span class="text-sm text-gray-900">{{$durante->tipoAporteSeco}}</span>
    </div>

    <!-- Observaciones -->
    <div class="flex justify-between">
        <span class="text-sm font-medium text-gray-700">Observaciones:</span>
        <span class="text-sm text-gray-900">{{$durante->observaciones}}</span>
    </div>
</div>