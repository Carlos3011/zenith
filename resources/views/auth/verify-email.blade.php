<x-guest-layout>
    <div class="max-w-md mx-auto p-6 bg-white shadow-lg rounded-lg text-center">
        <h2 class="text-lg font-semibold text-gray-700 mb-3">
            {{ __('Verifica tu correo electrónico') }}
        </h2>

        <p class="text-sm text-gray-600 leading-relaxed">
            {{ __('¡Gracias por registrarte! Antes de comenzar, verifica tu dirección de correo electrónico haciendo clic en el enlace que te enviamos. Si no recibiste el correo, podemos enviarte otro.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="mt-4 p-3 text-sm text-green-700 bg-green-100 border border-green-400 rounded-lg">
                {{ __('Se ha enviado un nuevo enlace de verificación a tu correo.') }}
            </div>
        @endif

        <div class="mt-6 flex flex-col gap-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <x-primary-button class="w-full py-2 text-lg rounded-lg shadow-md hover:bg-indigo-600 transition duration-300">
                    {{ __('Reenviar correo de verificación') }}
                </x-primary-button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full py-2 text-sm font-semibold text-gray-600 hover:text-red-600 transition duration-300">
                    {{ __('Finalizar sesión') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
