<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="{{ asset('images/home-diseno/home.css') }}">
     <link rel="stylesheet" href="{{ asset('images/home-diseno/preguntas.css') }}">
     <link rel="stylesheet" href="{{ asset('images/home-diseno/formulario.css') }}">
     <script src="{{ asset('js/home-carrusel/carrusel.js') }}"></script>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Enlace a una fuente de Google Fonts para mejorar la tipografía -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Flickity CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css">

<!-- Flickity JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js"></script>
</head>
<body>

    <!--*****************************************************************
     MENU 
     *****************************************************************-->
     <header>
        <div class="navbar">
        <a href="{{ url('/') }}" class="logo">
    <img src="{{ asset('images/home-imagenes/logooo.png') }}" alt="Logo">
</a>

    
            <div class="menu-icon" id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
    
<nav id="nav">
    <ul>
        <li><a href="#" data-seccion="home" class="nav-link"><i class="fas fa-home"></i> Inicio</a></li>
        <li><a href="#" data-seccion="quienes" class="nav-link"><i class="fas fa-users"></i> Quiénes Somos</a></li>
        <li><a href="#" data-seccion="trabajos" class="nav-link"><i class="fas fa-briefcase"></i> Trabajos</a></li>

        <li>
            <div class="dropdown">
                <a href="#" id="servicios-menu" class="nav-link">
                    <i class="fas fa-concierge-bell"></i> Nuestros Servicios <i class="fas fa-chevron-down"></i>
                </a>
                <div class="dropdown-content" id="dropdownServicios">
                    <a href="#" data-subseccion="bodas"><i class="fas fa-ring"></i> Bodas</a>
                    <a href="#" data-subseccion="video"><i class="fas fa-video"></i> Video</a>
                    <a href="#" data-subseccion="preboda"><i class="fas fa-heart"></i> Pre Boda</a>
                    <a href="#" data-subseccion="smash"><i class="fas fa-camera"></i> Smash</a>
                    <a href="#" data-subseccion="bautizo"><i class="fas fa-cross"></i> Bautizo</a>
                    <a href="#" data-subseccion="embarazo"><i class="fas fa-baby"></i> Embarazo</a>
                    <a href="#" data-subseccion="quinceanera"><i class="fas fa-crown"></i> Quinceañera</a>
                    <a href="#" data-subseccion="personal"><i class="fas fa-user"></i> Personal</a>
                </div>
            </div>
        </li>

        <li><a href="#" data-seccion="referencia" class="nav-link"><i class="fas fa-bookmark"></i> Referencia</a></li>
        <li><a href="#" data-seccion="contacto" class="nav-link"><i class="fas fa-envelope"></i> Contáctanos</a></li>
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
            </div>
        </div>
    </header>
<!-- *****************************************************************
 FIN -MENU
 ***************************************************************** -->

   

 <!-- ESTO ES LA PARTE SOLO HOME -(INICIO )-->
    <!-- Home Section -->
    <section id="home" class="home">
    <div class="home-slider">
    <div class="slide" style="background-image: url('{{ asset('images/home-imagenes/work4.jpg') }}');"></div>
    <div class="slide" style="background-image: url('{{ asset('images/home-imagenes/boda2.jpg') }}');"></div>
    <div class="slide" style="background-image: url('{{ asset('images/home-imagenes/DSC06473.jpg') }}');"></div>
    <div class="slide" style="background-image: url('{{ asset('images/home-imagenes/DSC09848.jpg') }}');"></div>
    <div class="slide" style="background-image: url('{{ asset('images/home-imagenes/preboda1.jpg') }}');"></div>
</div>



    <div class="home-content">
        <h1>Bienvenido a <span>Rodrigo Felix</span> Fotógrafo</h1>
        <div id="typewriter" class="typewriter-text"></div>
        <p>Te ofrecemos el mejor servicio de fotografía para tus momentos más especiales</p>
    </div>

    <!-- Sección "¿Por qué elegirnos?" dentro de #home pero separada -->
    <div class="why-choose-us">
        <h2 class="why-choose-us-title">¿Por qué elegirnos?</h2>
        <div class="why-choose-us-content">
            <div class="why-choose-us-item">
                <img src="images/home-imagenes/icon1.png" alt="Icono 1">
                <h3>Compromiso con la Creatividad</h3>
                <p>Nuestras estrategias de marketing no solo se adaptan a las tendencias del mercado, sino que también ofrecen un enfoque creativo e innovador. ¡Con nosotros, tu marca no solo será vista, sino recordada!</p>
            </div>
            <div class="why-choose-us-item">
                <img src="images/home-imagenes/icon2.png" alt="Icono 2">
                <h3>Experiencia Comprobada</h3>
                <p>Contamos con un equipo de expertos con más de una década de experiencia en el sector, dedicados a brindar resultados sobresalientes y a construir relaciones duraderas con nuestros clientes.</p>
            </div>
        </div>
        <div class="stats">
            <div class="stat">
                <span id="years-experience">0</span>
                <p>Años de experiencia</p>
            </div>
            <div class="stat">
                <span id="students-benefited">0</span>
                <p>Personas beneficiados</p>
            </div>
            <div class="stat">
                <span id="teachers-trained">0</span>
                <p>Personal capacitados</p>
            </div>
        </div>
    </div>




    <!-- **********************************************************************
     INICIO - CARRUSEL DE IMAGENES 
     **********************************************************************-->


     <div class="image-carousel" id="carousel">
    <div class="image-track" id="track">
        <div class="image-slide"><img src="{{ asset('images/home-imagenes/boda1.jpg') }}" alt="Slide 1"></div>
        <div class="image-slide"><img src="{{ asset('images/home-imagenes/work1.jpg') }}" alt="Slide 2"></div>
        <div class="image-slide"><img src="{{ asset('images/home-imagenes/work5.jpg') }}" alt="Slide 3"></div>
        <div class="image-slide"><img src="{{ asset('images/home-imagenes/work2.jpg') }}" alt="Slide 4"></div>

        <!-- Duplicadas para bucle continuo -->
        <div class="image-slide"><img src="{{ asset('images/home-imagenes/boda1.jpg') }}" alt="Slide 1"></div>
        <div class="image-slide"><img src="{{ asset('images/home-imagenes/work1.jpg') }}" alt="Slide 2"></div>
        <div class="image-slide"><img src="{{ asset('images/home-imagenes/work5.jpg') }}" alt="Slide 3"></div>
        <div class="image-slide"><img src="{{ asset('images/home-imagenes/work2.jpg') }}" alt="Slide 4"></div>
    </div>
</div>

    <!-- **********************************************************************
     FIN - CARRUSEL DE IMAGENES 
     **********************************************************************-->










<!-- SECCIÓN FAQ Mejorada -->
<div class="faq-wrapper">
  <div class="faq-professional">
    <div class="faq-header">
      <div class="faq-icon">?</div>
      <h2>Preguntas Frecuentes</h2>
    </div>

    <div class="faq-questions">
      <div class="faq-item">
        <button class="faq-question">
          <span>¿Cuánto dura una sesión?</span>
          <div class="faq-indicator"></div>
        </button>
        <div class="faq-answer">
          <p>Depende del tipo de sesión, pero en promedio duran entre 1 a 2 horas para obtener los mejores resultados sin prisa.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>¿Entregan fotos editadas?</span>
          <div class="faq-indicator"></div>
        </button>
        <div class="faq-answer">
          <p>Sí, todas las fotos entregadas pasan por un proceso de selección y edición profesional para asegurar la mejor calidad.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>¿Cuánto antes debo reservar?</span>
          <div class="faq-indicator"></div>
        </button>
        <div class="faq-answer">
          <p>Recomendamos reservar con al menos 2 semanas de anticipación, especialmente para fines de semana o eventos especiales.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>¿Qué incluye el servicio?</span>
          <div class="faq-indicator"></div>
        </button>
        <div class="faq-answer">
          <p>Incluye asesoría, sesión fotográfica, edición profesional y entrega digital. También ofrecemos opciones impresas.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>¿Cómo puedo ayudarte?</span>
          <div class="faq-indicator"></div>
        </button>
        <div class="faq-answer">
          <p>Estamos disponibles para responder cualquier pregunta adicional que tengas. Contáctanos a través de nuestro formulario o redes sociales.</p>
        </div>
      </div>
    </div>
  </div>
</div>





    <!-- Contacto Fotográfico - Estilo Alto Contraste (Versión Mejorada) -->
    <div class="high-contrast-contact">
    <div class="hc-header">
        <h2>¡CONTÁCTANOS!</h2>
        <p class="hc-subtitle">Desbloquea el potencial de tu marca</p>
    </div>

    <div class="hc-container">
        <div class="hc-form-wrap">
        <form id="hc-form" class="hc-form" method="POST" action="{{ route('contacto.submit') }}">
    @csrf
    <h3>PLANIFICA TU SESIÓN</h3>
    <p class="hc-instruction">Completa los detalles y nos pondremos en contacto en menos de 24h</p>

    <div class="hc-form-group">
        <input type="text" id="hc-name" name="name" placeholder="Nombre completo *" required>
        <div class="hc-input-underline"></div>
    </div>

    <div class="hc-form-group">
        <input type="email" id="hc-email" name="email" placeholder="Correo electrónico *" required>
        <div class="hc-input-underline"></div>
    </div>

    <div class="hc-form-group" style="margin-bottom: 38px;">
    <input type="text" id="hc-phone" name="phone" placeholder="Número telefónico *"
           maxlength="9" required
           oninput="validatePhone(this)" oninvalid="customPhoneMessage(this)">
    <div class="hc-input-underline"></div>
    <span id="phone-counter" style="font-size: 12px; color: #666;">0 de 9 caracteres</span>
</div>


    <div class="hc-form-group">
        <textarea id="hc-message" name="message" rows="5" placeholder="Describe tu proyecto: tipo de sesión, fecha estimada y locación..." required></textarea>
        <div class="hc-textarea-underline"></div>
    </div>

    <button type="submit" id="hc-submit-btn" class="hc-btn">
        <span id="hc-submit-text">Solicitar cotización</span>
        <span id="hc-submit-loader" style="display:none; margin-left: 8px;" class="loader"></span>
    </button>

    <div id="form-status" class="fade-status"></div>
</form>


<!-- Elemento para pasar mensajes (antes del script) -->
<div id="modal-data"
     data-success="{{ htmlspecialchars(session('success'), ENT_QUOTES) }}"
     data-error="{{ htmlspecialchars(session('error'), ENT_QUOTES) }}">
</div>
        </div>

        <div class="hc-info-wrap">
            <div class="hc-info">
                <div class="hc-info-header">
                    <h3>CONTACTO DIRECTO</h3>
                    <div class="hc-info-underline"></div>
                </div>
                <ul>
                    <li>
                        <span class="hc-icon email"></span>
                        <div class="hc-contact-text">
                            <span class="hc-contact-label">Email:</span>
                            rodrigofelix.fotografo@gmail.com
                        </div>
                    </li>
                    <li>
                        <span class="hc-icon phone"></span>
                        <div class="hc-contact-text">
                            <span class="hc-contact-label">Teléfono:</span>
                            +(51) 931 826 325
                        </div>
                    </li>
                    <li>
                        <span class="hc-icon location"></span>
                        <div class="hc-contact-text">
                            <span class="hc-contact-label">Estudio:</span>
                            Chincha Alta, Ica - Perú
                        </div>
                    </li>
                </ul>
                <div class="hc-schedule">
                    <div class="hc-schedule-header">HORARIO DE ATENCIÓN</div>
                    <div class="hc-schedule-day">Lunes <span>09:00 AM - 06:00 PM</span></div>
                    <div class="hc-schedule-day">Martes <span>09:00 AM - 06:00 PM</span></div>
                    <div class="hc-schedule-day">Miércoles <span>09:00 AM - 06:00 PM</span></div>
                    <div class="hc-schedule-day">Jueves <span>09:00 AM - 06:00 PM</span></div>
                    <div class="hc-schedule-day">Viernes <span>09:00 AM - 06:00 PM</span></div>
                    <div class="hc-schedule-day">Sábado <span>09:00 AM - 01:30 PM</span></div>
                    <div class="hc-schedule-day closed">Domingo <span>Cerrado</span></div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>




</body>
</html>