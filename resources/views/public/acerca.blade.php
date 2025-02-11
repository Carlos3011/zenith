@extends('layout')

@section('title', 'Acerca de')

@section('content')

<!-- Sección de Introducción -->
<section class="relative py-20 bg-gradient-to-br from-primary-100 to-purple-200">
    <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
        <div class="mb-8">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-purple-500 mb-4">
                <span id="typed-mision" ></span>
            </h1>
            <p class="text-xl sm:text-lg md:text-xl text-cyan-700 mt-4" data-aos="fade-up" data-aos-delay="300">
                Innovación tecnológica al servicio de tu bienestar emocional
            </p>
        </div>
    </div>
</section>

<!-- Nueva Sección: ¿Qué nos hace únicos? -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">¿Qué nos hace únicos?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach([
                ['Inteligencia Artificial', 'fas fa-microchip', 'Nuestra IA analiza patrones emocionales con precisión avanzada.', 'text-primary-600'],
                ['Soporte Humano', 'fas fa-headset', 'Conexión con psicólogos y especialistas cuando más lo necesitas.', 'text-teal-600'],
                ['Privacidad Segura', 'fas fa-lock', 'Tus datos están encriptados y protegidos bajo estándares internacionales.', 'text-indigo-600']
            ] as $item)
                <div class="bg-gray-50 p-8 rounded-xl shadow-md text-center transition-transform hover:scale-105 hover:shadow-lg duration-300" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <i class="{{ $item[1] }} text-3xl {{ $item[3] }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ $item[0] }}</h3>
                    <p class="text-gray-600">{{ $item[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Sección: ¿Cómo Funciona la IA? -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">¿Cómo Funciona la IA?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['fas fa-brain', 'Análisis de Patrones', 'Nuestra IA identifica patrones emocionales con alta precisión.', 'text-cyan-500'],
                ['fas fa-laptop-code', 'Diagnóstico Personalizado', 'Brinda un diagnóstico en tiempo real basado en emociones.', 'text-teal-500'],
                ['fas fa-stethoscope', 'Intervención y Soporte', 'Conexión con psicólogos cuando se detectan señales críticas.', 'text-indigo-500']
            ] as $item)
                <div class="bg-white p-8 rounded-xl shadow-md text-center transition-transform hover:scale-105 hover:shadow-lg duration-300" data-aos="fade-up">
                    <i class="{{ $item[0] }} text-5xl {{ $item[3] }} mb-6"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ $item[1] }}</h3>
                    <p class="text-gray-600">{{ $item[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Sección de Preguntas Frecuentes -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Preguntas Frecuentes</h2>
        <div class="space-y-6">
            @foreach([
                ['¿Qué es el PHQ-8?', 'Es un cuestionario de 8 preguntas para evaluar síntomas de depresión.'],
                ['¿Cómo se realiza el análisis emocional?', 'El modelo de IA analiza respuestas y tono de voz.'],
                ['¿Es seguro usar la plataforma?', 'Sí, los datos están protegidos bajo estándares internacionales.']
            ] as $item)
                <div class="bg-gray-50 p-6 rounded-xl shadow-md" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-800">{{ $item[0] }}</h3>
                    <p class="text-gray-600 mt-2">{{ $item[1] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Nueva Sección: Nuestros Valores -->
<section class="py-20 bg-gradient-to-br from-purple-200 to-blue-200">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Nuestros Valores</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach([
                ['Compromiso', 'fas fa-hand-holding-heart', 'Nos comprometemos a brindar soluciones tecnológicas con un enfoque humano.', 'text-red-600'],
                ['Innovación', 'fas fa-lightbulb', 'Nuestra plataforma se mantiene a la vanguardia de la inteligencia artificial aplicada a la salud mental.', 'text-yellow-500'],
                ['Confianza', 'fas fa-users', 'Garantizamos la seguridad y privacidad de la información de todos nuestros usuarios.', 'text-green-600']
            ] as $item)
                <div class="bg-white p-8 rounded-xl shadow-md text-center transition-transform hover:scale-105 hover:shadow-lg duration-300" data-aos="fade-up">
                    <div class="w-16 h-16 mx-auto bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <i class="{{ $item[1] }} text-3xl {{ $item[3] }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ $item[0] }}</h3>
                    <p class="text-gray-600">{{ $item[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Sección de Testimonios -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Lo que dicen nuestros usuarios</h2>
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-xl shadow-md" data-aos="fade-up">
                <p class="text-gray-600">"Gracias a esta plataforma pude detectar síntomas de ansiedad que no había notado antes. Me conectaron con un psicólogo rápidamente y me siento mucho mejor."</p>
                <p class="text-gray-800 font-semibold mt-4">Juan P.</p>
                <p class="text-gray-600 text-sm">Usuario desde 2023</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md" data-aos="fade-up">
                <p class="text-gray-600">"La herramienta de evaluación PHQ-8 es excelente. Me dio una perspectiva clara sobre mi salud emocional y me permitió buscar ayuda a tiempo."</p>
                <p class="text-gray-800 font-semibold mt-4">María G.</p>
                <p class="text-gray-600 text-sm">Usuario desde 2022</p>
            </div>
        </div>
    </div>
</section>

@endsection
