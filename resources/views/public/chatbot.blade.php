@extends('layout')

@section('title', 'Inicio')

@section('content')
    <!-- Sección de cabecera -->
    <section class="text-center py-16 bg-gradient-to-r from-primary-200 to-purple-400">
        <h1 class="text-4xl font-extrabold text-white sm:text-5xl lg:text-6xl">Aquí comienza el Zenith</h1>
        <p class="text-lg mt-4 text-white max-w-3xl mx-auto">
            Explora nuestros chatbots especializados en ansiedad y depresión.
        </p>
    </section>

    <!-- Sección interactiva con el chatbot -->
    <section class="py-16 bg-white text-center" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-cyan-500 mb-8">Interacción con el Chatbot</h2>
            <p class="text-lg text-purple-900 sm:text-xl mb-12 max-w-3xl mx-auto">
                Inicia una conversación con nuestro chatbot para detectar señales de depresión o ansiedad. Haz clic en el botón para comenzar la evaluación.
            </p>

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
                    <div class="flex justify-center gap-6">
                        <button id="depression-btn" class="px-8 py-3 bg-cyan-600 text-white rounded-lg font-semibold text-lg hover:bg-cyan-500 transition duration-300">
                            Detección de Depresión
                        </button>
                        <button class="px-8 py-3 bg-gray-400 text-white rounded-lg font-semibold text-lg cursor-not-allowed opacity-60 hover:bg-gray-400 transition duration-300">
                            Detección de Ansiedad (Próximamente)
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
                <div id="chatbox" class="mb-4 p-4 bg-gray-100 rounded-lg h-64 overflow-y-auto">
                    <div class="text-gray-800">
                        ¡Hola! Soy tu asistente. Comenzaremos el test PHQ-8.<br>
                        Responde con 1, 2, 3 o 4 según lo siguiente:<br>
                        1: Nada, 2: Pocos días, 3: Más de la mitad de los días, 4: Casi todos los días.
                    </div>
                </div>
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
    
    <script>
        // Función para auto-scroll
        function scrollChatBox() {
            chatbox.scrollTop = chatbox.scrollHeight;
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

        // Ajuste de la puntuación: se resta 1 para tener valores de 0 a 3.
        function getAdjustedScore(answer) {
            return parseInt(answer) - 1;
        }

        // Categoría basada en puntaje (0-24)
        function getDepressionCategory(score) {
            if (score <= 4) return "No tiene depresión";
            else if (score <= 9) return "Inicios de depresión";
            else if (score <= 14) return "Depresión alarmante";
            else return "Depresión severa";
        }

        // Mostrar el modal y comenzar la interacción
        depressionBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            interactionContainer.classList.add('hidden');
            showNextQuestion();
        });

        // Cerrar el modal y mostrar los botones nuevamente
        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
            interactionContainer.classList.remove('hidden');
        });

        // Función para simular que la IA está escribiendo
        function showTypingIndicator(callback) {
            chatbox.innerHTML += `<div id="typing-indicator" class="text-gray-800 mt-2 italic">El asistente está escribiendo...</div>`;
            scrollChatBox();
            setTimeout(() => {
                const indicator = document.getElementById('typing-indicator');
                if (indicator) indicator.remove();
                callback();
            }, 1500);
        }

        // Mostrar la siguiente pregunta
        function showNextQuestion() {
            if (currentQuestion < questions.length) {
                showTypingIndicator(() => {
                    chatbox.innerHTML += `<div class="text-gray-800 mt-2">${questions[currentQuestion]}</div>`;
                    currentQuestion++;
                    scrollChatBox();
                });
            } else {
                showTypingIndicator(() => {
                    chatbox.innerHTML += `<div class="text-gray-800 mt-2">Gracias por completar el test. Se mostrarán los resultados.</div>`;
                    scrollChatBox();
                    setTimeout(() => {
                        modal.classList.add('hidden');
                        showResults();
                    }, 1500);
                });
            }
        }

        // Manejar el envío de respuestas del usuario
        sendBtn.addEventListener('click', () => {
            const answer = userResponse.value.trim();
            if (["1", "2", "3", "4"].includes(answer)) {
                userAnswers.push(getAdjustedScore(answer));
                chatbox.innerHTML += `<div class="text-gray-800">Tu respuesta: ${answer}</div>`;
                userResponse.value = '';
                scrollChatBox();
                showNextQuestion();
            } else {
                chatbox.innerHTML += `<div class="text-red-600">Por favor, responde con 1, 2, 3 o 4.</div>`;
                scrollChatBox();
            }
        });

        // Mostrar resultados
        function showResults() {
            let totalScore = userAnswers.reduce((acc, val) => acc + val, 0);
            const category = getDepressionCategory(totalScore);
            resultContainer.classList.remove('hidden');
            resultText.textContent = `Tu puntaje es ${totalScore} (de 0 a 24) - ${category}`;
        }
    </script>
@endsection
