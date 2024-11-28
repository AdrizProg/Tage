@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full p-2 bg-gray-100 text-gray-700 rounded focus:outline-none focus:ring-2 focus:ring-green-500']) }}>