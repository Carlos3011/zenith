@extends('layout')

@section('title', 'Inicio')

@section('content')
    <!-- Sección de cabecera -->
    <section class="relative text-center py-20 bg-gradient-to-br from-purple-500 to-cyan-600 overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml;utf8,<svg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'><rect width='100' height='100' fill='none' stroke='white' stroke-width='2' stroke-dasharray='5 5'/></svg>')"></div>
        <div class="relative max-w-4xl mx-auto px-4">
           
            <h1 id="typed-slogan"class="text-5xl font-black text-cyan-300 mb-6 leading-tight animate-fade-in-down">
            </h1>
            <p class="text-xl text-purple-100 font-medium mb-8 opacity-90">
                Descubre herramientas inteligentes para tu salud mental
            </p>
            <div class="animate-bounce-slow">
                <svg class="w-20 h-20 mx-auto text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- Sección interactiva con el chatbot -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-purple-50" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-center text-3xl font-extrabold text-cyan-500 mb-8">Interacción con el Chatbot</h2>
            <p class="text-center text-lg text-purple-900 sm:text-xl mb-12 max-w-3xl mx-auto">
                Inicia una conversación con nuestro chatbot para detectar señales de depresión o ansiedad. Haz clic en el botón para comenzar la evaluación.
            </p>
            <div class="text-center mb-10">
                <div class="inline-flex items-center bg-cyan-100 text-cyan-800 px-6 py-2 rounded-full mb-4">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-semibold">Test Confidencial</span>
                </div>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Evaluación Personalizada</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Nuestro sistema inteligente te guiará mediante preguntas simples para entender mejor tu estado emocional.
                </p>
            </div>
            <!-- Contenedor de botones -->
            <div id="interaction-container" class="relative group cursor-pointer p-12 rounded-xl bg-gradient-to-r from-primary-100 to-purple-200 hover:scale-105 transition-all duration-500 ease-in-out shadow-2xl">
                <div class="absolute inset-0 bg-opacity-40 bg-white rounded-xl"></div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">¡Inicia la Interacción!</h3>
                    <p class="text-gray-600 mb-6">Nuestro chatbot te ayudará a identificar señales tempranas de depresión o ansiedad.</p>
                    <!-- Explicación de la escala -->
                    <p class="text-sm text-gray-700 mb-4">
                        <strong>Responde con:</strong> 1 (Nada), 2 (Pocos días), 3 (Más de la mitad de los días), 4 (Casi todos los días).
                    </p>
                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <button id="depression-btn" class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border-2 border-transparent hover:border-cyan-500 group">
                            <div class="flex items-center">
                                <div class="w-14 h-14 bg-cyan-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 text-cyan-600 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Depresión</h3>
                                    <p class="text-gray-600 text-sm">Test PHQ-8 validado</p>
                                </div>
                            </div>
                        </button>
                        
                        <button class="p-6 bg-white rounded-xl shadow-lg cursor-not-allowed opacity-70" disabled>
                            <div class="flex items-center">
                                <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <div class="text-left">
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Ansiedad</h3>
                                    <p class="text-gray-600 text-sm">Próximamente</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal del Chatbot -->
    <div id="chatbot-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
        <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-lg w-full relative overflow-hidden">
            <!-- Fondo decorativo -->
            <div class="absolute inset-0 bg-gradient-to-br from-purple-100 to-white opacity-20 blur-md"></div>
            <div class="relative z-10">
                <div class="flex justify-between items-center border-b pb-2 mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800">Chatbot de Detección de Depresión</h3>
                    <button id="close-modal" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
                </div>
                <!-- Área de conversación -->
                <div id="chatbox" class="mb-4 p-4 bg-gray-100 rounded-lg h-64 overflow-y-auto"></div>
                <!-- Área para ingresar respuesta -->
                <div id="phq-8-form">
                    <input type="text" id="user-response" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Escribe 1, 2, 3 o 4" />
                    <button id="send-btn" class="mt-4 w-full px-8 py-3 bg-cyan-600 text-white rounded-lg font-semibold text-lg hover:bg-cyan-500 transition duration-300">
                        Enviar respuesta
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de resultados (inicialmente oculta) -->
    <section id="result-container" class="py-16 bg-white text-center hidden">
        <div class="max-w-md mx-auto p-6 bg-gradient-to-r from-cyan-100 to-purple-100 rounded-2xl shadow-2xl">
            <h2 class="text-3xl font-extrabold text-cyan-500 mb-4">Resultado del Test</h2>
            <div id="result-text" class="text-xl font-semibold text-gray-800"></div>
        </div>
    </section>
    
    <!-- Incluir Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        // Función para auto-scroll en el chatbox
        function scrollChatBox() {
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        // Función para utilizar Typed.js y escribir un mensaje en un contenedor
        function typeMessage(targetSelector, message, callback) {
            const messageDiv = document.createElement('div');
            messageDiv.className = "text-gray-800 mt-2";
            document.querySelector(targetSelector).appendChild(messageDiv);
            new Typed(messageDiv, {
                strings: [message],
                typeSpeed: 15,
                showCursor: false,
                onComplete: function() {
                    if (callback) callback();
                }
            });
            scrollChatBox();
        }

        // Elementos del DOM
        const modal = document.getElementById('chatbot-modal');
        const closeModalBtn = document.getElementById('close-modal');
        const depressionBtn = document.getElementById('depression-btn');
        const sendBtn = document.getElementById('send-btn');
        const userResponse = document.getElementById('user-response');
        const chatbox = document.getElementById('chatbox');
        const resultContainer = document.getElementById('result-container');
        const resultText = document.getElementById('result-text');
        const interactionContainer = document.getElementById('interaction-container');
        
        // Preguntas del PHQ-8
        const questions = [
            "¿Poco interés o placer en hacer cosas?",
            "¿Sentimiento de estar deprimido/a o sin esperanza?",
            "¿Dificultad para conciliar el sueño o dormir demasiado?",
            "¿Cansancio o falta de energía?",
            "¿Pérdida de apetito o comer en exceso?",
            "¿Sentimiento de fracaso o que has decepcionado a ti mismo/a?",
            "¿Dificultad para concentrarse en cosas, como leer el periódico o ver televisión?",
            "¿Pensamientos de que estarías mejor muerto/a o de hacer daño a ti mismo/a?"
        ];

        let currentQuestion = 0;
        let userAnswers = [];

        // Ajuste de puntuación: convierte respuestas de 1-4 a 0-3
        function getAdjustedScore(answer) {
            return parseInt(answer) - 1;
        }

        // Determinar la categoría basada en el puntaje (0-24)
        function getDepressionCategory(score) {
            if (score <= 4) return "No tiene depresión";
            else if (score <= 9) return "Inicios de depresión";
            else if (score <= 14) return "Depresión alarmante";
            else return "Depresión severa";
        }

        // Función para iniciar el chat con un mensaje de saludo
        function startChat() {
            chatbox.innerHTML = "";
            currentQuestion = 0;
            userAnswers = [];
            typeMessage("#chatbox", "¡Hola! Soy tu asistente. Comenzaremos el test PHQ-8. Responde con 1, 2, 3 o 4 según lo siguiente:<br>1: Nada, 2: Pocos días, 3: Más de la mitad de los días, 4: Casi todos los días.", function() {
                setTimeout(showNextQuestion, 1000);
            });
        }

        // Al hacer clic en "Detección de Depresión"
        depressionBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            interactionContainer.classList.add('hidden');
            startChat();
        });

        // Cerrar el modal
        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
            interactionContainer.classList.remove('hidden');
        });

        // Función para mostrar la siguiente pregunta con Typed.js
        function showNextQuestion() {
            if (currentQuestion < questions.length) {
                typeMessage("#chatbox", questions[currentQuestion], function() {
                    currentQuestion++;
                });
            } else {
                typeMessage("#chatbox", "Gracias por completar el test. Se mostrarán los resultados.", function() {
                    setTimeout(() => {
                        modal.classList.add('hidden');
                        showResults();
                    }, 1500);
                });
            }
        }

        // Manejar el envío de respuestas
        sendBtn.addEventListener('click', () => {
            const answer = userResponse.value.trim();
            if (["1", "2", "3", "4"].includes(answer)) {
                userAnswers.push(getAdjustedScore(answer));
                typeMessage("#chatbox", `Tu respuesta: ${answer}`, function() {
                    showNextQuestion();
                });
                userResponse.value = "";
            } else {
                typeMessage("#chatbox", "Por favor, responde con 1, 2, 3 o 4.");
            }
        });

        // Mostrar los resultados en la sección de resultados
        function showResults() {
            let totalScore = userAnswers.reduce((acc, val) => acc + val, 0);
            const category = getDepressionCategory(totalScore);
            resultContainer.classList.remove('hidden');
            resultText.innerHTML = `Tu puntaje es <strong>${totalScore}</strong> (de 0 a 24) - <em>${category}</em>`;
        }
    </script>
@endsection
