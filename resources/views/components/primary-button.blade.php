<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500']) }}>
    {{ $slot }}
</button>