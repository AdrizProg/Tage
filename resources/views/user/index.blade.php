<x-app-layout>
    <div class="flex justify-center mt-8">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
            <a href="{{ route('users.create') }}" class="flex justify-end mb-4">
                <button class="block rounded-md bg-green-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ __('Nuevo usuario') }}
                </button>
            </a>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 border-b">
                                Nombre
                            </th>
                            <th class="py-2 px-4 border-b">
                                Correo
                            </th>
                            <th class="py-2 px-4 border-b">
                                Creado
                            </th>
                            <th class="py-2 px-4 border-b">
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b">{{ $user->name }}</td>

                            <td class="py-2 px-4 border-b">{{ $user->email }}</td>

                            <td class="py-2 px-4 border-b">{{ $user->created_at }}</td>

                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                <a href="{{ route('users.show', $user->id) }}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                    {{ __('Mostrar') }}
                                </a>

                                <a href="{{ route('users.edit', $user->id) }}" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                    {{ __('Editar') }}
                                </a>

                                <a href="{{ route('users.destroy', $user->id) }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">
                                    {{ __('Borrar') }}
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>