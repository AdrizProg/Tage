<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-green-500 text-white py-2 rounded hover:bg-green-600 scalaInicial']) }}>
    {{ $slot }}
</button>
