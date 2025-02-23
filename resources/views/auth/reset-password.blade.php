<x-guest-layout>
    <div class="max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-xl font-semibold text-center text-gray-700 mb-4">
            {{ __('Restablecer Contraseña') }}
        </h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Correo')" class="font-semibold" />
                <x-text-input id="email" class="block w-full mt-1 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-300"
                              type="email" name="email"
                              :value="old('email', $request->email)"
                              required autofocus autocomplete="username" />
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

            <div class="flex justify-center mt-4">
                <x-primary-button class="px-5 py-2 text-lg rounded-lg shadow-md">
                    {{ __('Cambiar contraseña') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
