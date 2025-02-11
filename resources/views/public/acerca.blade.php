@extends('layout')

@section('title', 'Acerca de')

@section('content')

    <section class="relative py-20 bg-gradient-to-br from-primary-100 to-purple-200 overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
            <div class="mb-8" data-aos="zoom-in">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-purple-500 mb-4">
                    <span id="typed-mision" class="border-b-4 border-white"></span>
                </h1>
                <p class="text-xl sm:text-lg md:text-xl text-cyan-700 mt-4" data-aos="fade-up" data-aos-delay="300">
                    Innovación tecnológica al servicio de tu bienestar emocional
                </p>
            </div>
        </div>
        <!--canvas id="particlesCanvas" class="absolute inset-0 w-full h-full"></canvas-->
    </section>


    <!-- SEPARADOR ORGÁNICO -->
    <div class="h-48 bg-space-700 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 opacity-50"></div>
        <div class="absolute inset-0 animate-orbital-movement">
            <div class="w-48 h-48 bg-secondary/20 rounded-full blur-3xl"></div>
        </div>
    </div>

    <!-- Nueva Sección: ¿Qué nos hace únicos? -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">¿Qué nos hace únicos?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach([
                    ['Inteligencia Artificial', 'fas fa-microchip', 'primary-600', 'Nuestra IA analiza patrones emocionales con precisión avanzada.'],
                    ['Soporte Humano', 'fas fa-user-md', 'purple-600', 'Conexión con psicólogos y especialistas cuando más lo necesitas.'],
                    ['Privacidad Segura', 'fas fa-shield-alt', 'cyan-600', 'Tus datos están encriptados y protegidos bajo estándares internacionales.']
                ] as $item)
                    <div class="bg-gray-50 p-8 rounded-xl shadow-md text-center transition-transform hover:scale-105 hover:shadow-lg duration-300" data-aos="fade-up">
                        <div class="w-16 h-16 mx-auto bg-{{ explode('-', $item[2])[0] }}-100 rounded-full flex items-center justify-center mb-6">
                            <i class="{{ $item[1] }} text-3xl text-{{ $item[2] }}"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">{{ $item[0] }}</h3>
                        <p class="text-gray-600">{{ $item[3] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
 
    <!-- Sección: ¿Cómo Funciona la IA? -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">¿Cómo Funciona la IA?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl shadow-md text-center transition-transform hover:scale-105 hover:shadow-lg duration-300" data-aos="fade-up">
                    <i class="fas fa-brain text-5xl text-primary-600 mb-6"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Análisis de Patrones</h3>
                    <p class="text-gray-600">Nuestra IA identifica patrones emocionales a través de tus respuestas y tu tono de voz, analizando tus emociones con alta precisión.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-md text-center transition-transform hover:scale-105 hover:shadow-lg duration-300" data-aos="fade-up">
                    <i class="fas fa-user-md text-5xl text-purple-600 mb-6"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Diagnóstico Personalizado</h3>
                    <p class="text-gray-600">El modelo interpreta los resultados en tiempo real, brindando un diagnóstico basado en el análisis de tus emociones y síntomas.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-md text-center transition-transform hover:scale-105 hover:shadow-lg duration-300" data-aos="fade-up">
                    <i class="fas fa-stethoscope text-5xl text-cyan-600 mb-6"></i>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Intervención y Soporte</h3>
                    <p class="text-gray-600">Cuando la IA detecta señales críticas, conecta automáticamente con psicólogos profesionales para una atención inmediata.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEPARADOR ORGÁNICO -->
    <div class="h-48 bg-space-700 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 opacity-50"></div>
        <div class="absolute inset-0 animate-orbital-movement">
            <div class="w-48 h-48 bg-secondary/20 rounded-full blur-3xl"></div>
        </div>
    </div>

    <!-- Sección: Preguntas Frecuentes -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Preguntas Frecuentes</h2>
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <button class="w-full text-left text-xl font-semibold text-gray-800 focus:outline-none" data-aos="fade-up" data-aos-delay="200">
                        ¿Qué es el PHQ-8?
                    </button>
                    <div class="mt-4 text-gray-600">
                        <p>El PHQ-8 es un cuestionario de 8 preguntas utilizado para evaluar los síntomas de depresión. Se usa como herramienta de diagnóstico inicial.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <button class="w-full text-left text-xl font-semibold text-gray-800 focus:outline-none" data-aos="fade-up" data-aos-delay="300">
                        ¿Cómo se realiza el análisis emocional?
                    </button>
                    <div class="mt-4 text-gray-600">
                        <p>El análisis emocional se basa en tus respuestas y en el tono de tu voz, utilizando modelos de IA para identificar posibles trastornos emocionales.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <button class="w-full text-left text-xl font-semibold text-gray-800 focus:outline-none" data-aos="fade-up" data-aos-delay="400">
                        ¿Es seguro usar la plataforma?
                    </button>
                    <div class="mt-4 text-gray-600">
                        <p>Sí, todos los datos que se recogen están encriptados y protegidos con los estándares más altos de privacidad para garantizar tu seguridad.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <button class="w-full text-left text-xl font-semibold text-gray-800 focus:outline-none" data-aos="fade-up" data-aos-delay="500">
                        ¿Puedo confiar en los diagnósticos de la IA?
                    </button>
                    <div class="mt-4 text-gray-600">
                        <p>Los diagnósticos proporcionados por la IA son altamente precisos, pero siempre se recomienda una consulta con un profesional de la salud mental para una evaluación completa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEPARADOR ORGÁNICO -->
    <div class="h-48 bg-space-700 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 opacity-50"></div>
        <div class="absolute inset-0 animate-orbital-movement">
            <div class="w-48 h-48 bg-secondary/20 rounded-full blur-3xl"></div>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Nuestra Evolución</h2>
            <div class="relative wrap overflow-hidden p-10 h-full">
                <div class="border-l-4 border-primary-600 absolute h-full left-1/2 transform -translate-x-1/2"></div>

                @foreach([
                    ['2021', 'Inicio del Proyecto', 'Un equipo de investigadores en IA y psicología unió fuerzas para crear una solución tecnológica enfocada en la salud mental.', 'fas fa-lightbulb', 'primary-600'],
                    ['2022', 'Prototipo del Chatbot', 'Se desarrolló la primera versión del chatbot con respuestas básicas para la detección de síntomas depresivos.', 'fas fa-robot', 'purple-600'],
                    ['2023', 'Evaluación PHQ-8 Integrada', 'El chatbot se combinó con el test PHQ-8, mejorando la precisión en la detección de ansiedad y depresión.', 'fas fa-check-circle', 'cyan-600'],
                    ['2024', 'Modelo IA Mejorado', 'Implementamos redes neuronales profundas para aumentar la precisión del diagnóstico en más del 92%.', 'fas fa-brain', 'red-500']
                ] as $index => $item)
                    <div class="mb-12 flex justify-between items-center w-full {{ $index % 2 == 0 ? 'flex-row-reverse' : '' }}">
                        <div class="w-5/12"></div>
                        <div class="bg-white p-6 rounded-lg shadow-md w-5/12 text-center border-t-4 border-{{ $item[4] }}"
                             data-aos="fade-{{ $index % 2 == 0 ? 'left' : 'right' }}" data-aos-delay="200">
                            <div class="w-12 h-12 mx-auto bg-{{ explode('-', $item[4])[0] }}-100 rounded-full flex items-center justify-center mb-4">
                                <i class="{{ $item[3] }} text-2xl text-{{ $item[4] }}"></i>
                            </div>
                            <h3 class="text-lg font-bold text-{{ $item[4] }}">{{ $item[0] }} - {{ $item[1] }}</h3>
                            <p class="text-gray-600">{{ $item[2] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

        <!-- SEPARADOR ORGÁNICO -->
    <div class="h-48 bg-space-700 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 opacity-50"></div>
        <div class="absolute inset-0 animate-orbital-movement">
            <div class="w-48 h-48 bg-secondary/20 rounded-full blur-3xl"></div>
        </div>
    </div>

    <!-- Sección de Valores -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-12">
                @foreach([
                    ['Misión', 'fas fa-hand-holding-heart', 'primary-600', 'Brindar apoyo emocional inteligente mediante IA avanzada, combinando tecnología y psicología para ofrecer soluciones accesibles y efectivas en el cuidado mental.'],
                    ['Visión', 'fas fa-eye', 'purple-600', 'Ser líderes globales en soluciones digitales de salud mental, integrando inteligencia artificial predictiva con atención humana profesional para un bienestar emocional integral.'],
                    ['Objetivo', 'fas fa-bullseye', 'cyan-600', 'Desarrollar un ecosistema tecnológico que permita la detección temprana de trastornos emocionales y brinde herramientas preventivas accesibles para todos.']
                ] as $index => $item)
                    <div class="bg-white p-8 rounded-2xl shadow-lg transition-transform hover:scale-105 hover:shadow-xl duration-300"
                         data-aos="fade-{{ $index === 0 ? 'right' : ($index === 1 ? 'up' : 'left') }}" data-aos-delay="100">
                        <div class="w-20 h-20 bg-{{ explode('-', $item[2])[0] }}-100 rounded-full flex items-center justify-center mb-6">
                            <i class="{{ $item[1] }} text-3xl text-{{ $item[2] }}"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $item[0] }}</h2>
                        <p class="text-gray-600 leading-relaxed">{{ $item[3] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

        <!-- SEPARADOR ORGÁNICO -->
    <div class="h-48 bg-space-700 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 opacity-50"></div>
        <div class="absolute inset-0 animate-orbital-movement">
            <div class="w-48 h-48 bg-secondary/20 rounded-full blur-3xl"></div>
        </div>
    </div>

     <!-- Sección de Impacto Actualizada -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12">Impacto en la Salud Mental Universitaria</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <canvas id="impactChart"></canvas>
                </div>
                <div class="text-left" data-aos="fade-left">
                    <p class="text-lg text-gray-700 mb-6">
                        Datos alarmantes en México (Estudio UNAM 2022):
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-brain text-purple-600 mr-3"></i>
                            <strong>75%</strong> de estudiantes reportan niveles críticos de estrés
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-heartbeat text-primary-600 mr-3"></i>
                            <strong>60%</strong> presenta síntomas de ansiedad académica
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-bed text-cyan-600 mr-3"></i>
                            <strong>45%</strong> muestra indicios de depresión
                        </li>
                    </ul>
                    <div class="bg-primary-100 p-6 rounded-xl border-l-4 border-primary-600">
                        <p class="text-gray-700 italic">
                            "Nuestra tecnología detecta patrones de riesgo con 92% de precisión, permitiendo intervención temprana"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script de Gráficas con Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
                // Gráfica de Impacto Actualizada
            const ctx = document.getElementById('impactChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Estrés Crónico', 'Ansiedad Académica', 'Síntomas Depresivos'],
                    datasets: [{
                        label: 'Porcentaje de Estudiantes',
                        data: [75, 60, 45],
                        backgroundColor: [
                            'rgba(147, 51, 234, 0.8)',
                            'rgba(79, 70, 229, 0.8)',
                            'rgba(6, 182, 212, 0.8)'
                        ],
                        borderColor: [
                            'rgba(147, 51, 234, 1)',
                            'rgba(79, 70, 229, 1)',
                            'rgba(6, 182, 212, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Problemas de Salud Mental en Universitarios Mexicanos'
                        }
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    },
                    animation: {
                        duration: 2000,
                        easing: 'easeOutQuart'
                    }
                }
        });
        });
    </script>
@endsection
