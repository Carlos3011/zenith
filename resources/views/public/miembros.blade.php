@extends('layout')

@section('title', 'Miembros')

@section('content')

<!-- Sección de introducción mejorada con partículas -->
<section class="relative py-20 bg-gradient-to-br from-purple-900 to-indigo-900 overflow-hidden">
    <div class="absolute inset-0 opacity-25">
        <div class="absolute w-96 h-96 bg-purple-500/30 rounded-full blur-3xl -top-28 -left-28 animate-pulse"></div>
        <div class="absolute w-96 h-96 bg-cyan-500/30 rounded-full blur-3xl -bottom-28 -right-28 animate-pulse delay-1000"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 text-center" data-aos="zoom-in">
        <h1 id="typed-academic"class="text-5xl md:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-300 mb-6">
        </h1>
        <h1 class="text-5xl md:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-300 mb-6">
            Nuestro Equipo de Expertos
        </h1>
        <p class="text-xl text-purple-100/90 max-w-3xl mx-auto leading-relaxed">
            Innovadores en la intersección entre la inteligencia artificial y la psicología clínica, comprometidos con revolucionar el cuidado de la salud mental.
        </p>
    </div>
</section>

<!-- Sección de miembros con diseño de vidrio -->
<section class="py-20 bg-indigo-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-cyan-500">
            Nuestro Equipo
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['M. C. Maria del Carmen Santiago Díaz', 'carmen_santiago.jpg', 'Investigadora', 'Ciencia de Datos e Inteligencia Artificial', ['fas fa-brain', 'fas fa-microchip']],
                ['M. C. Ana Claudia Zenteno Vázquez', 'claudia_zenteno.jpg', 'Investigadora','Ciberseguridad', ['fas fa-shield-alt', 'fas fa-lock']],
                ['M. C. Judith Pérez Marcial', 'judith_perez.jpg', 'Investigadora', 'Desarrolladora Web', ['fas fa-palette', 'fas fa-mobile-alt']],
                ['Dr. Gustavo Trinidad Rubín Linares', 'gustavo_rubin.jpg', 'Investigador', 'Hardware y Robótica Móvil', ['fas fa-robot', 'fas fa-cogs']]
            ] as $item)
                <div class="group relative bg-white/10 backdrop-blur-lg rounded-2xl p-6 shadow-2xl hover:shadow-purple-500/100 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up">
                    <div class="relative w-48 h-48 mx-auto mb-6 rounded-2xl shadow-xl">
                        <img src="{{ asset('images/miembros/' . $item[1]) }}" alt="{{ $item[0] }}" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/10 to-transparent"></div>
                    </div>
                    <h3 class="text-center text-xl font-bold text-gray-800 mb-2">{{ $item[0] }}</h3>
                    <p class="text-center text-gray-600 font-semibold mb-4">{{ $item[2] }}</p>
                    <p class="text-center text-gray-600 font-semibold mb-4">{{ $item[3] }}</p>
                    <div class="flex justify-center space-x-3 opacity-0 group-hover:opacity-100 transition-opacity">
                        @foreach($item[4] as $icon)
                            <span class="p-2 bg-purple-100 rounded-full text-purple-600 hover:bg-purple-200 transition">
                                <i class="{{ $icon }} text-lg"></i>
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Sección de especialidades con tarjetas interactivas -->
<section class="py-20 bg-gradient-to-br from-white to-indigo-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16 text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-purple-600">
            Nuestras Especialidades
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="relative bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300" data-aos="fade-right">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-t-2xl"></div>
                <div class="text-cyan-500 text-5xl mb-6">
                    <i class="fas fa-brain animate-pulse"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Inteligencia Emocional Computacional</h3>
                <p class="text-gray-600 mb-6">Desarrollo de sistemas de IA capaces de analizar y responder a estados emocionales humanos mediante procesamiento de lenguaje natural y reconocimiento de patrones.</p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-cyan-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-check text-cyan-600"></i>
                        </div>
                        <span class="text-gray-700">Análisis de voz y texto</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-cyan-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-check text-cyan-600"></i>
                        </div>
                        <span class="text-gray-700">Modelos predictivos emocionales</span>
                    </div>
                </div>
            </div>

            <div class="relative bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300" data-aos="fade-up">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-400 to-indigo-400 rounded-t-2xl"></div>
                <div class="text-purple-500 text-5xl mb-6">
                    <i class="fas fa-robot animate-bounce"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Asistentes Virtuales Terapéuticos</h3>
                <p class="text-gray-600 mb-6">Creación de chatbots inteligentes con capacidad para realizar intervenciones psicológicas iniciales y derivación a especialistas.</p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-check text-purple-600"></i>
                        </div>
                        <span class="text-gray-700">Conversaciones contextuales</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-check text-purple-600"></i>
                        </div>
                        <span class="text-gray-700">Sistema de alertas tempranas</span>
                    </div>
                </div>
            </div>

            <div class="relative bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-400 to-cyan-400 rounded-t-2xl"></div>
                <div class="text-indigo-500 text-5xl mb-6">
                    <i class="fas fa-shield-alt animate-spin-slow"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Seguridad de Datos Sensibles</h3>
                <p class="text-gray-600 mb-6">Implementación de protocolos de seguridad avanzados para garantizar la confidencialidad de la información médica y psicológica.</p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-check text-indigo-600"></i>
                        </div>
                        <span class="text-gray-700">Encriptación end-to-end</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-check text-indigo-600"></i>
                        </div>
                        <span class="text-gray-700">Autenticación biométrica</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de publicaciones y artículos -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-16 text-gray-800">Publicaciones y Artículos Recientes</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Artículo 1 -->
            <div class="bg-gray-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold mb-4">Titulo del Libro 1: HORIZONTES EN COMPUTACIÓN:
ESTUDIOS SOBRE INTELIGENCIA ARTIFICIAL, CIENCIA
DE DATOS Y SEGURIDAD</h3>
                <p class="text-gray-700">La inteligencia Artificial se encuentra en un crecimiento tan acelerado que cuesta trabajo imaginarnos
todo el potencial que tiene y lo que se está desarrollando para los siguientes años, como el chatgpt, que
dicho sirva de paso mucha gente hace unos años dudaba que se podría tener un chat que interactuara
con humanos y que además le sirviera no solo para entablar conversaciones inteligentes</p>
                <a href="https://conacic.siycise.org/docs/LIBRO1_2024_HORIZONTES_EN_COMPUTACIO%CC%81N_ESTUDIOS_SOBRE_INTELIGENCIA_ARTIFICIAL_CIENCIA_DE_DATOS_Y_SEGURIDAD.pdf" class="text-cyan-600 hover:underline mt-4 inline-block">Leer más</a>
            </div>
            
            <!-- Artículo 2 -->
            <div class="bg-gray-100 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold mb-4">Titulo del Libro 2: Perspectivas Académicas y de Investigación en
                Inteligencia Artificial, Ciencia de Datos y Seguridad</h3>
                <p class="text-gray-700">El desarrollo de estos chats no ha sido
trabajo de un par de meses, se sabe que ha llevado varios años, y otros más liberarlo, no solo por
aquellas ideas románticas de que pueden destruir el mundo, sino porque se deben limitar las
aplicaciones a fin de no crear confusión y mal uso e interpretación de la información que genera</p>
                <a href="https://conacic.siycise.org/docs/LIBRO2_2024_Avances_en_Computacio%CC%81n_Perspectivas_Acade%CC%81micas_y_de_Investigacio%CC%81n_en_Inteligencia_Artificial_Ciencia_de_Datos_y_Seguridad.pdf" class="text-cyan-600 hover:underline mt-4 inline-block">Leer más</a>
            </div>
        </div>
        
        
    </div>
</section>


@endsection
