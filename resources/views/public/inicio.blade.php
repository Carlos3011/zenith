@extends('layouts.public')

@section('title', 'Inicio')

@section('content')
    <!-- Sección de bienvenida con animación -->
    <section class="text-center mb-16 pt-20" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6 leading-tight">
                Detección temprana de <span id="typed" class="text-cyan-400"></span> con <span class="text-purple-600">Inteligencia Artificial</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8">
                Evaluación PHQ-8 automatizada + Chatbot de apoyo emocional + Conexión con profesionales certificados
            </p>
            <div class="mt-8 space-x-4">
                <a href="#" class="bg-purple-600 text-white px-8 py-3 rounded-full hover:bg-purple-700  inline-blocktransform  shadow-lg">
                    Comenzar Evaluación
                </a>
                <a href="#" class="border-2 border-purple-600 text-purple-600 px-8 py-3 rounded-full hover:bg-purple-50  inline-block">
                    Ver Video Explicativo
                </a>
            </div>
        </div>
    </section>

    <!-- Tarjetas de características mejoradas -->
    <section class="grid md:grid-cols-3 gap-8 mb-16 px-4">
        <!-- Nueva tarjeta: Chatbot Integrado -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" 
            data-aos="fade-up" data-aos-delay="100">
            <div class="text-purple-600 mb-4">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Chatbot EmpathIA</h3>
            <p class="text-gray-600 mb-4">Conversación natural con IA especializada en salud mental</p>
            <ul class="list-disc list-inside text-purple-600 text-sm space-y-2">
                <li class="text-gray-600">Detección de patrones depresivos</li>
                <li class="text-gray-600">Seguimiento emocional continuo</li>
                <li class="text-gray-600">Primeros auxilios psicológicos</li>
            </ul>
        </div>

        <!-- Tarjeta existente modificada: Integración con Psicólogos -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" 
            data-aos="fade-up" data-aos-delay="200">
            <div class="text-purple-600 mb-4">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Red de Psicólogos</h3>
            <p class="text-gray-600 mb-4">Conexión inmediata con especialistas cuando se detectan riesgos</p>
            <div class="bg-purple-50 p-4 rounded-lg">
                <p class="text-sm text-gray-600">
                    <span class="font-semibold text-purple-600">Alerta profesional:</span> Nuestro sistema notifica automáticamente a los psicólogos cuando se detecta una puntuación PHQ-8 elevada
                </p>
            </div>
        </div>

        <!-- Nueva tarjeta: Sistema de Recomendaciones -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300" 
            data-aos="fade-up" data-aos-delay="300">
            <div class="text-purple-600 mb-4">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Recomendaciones IA</h3>
            <p class="text-gray-600 mb-4">Plan personalizado según tu evaluación</p>
            <div class="space-y-3">
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                    <span class="text-gray-600 text-sm">Ejercicios personalizados</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                    <span class="text-gray-600 text-sm">Recursos educativos</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                    <span class="text-gray-600 text-sm">Seguimiento progresivo</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de proceso mejorada -->
    <section class="bg-purple-50 py-16 mb-16" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Nuestro Proceso Científico</h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center" data-aos="flip-up">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <span class="text-2xl font-bold text-purple-600">1</span>
                    </div>
                    <h3 class="font-semibold mb-2">Evaluación PHQ-8</h3>
                    <p class="text-gray-600 text-sm">Test validado por la OMS para detección de depresión</p>
                </div>
                <div class="text-center" data-aos="flip-up" data-aos-delay="100">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <span class="text-2xl font-bold text-purple-600">2</span>
                    </div>
                    <h3 class="font-semibold mb-2">Análisis Predictivo</h3>
                    <p class="text-gray-600 text-sm">Modelo de IA con 92% de precisión diagnóstica</p>
                </div>
                <div class="text-center" data-aos="flip-up" data-aos-delay="200">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <span class="text-2xl font-bold text-purple-600">3</span>
                    </div>
                    <h3 class="font-semibold mb-2">Resultados Clínicos</h3>
                    <p class="text-gray-600 text-sm">Reporte detallado con niveles de riesgo</p>
                </div>
                <div class="text-center" data-aos="flip-up" data-aos-delay="300">
                    <div class="bg-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <span class="text-2xl font-bold text-purple-600">4</span>
                    </div>
                    <h3 class="font-semibold mb-2">Intervención</h3>
                    <p class="text-gray-600 text-sm">Conexión con psicólogos o recursos de autoayuda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de seguridad y privacidad -->
    <section class="mb-16 px-4" data-aos="fade-up">
        <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-lg p-8">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="flex-shrink-0">
                    <div class="w-24 h-24 bg-purple-100 rounded-full flex items-center justify-center">
                        <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-4">Seguridad Garantizada</h2>
                    <p class="text-gray-600 mb-4">Cumplimos con los más altos estándares de protección de datos:</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Encriptación end-to-end</li>
                        <li>Certificación HIPAA para salud digital</li>
                        <li>Almacenamiento anonimizado</li>
                        <li>Controles de acceso profesionales</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
