<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Nombre')" class="font-semibold" />
            <x-text-input id="name" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-300" 
                          type="text" 
                          name="name" 
                          :value="old('name')" 
                          required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Correo')" class="font-semibold" />
            <x-text-input id="email" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-300" 
                          type="email" 
                          name="email" 
                          :value="old('email')" 
                          required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Contraseña')" class="font-semibold" />
            <x-text-input id="password" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-300" 
                          type="password" 
                          name="password" 
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" class="font-semibold" />
            <x-text-input id="password_confirmation" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-300" 
                          type="password" 
                          name="password_confirmation" 
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between mt-4">
            <a class="text-sm text-gray-600 hover:text-gray-900 font-medium mb-3 sm:mb-0" href="{{ route('login') }}">
                {{ __('¿Ya estás registrado?') }}
            </a>

            <x-primary-button class="px-5 py-2 text-lg rounded-lg shadow-md">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
