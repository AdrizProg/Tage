@foreach ($registroAntes as $antes)
<div value="{{ $antes->id }}">{{ $antes->id }}</div>
@endforeach

<br>

@foreach ($registroDurante as $durante)
<div value="{{ $durante->id }}">{{ $durante->id }}</div>
@endforeach

<br>

@foreach ($registroDespues as $despues)
<div value="{{ $despues->id }}">{{ $despues->id }}</div>
@endforeach