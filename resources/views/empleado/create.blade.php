<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('empleado.store') }}" method="POST">
                        @csrf
                        <div>
                            <x-input-label for="cedula" :value="__('Cedula')" />
                            <x-text-input id="cedula" name="cedula" type="text" class="mt-1 block w-full"
                                :value="old('cedula')"  autofocus autocomplete="cedula" />
                        </div>
                        <div>
                            <x-input-label for="nombres" :value="__('Nombres')" />
                            <x-text-input id="nombres" name="nombres" type="text" class="mt-1 block w-full"
                                :value="old('nombres')"  autofocus autocomplete="nombres" />
                        </div>
                        <div>
                            <x-input-label for="apellidos" :value="__('Apellidos')" />
                            <x-text-input id="apellidos" name="apellidos" type="text" class="mt-1 block w-full"
                                :value="old('apellidos')"  autofocus autocomplete="apellidos" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
