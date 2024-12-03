@props(['active'])

@php
$classes = ($active ?? false)
? 'bg-yellow-800 text-white px-4 py-2 rounded-lg hover:bg-yellow-900 font-semibold'
: 'text-white hover:text-orange-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>