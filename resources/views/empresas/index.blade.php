<!-- resources/views/empresas/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis Empresas') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-6">Empresas</h1>

        <a href="{{ route('empresas.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-black bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-6">
            Crear Empresa
        </a>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <ul class="divide-y divide-gray-200">
                @foreach($empresas as $empresa)
                    <li class="px-4 py-5 sm:px-6">
                        <div class="flex items-center justify-between space-x-4">
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-medium text-gray-900 truncate">{{ $empresa->nombre }}</h3>
                                <p class="text-sm text-gray-500">{{ $empresa->direccion }}</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ route('empresas.show', $empresa) }}" class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Ver
                                </a>
                                <a href="{{ route('empresas.edit', $empresa) }}" class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-yellow-700 bg-yellow-100 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                    Editar
                                </a>
                                <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
