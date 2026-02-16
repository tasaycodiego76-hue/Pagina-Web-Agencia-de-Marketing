<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Marketing - @yield('titulo')</title>
    
    <link rel="stylesheet" href="{{ asset('css/sandro/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sandro/layout.css') }}">
    @stack('styles')
</head>
<body>

    <header>
        <div class="navbar">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logooo.png') }}" alt="Logo">
            </a>
            <nav id="nav">
                <ul>
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="{{ url('/quienes-somos') }}"><i class="fas fa-users"></i> Quiénes Somos</a></li>
                    <li><a href="#"><i class="fas fa-briefcase"></i> Trabajos</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> Contáctanos</a></li>
                </ul>
            </nav>
            <div class="redes-sociales">
                <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </header>

    <main>
        @yield('contenido')
    </main>

    <a href="https://wa.me/51931826325" class="chat-button" target="_blank" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="60">
    </a>

    <footer style="padding: 20px; text-align: center; background: #111; color: white;">
        <p>&copy; 2026 Rodrigo Felix Fotografía. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>