@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-gray-700 text-sm mb-2']) }}>
    {{ $value ?? $slot }}
</label>