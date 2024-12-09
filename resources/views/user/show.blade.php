<x-app-layout>
    <card class="flex justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-2xl">
            <div class="flex items-center space-x-4 mb-8">
                <img alt="User Avatar" class="h-8 w-8 rounded-full" height="30" src="https://storage.googleapis.com/a1aa/image/92L9rHMMkS6tBZKeenI7EMYCL76beZg8KvkikxNlv9IQREunA.jpg" width="30" />
                <h2 class="text-2xl font-semibold">
                    {{ $user->name }}
                </h2>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="flex justify-between">
                    <div class="font-semibold">
                        Correo:
                    </div>
                    <div>
                        {{ $user->email }}
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="font-semibold">
                        Centro
                    </div>
                    <div>
                        {{ $user->centro_id }}
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="font-semibold">
                        Administrador
                    </div>
                    <div>
                        {{ $user->admin }}
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="font-semibold">
                        Creado
                    </div>
                    <div>
                        {{ $user->created_at }}
                    </div>
                </div>
            </div>
        </div>
    </card>

    <a type="button" href="{{ route('users.index') }}">
        <button class="block rounded-md bg-green-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            {{ __('Volver') }}
        </button>
    </a>
</x-app-layout>