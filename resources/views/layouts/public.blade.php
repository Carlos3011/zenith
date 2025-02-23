<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Zenith IA')</title>

  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <style>
    .blob {
      background: linear-gradient(45deg, #38bdf8 0%, #a855f7 100%);
      filter: blur(60px);
    }
  </style>
</head>
<body class="bg-gradient-to-r from-primary-200 to-purple-200 min-h-screen">
  <!-- Header -->
  <header class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-primary-100 shadow-sm">
    <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <!-- Logo -->
      <a href="{{ route('inicio') }}" class="flex items-center gap-2">
        <span class="text-2xl font-bold bg-gradient-to-r from-accent-600 to-primary-600 bg-clip-text text-transparent">
          Zenith IA
        </span>
      </a>
      <!-- Menú Desktop -->
      <ul class="hidden md:flex items-center gap-8">
        @foreach([
            'inicio' => ['Inicio', 'fas fa-home'],
            'acerca' => ['Acerca de', 'fas fa-info-circle'],
            'miembros' => ['Equipo', 'fas fa-users'],
            'chatbots' => ['Chatbots', 'fas fa-comments'],
            'login' => ['Ingresar', 'fas fa-user'],
            'register' => ['Registrarse', 'fas fa-user-plus']
            ] as $route => [$label, $icon])
            <li>
                <a href="{{ route($route) }}" class="text-gray-600 hover:text-primary-600 transition-all font-medium">
                    <i class="{{ $icon }}"></i> 
                    <span>{{ $label}}</span>   
                </a>
            </li>
        @endforeach
      </ul>
      <!-- Botón Menú Móvil -->
      <button id="mobile-menu-toggle" class="md:hidden text-gray-600 focus:outline-none">
        <i id="menu-icon" class="fa-solid fa-bars text-2xl"></i>
      </button>
    </nav>
    <!-- Menú Móvil -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/90 backdrop-blur-md border-t border-primary-100">
      <ul class="flex flex-col space-y-2 px-6 py-4">
        @foreach ([
          'inicio' => ['Inicio'],
          'acerca' => ['Acerca de'],
          'miembros' => ['Equipo'],
          'chatbots' => ['Chatbots'],
          'login' => ['Ingresar'],
          'register' => ['Registrarse']
          ] as $route => [$label])
          <li>
            <a href="{{ route($route) }}" class="block w-full text-center text-gray-600 hover:text-primary-600 transition-all font-medium">{{ $label }}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </header>

  <!-- Contenido Principal -->
  <main class="pt-24 pb-12">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-purple-700 to-indigo-700 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-12">
      <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="text-center md:text-left mb-6 md:mb-0">
          <p class="text-lg font-semibold text-primary-100">Estamos aquí para ayudarte</p>
          <p class="text-sm text-primary-200">&copy; {{ date('Y') }} Zenith IA - Innovación y Soporte 24/7</p>
        </div>
        <div class="flex space-x-6 justify-center md:justify-end">
          <a href="#" class="p-3 bg-white rounded-full text-primary-600 hover:bg-primary-100 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="p-3 bg-white rounded-full text-primary-600 hover:bg-primary-100 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="p-3 bg-white rounded-full text-primary-600 hover:bg-primary-100 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="p-3 bg-white rounded-full text-primary-600 hover:bg-primary-100 transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>


  @vite('resources/js/app.js')


</body>
</html>
