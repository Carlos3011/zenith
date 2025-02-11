import './bootstrap';
import Aos from 'aos';
import 'aos/dist/aos.css'
import Typed from 'typed.js';

// Inicialización de AOS
Aos.init({
    duration: 1000,  // Duración de la animación (en ms)
    delay: 200,  // Retraso antes de la animación
    once: false,  // Ejecutar solo una vez o en cada scroll
});


// Inicializar Typed.js para cualquier elemento con id 'typed'
document.addEventListener("DOMContentLoaded", () => {
    new Typed('#typed', {
        strings: ["Depresion", "Ansiedad"],
        typeSpeed: 150,
        backSpeed: 50,
        loop: true
    });
});

document.addEventListener("DOMContentLoaded", () =>{
    new Typed("#typed-mision", {
        strings: ["Innovación en Salud Mental", "Tecnología con Propósito", "Cuidado Preventivo"],
        typeSpeed: 150,
        backSpeed: 30,
        loop: true,
    });
})

document.addEventListener("DOMContentLoaded", () =>{
    new Typed("#typed-academic", {
        strings: ["Sistemas Inteligentes y Ciberseguridad", "SiyCiSe"],
        typeSpeed: 50,
        backSpeed: 30,
        loop: true,
        showCursor: true,
    });
})


document.addEventListener("DOMContentLoaded", () => {
    // Configuración del canvas de partículas
    const canvas = document.getElementById("particlesCanvas");
    const ctx = canvas.getContext("2d");
    let particles = [];
    const colors = ["#FF5733", "#FFC300", "#DAF7A6", "#FF33F6", "#33FFCE", "#3383FF"];

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = 600;
        particles = [];
        for (let i = 0; i < 100; i++) {
            particles.push(createParticle());
        }
    }

    function createParticle() {
        return {
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            size: Math.random() * 8 + 2,
            speedX: (Math.random() - 0.5) * 4,
            speedY: (Math.random() - 0.5) * 4,
            color: colors[Math.floor(Math.random() * colors.length)],
            opacity: Math.random() * 0.7 + 0.3
        };
    }

    function animateParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => {
            p.x += p.speedX;
            p.y += p.speedY;
            if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
            if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(${hexToRgb(p.color)}, ${p.opacity})`;
            ctx.fill();
        });
        requestAnimationFrame(animateParticles);
    }

    function hexToRgb(hex) {
        let bigint = parseInt(hex.slice(1), 16);
        let r = (bigint >> 16) & 255;
        let g = (bigint >> 8) & 255;
        let b = bigint & 255;
        return `${r}, ${g}, ${b}`;
    }

    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();
    animateParticles();

})

document.addEventListener("DOMContentLoaded", () => {
    
})

document.addEventListener("DOMContentLoaded", () => {
    // Toggle del Menú Móvil
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    mobileMenuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        // Alterna el ícono entre 'fa-bars' y 'fa-xmark'
        if (menuIcon.classList.contains('fa-bars')) {
            menuIcon.classList.remove('fa-bars');
            menuIcon.classList.add('fa-xmark');
        } else {
            menuIcon.classList.remove('fa-xmark');
            menuIcon.classList.add('fa-bars');
        }
    });

})
 

