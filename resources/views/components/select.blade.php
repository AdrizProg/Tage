<div {{ $attributes->merge(['class' => 'relative w-64']) }}>
    <select {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500 appearance-none']) }}>
        {{ $slot }}
    </select>
</div>