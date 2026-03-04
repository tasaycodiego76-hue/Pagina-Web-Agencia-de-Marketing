<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Marketing - @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('images/home-diseno/home.css') }}">
    <link rel="stylesheet" href="{{ asset('images/home-diseno/preguntas.css') }}">
    <link rel="stylesheet" href="{{ asset('images/home-diseno/formulario.css') }}">
    <script src="{{ asset('js/home-carrusel/carrusel.js') }}"></script>
    <script src="{{ asset('js/preguntas.js') }}"></script>
    <script src="{{ asset('js/numeros.js') }}"></script>
    <script src="{{ asset('js/formulario.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Enlace a una fuente de Google Fonts para mejorar la tipografía -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css">
    <link rel="stylesheet" href="{{ asset('css/sandro/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">

    @stack('styles')
</head>

<body>

    <header>
        <div class="navbar">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logooo.png') }}" alt="Logo">
            </a>

            <div class="menu-icon" id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

            <nav id="nav">
                <ul>
                    <li><a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="{{ url('/quienes-somos') }}" class="nav-link"><i class="fas fa-users"></i> Quiénes
                            Somos</a></li>
                    <li><a href="{{ url('/trabajos') }}" class="nav-link"><i class="fas fa-briefcase"></i> Trabajos</a>
                    </li>

                    <li>
                        <div class="dropdown">
                            <a href="javascript:void(0)" id="servicios-menu" class="nav-link">
                                <i class="fas fa-concierge-bell"></i> Nuestros Servicios
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="dropdown-content">
                           <div class="dropdown-content">
                                <a href="/servicios?tipo=fiesta_infantil">Fiesta Infantil</a>
                                <a href="/servicios?tipo=pedida_mano">Pedida de Mano</a>
                                <a href="/servicios?tipo=baby_shower">Baby Shower</a>
                                <a href="/servicios?tipo=bautizo">Bautizo</a>
                                <a href="/servicios?tipo=bodas">Boda</a>
                                <a href="/servicios?tipo=infantil">Sesiones Infantiles</a>
                                <a href="/servicios?tipo=embarazo">Embarazo</a>
                                <a href="/servicios?tipo=parejas">Parejas</a>
                                <a href="/servicios?tipo=quinceanera">Quince Años</a>
                            </div>
                        </div>
                    </li>

                    <li><a href="{{ url('/referencias') }}" class="nav-link"><i class="fas fa-bookmark"></i>
                            Referencia</a></li>
                    <li><a href="{{ url('/contacto') }}" class="nav-link"><i class="fas fa-envelope"></i>
                            Contáctanos</a></li>
                </ul>
            </nav>
            <div class="redes-sociales">
                <a href="https://www.youtube.com" target="_blank" class="social-icon youtube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.facebook.com" target="_blank" class="social-icon facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com" target="_blank" class="social-icon tiktok">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://www.X.com" target="_blank" class="social-icon tiktok">
                    <i class="fab fa-x-twitter"></i>
                </a>
            </div>
        </div>
    </header>

    <main>
        @yield('contenido')
    </main>

    <!-- *****************************************************************
  WHATSAPP
  ******************************************************+-->
    <a href="https://wa.me/51931826325" class="chat-button" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Chat">
        <span>¿Cómo puedo ayudarte?</span>
    </a>
    <!-- *****************************************************************
 FINAL-  WHATSAPP
  ******************************************************+-->

<<<<<<< HEAD
    <footer class="main-footer" style="background: transparent; padding: 0; margin: 0; line-height: 0;">
        <a href="{{ url('/') }}" style="display: block; text-decoration: none; border: none;">
            <img src="{{ asset('images/footer.png') }}" alt="footer"
                style="width: 100%; max-width: 100%; height: auto; display: block; border: none; outline: none;">
        </a>
    </footer>
=======
>>>>>>> e085e48826d082d0043f04fec025344a4f7e270d

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>