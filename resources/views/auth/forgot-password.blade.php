<x-guest-layout>
    <div class="max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg">
        <div class="mb-4 text-sm text-gray-600 text-center">
            {{ __('¿Olvidaste tu contraseña? No te preocupes. Solo ingresa tu correo electrónico y te enviaremos un enlace para restablecerla.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Correo')" class="font-semibold" />
                <x-text-input id="email" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-300"
                              type="email" 
                              name="email" 
                              :value="old('email')" 
                              required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="px-5 py-2 text-lg rounded-lg shadow-md">
                    {{ __('Enviar enlace de restablecimiento') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
