<x-app-layout>
    @include('auth.register')

    <a type="button" href="{{ route('users.index') }}">
        <button class="block rounded-md bg-green-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            {{ __('Volver') }}
        </button>
    </a>
</x-app-layout>