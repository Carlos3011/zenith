<x-guest-layout>
    <div class="max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg">
        <div class="mb-4 text-sm text-gray-600 text-center">
            {{ __('Estás en un área segura de la aplicación. Por favor, confirma tu contraseña para continuar.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Contraseña')" class="font-semibold" />
                <x-text-input id="password" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-300"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <div class="flex justify-center mt-4">
                <x-primary-button class="px-5 py-2 text-lg rounded-lg shadow-md">
                    {{ __('Confirmar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
