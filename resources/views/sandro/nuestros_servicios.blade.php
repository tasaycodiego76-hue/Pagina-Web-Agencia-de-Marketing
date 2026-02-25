@extends('layout.app')

@section('titulo', 'Servicios')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sandro/nuestros_servicios.css') }}">
@endpush

@section('contenido')
    <div id="nuestros-servicios" class="service-main-section">
        <!-- SECCIÓN DE BODA -->
        <div id="bodas" class="service-section" style="display:none;">
            <h2 id="titulo-servicios" class="titulo-servicios">Servicios de Bodas</h2>

            <div class="service-container">
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/boda1.jpg" alt="Boda 1">
                    </div>
                    <div class="package-details">
                        <h3>Paquete Básico</h3>
                        <p>Incluye una sesión de fotos de 3 horas, 1 fotógrafo y 150 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">200 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Básico%20de%20Bodas"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>

                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/boda2.jpg" alt="Boda 2">
                    </div>
                    <div class="package-details">
                        <h3>Paquete Premium</h3>
                        <p>Sesión de 6 horas, 2 fotógrafos, video y 300 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">450 Soles</span> <span
                                class="discount">¡Oferta especial!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20me%20interesa%20el%20Paquete%20Premium%20de%20Bodas"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- SECCION DE PRE BODA -->
    <div id="preboda" class="service-section" style="display:none;">
        <h2 id="titulo-servicios" class="titulo-servicios">Servicios de Prebodas</h2>
        <div class="service-content">
            <!-- Paquetes de Prebodas -->
            <div class="service-package">
                <div class="package-image">
                    <img src="images/servicios/preboda1.jpg" alt="Preboda 1">
                </div>
                <div class="package-details">
                    <h3>Paquete Básico</h3>
                    <p>Incluye una sesión de fotos de pareja en exteriores, 1 fotógrafo y 100 fotos editadas.</p>
                    <p class="promo-price">Precio: <span class="original-price">150 Soles</span> <span class="discount">¡En
                            promoción!</span></p>
                    <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Básico%20de%20Prebodas"
                        class="cta-button" target="_blank">Me interesa</a>
                </div>
            </div>
            <!-- Más paquetes de Prebodas -->
        </div>
    </div>
    <!-- SECCION DE VIDEO -->
    <div id="video" class="service-section" style="display:none;">
        <h2 id="titulo-servicios" class="titulo-servicios">Servicios de Video</h2>
        <div class="service-content">
            <div class="service-package">
                <div class="package-image">
                    <img src="images/servicios/video1.jpeg" alt="Video 1">
                </div>
                <div class="package-details">
                    <h3>Paquete Básico</h3>
                    <p>Incluye un video de 3 minutos, 1 videógrafo y edición básica.</p>
                    <p class="promo-price">Precio: <span class="original-price">250 Soles</span> <span class="discount">¡En
                            promoción!</span></p>
                    <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Básico%20de%20Video"
                        class="cta-button" target="_blank">Me interesa</a>
                </div>
            </div>
            <!-- Más paquetes de Video -->
        </div>
    </div>
    <!-- SECCION SMASH -->
    <div id="smash" class="service-section" style="display: none;">
        <h2 id="titulo-servicios" class="titulo-servicios">Servicios Smash</h3>
            <div class="service-content">
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/smash1.jpg" alt="Smash 1">
                    </div>
                    <div class="package-details">
                        <h3>Paquete Básico</h3>
                        <p>Incluye una sesión de fotos de 1 hora, 1 fotógrafo y 50 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">100 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Básico%20de%20Smash"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/smash2.jpg" alt="Smash 2">
                    </div>
                    <div class="package-details">
                        <h3>Paquete Estándar</h3>
                        <p>Incluye una sesión de fotos de 2 horas, 1 fotógrafo y 100 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">150 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Estándar%20de%20Smash"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
            </div>
    </div>

    <!-- SECCION BAUTIZO -->
    <div id="bautizo" class="service-section" style="display: none;">
        <h2 id="titulo-servicios" class="titulo-servicios">Servicios de Bautizo</h2>
        <div class="service-content">
            <div class="service-package">
                <div class="package-image">
                    <img src="images/servicios/bautizo1.jpg" alt="Bautizo 1">
                </div>
                <div class="package-details">
                    <h3>Paquete Básico</h3>
                    <p>Incluye una sesión de fotos de 2 horas, 1 fotógrafo y 100 fotos editadas.</p>
                    <p class="promo-price">Precio: <span class="original-price">180 Soles</span> <span class="discount">¡En
                            promoción!</span></p>
                    <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Básico%20de%20Bautizo"
                        class="cta-button" target="_blank">Me interesa</a>
                </div>
            </div>
            <div class="service-package">
                <div class="package-image">
                    <img src="images/servicios/bautizo2.jpg" alt="Bautizo 2">
                </div>
                <div class="package-details">
                    <h3>Paquete Estándar</h3>
                    <p>Incluye una sesión de fotos de 4 horas, 1 fotógrafo y 200 fotos editadas.</p>
                    <p class="promo-price">Precio: <span class="original-price">300 Soles</span> <span class="discount">¡En
                            promoción!</span></p>
                    <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Estándar%20de%20Bautizo"
                        class="cta-button" target="_blank">Me interesa</a>
                </div>
            </div>
        </div>
    </div>

    <!-- SECCION EMBARAZO -->
    <div id="embarazo" class="service-section" style="display: none;">
        <!-- PORTADA -->
<section style="
    width: 100%;
    margin-top: -40px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #000;
    padding: 20px 20px 0 20px;
">
    <div style="
        position: relative;
        width: clamp(320px, 75vw, 1100px);
        min-width: 320px;
    ">
        <img src='images/servicios/PORTADA_WEB_SESIONES_DE_EMBARAZO.png'
             alt='Portada Embarazo'
             style="
                width: 100%;
                height: auto;
                display: block;
                border-radius: 8px;
             ">

        <!-- Degradado izquierda -->
        <div style="
            position: absolute;
            top: 0; left: 0;
            width: 80px; height: 100%;
            background: linear-gradient(to right, #000, transparent);
            border-radius: 8px 0 0 8px;
        "></div>

        <!-- Degradado derecha -->
        <div style="
            position: absolute;
            top: 0; right: 0;
            width: 80px; height: 100%;
            background: linear-gradient(to left, #000, transparent);
            border-radius: 0 8px 8px 0;
        "></div>
    </div>
</section>

 <!-- SOBRE NOSOTROS -->
    <section class="sobre-nosotros">
        <div class="col-imagen">
            <img src="images/servicios/EMBARAZO.png" alt="Sobre Nosotros">
        </div>
        <div class="col-texto">
            <h2>Sobre Nosotros</h2>
            <p>
                Nos encanta capturar los <strong>momentos</strong> más <strong>especiales</strong> de tu
                vida, creando recuerdos que duren para siempre. Con un
                enfoque <strong>profesional</strong> y una mirada <strong>creativa</strong>, buscamos
                reflejar tu estilo y la esencia de cada celebración de una
                manera única.
            </p>
            <p>
                Queremos que tu sesión sea una <strong>experiencia divertida</strong> y
                <strong class="subrayado">auténtica</strong>, donde te sientas cómodo y disfrutes el momento
                mientras inmortalizamos recuerdos que realmente cuenten
                tu historia.
            </p>
        </div>


    </section>
<!-- BLOQUE 1: Imagen grande con recuadro superpuesto -->
<div class="bloque-hero">
    <img class="img-hero" src="images/servicios/EMBARAZOS1.jpg" alt="Embarazo">
    <div class="recuadro-texto">
        <p class="subtitulo">Sesiones de</p>
        <h2>Embarazo</h2>
        <p>
            Celebra la <strong>llegada de tu bebé</strong> con una sesión fotográfica que capture la magia de
            este <strong>momento único</strong>. Ofrecemos sesiones personalizadas, desde fotos al aire libre
            rodeado de naturaleza hasta estudios con iluminación especial, resaltando cada
            detalle de tu belleza y emoción en esta etapa tan especial.
        </p>
    </div>
</div>

<div class="grid-galeria">
    <div class="celda">
        <img src="images/servicios/EMBARAZOS5.png" alt="Embarazo 1">
    </div>
    <div class="celda">
        <img src="images/servicios/EMBARAZOS4.jpg" alt="Embarazo 2">
    </div>
    <div class="celda">
        <img src="images/servicios/EMBARAZOS2.jpg" alt="Embarazo 3">
    </div>
</div>

 <!-- PAQUETES -->
<section class="paquetes-section">

    <div class="paquetes-titulo">
        <p>Paquete Embarazo</p>
        <h2>en Exteriores</h2>
        <div class="linea"></div>
    </div>

    <div class="paquetes-grid">

        <!-- BÁSICO -->
        <div class="card">
            <h3>Básico-Digital</h3>
            <ul>
                <li>01 Fotógrafo</li>
                <li>01 Asistente de fotografía</li>
                <li>45min de sesión</li>
                <li>01 Cambio de ropa</li>
                <li>20 Fotos en digital (previa edición)</li>
                <li>Material en digital</li>
            </ul>
            <div class="precio"><span>S/.</span> 200.00</div>
            <a class="btn-wsp" href="https://wa.me/51XXXXXXXXX?text=Hola%20Rodrigo!%20Me%20interesa%20el%20Paquete%20B%C3%A1sico-Digital%20de%20Embarazo%20S%2F.200.00" target="_blank">
                📲 Quiero este paquete
            </a>
        </div>

        <!-- ESTÁNDAR -->
        <div class="card destacado">
            <h3>Estándar</h3>
            <span class="badge">⭐ Mi primer bebe</span>
            <ul>
                <li>01 Fotógrafo</li>
                <li>01 Asistente de fotografía</li>
                <li>01 Hora de sesión</li>
                <li>01 Cambio de ropa</li>
                <li>30 Fotos en digital (previa edición)</li>
                <li>05 Fotos impresas (10 X 15 cm)</li>
                <li>01 Cuadro + Foto (20X15 cm)</li>
                <li>Material en digital + impresiones</li>
            </ul>
            <div class="precio"><span>S/.</span> 250.00</div>
            <a class="btn-wsp" href="https://wa.me/51XXXXXXXXX?text=Hola%20Rodrigo!%20Me%20interesa%20el%20Paquete%20Est%C3%A1ndar%20de%20Embarazo%20S%2F.250.00" target="_blank">
                📲 Quiero este paquete
            </a>
        </div>

        <!-- FULL -->
        <div class="card">
            <h3>Full</h3>
            <ul>
                <li>01 Fotógrafo</li>
                <li>01 Asistente de fotografía</li>
                <li>01 Hora 30 min de sesión</li>
                <li>02 Cambios de ropa</li>
                <li>40 Fotos en digital (previa edición)</li>
                <li>10 Fotos impresas (10 X 15 cm)</li>
                <li>01 Cuadro + Foto (20X30 cm)</li>
                <li>01 Video resumen (1-3 min aprox.)</li>
                <li>Material en digital + impresiones</li>
            </ul>
            <div class="precio"><span>S/.</span> 350.00</div>
            <a class="btn-wsp" href="https://wa.me/51XXXXXXXXX?text=Hola%20Rodrigo!%20Me%20interesa%20el%20Paquete%20Full%20de%20Embarazo%20S%2F.350.00" target="_blank">
                📲 Quiero este paquete
            </a>
        </div>

    </div>
</section>

        <h2 id="titulo-servicios" class="titulo-servicios">Servicios de Embarazo</h3>
            <div class="service-content">
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/embarazo1.jpg" alt="Embarazo 1">
                    </div>
                    <div class="package-details">
                        <h3>Paquete Básico</h3>
                        <p>Incluye una sesión de fotos de 1 hora, 1 fotógrafo y 50 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">120 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Básico%20de%20Embarazo"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/embarazo2.jpg" alt="Embarazo 2">
                    </div>
                    <div class="package-details">
                        <h3>Paquete Estándar</h3>
                        <p>Incluye una sesión de fotos de 2 horas, 1 fotógrafo y 100 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">200 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Estándar%20de%20Embarazo"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
            </div>
    </div>

    <!-- SECCION QUINCEAÑERA -->
    <div id="quinceanera" class="service-section" style="display: none;">
        <h2 id="titulo-servicios" class="titulo-servicios">Servicios de Quinceañera</h3>
            <div class="service-content">
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/quince1.jpg" alt="Quinceañera 1">
                    </div>
                    <div class="package-details">
                        <h3>Paquete Básico</h3>
                        <p>Incluye una sesión de fotos de 3 horas, 1 fotógrafo y 150 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">250 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Básico%20de%20Quinceañera"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/quince2.jpg" alt="Quinceañera 2">
                    </div>
                    <div class="package-details">
                        <h3>Paquete Estándar</h3>
                        <p>Incluye una sesión de fotos de 5 horas, 1 fotógrafo y 250 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">400 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20el%20Paquete%20Estándar%20de%20Quinceañera"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
            </div>
    </div>
    <!-- SECCION PERSONAL -->

    <div id="personal" class="service-section" style="display: none;">
        <h2 id="titulo-servicios" class="titulo-servicios">Servicios Personales</h3>
            <div class="service-content">
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/personal1.jpg" alt="Personal 1">
                    </div>
                    <div class="package-details">
                        <h3>Sesión Personal</h3>
                        <p>Incluye una sesión de fotos en estudio o exteriores, 1 fotógrafo y 50 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">100 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20la%20Sesión%20Personal"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
                <div class="service-package">
                    <div class="package-image">
                        <img src="images/servicios/personal2.jpg" alt="Personal 2">
                    </div>
                    <div class="package-details">
                        <h3>Sesión Familiar</h3>
                        <p>Incluye una sesión de fotos en estudio o exteriores, 1 fotógrafo y 100 fotos editadas.</p>
                        <p class="promo-price">Precio: <span class="original-price">200 Soles</span> <span
                                class="discount">¡En promoción!</span></p>
                        <a href="https://wa.me/51987654321?text=Hola,%20estoy%20interesado%20en%20la%20Sesión%20Familiar"
                            class="cta-button" target="_blank">Me interesa</a>
                    </div>
                </div>
            </div>
    </div>
<footer style="margin:0; padding:0;">

    <img src="images/servicios/FOOTER.png"
         alt="Contacto Empresa"
         style="width:100vw; height:auto; display:block;">

</footer>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            // Si no hay 'tipo' en la URL, por defecto usamos 'bodas'
            const servicioSeleccionado = urlParams.get('tipo') || 'bodas';

            mostrarServicio(servicioSeleccionado);
        });

        function mostrarServicio(idSeccion) {
            // 1. Ocultar todas las secciones
            const secciones = document.querySelectorAll('.service-section');
            secciones.forEach(sec => {
                sec.style.display = 'none';
            });

            // 2. Mostrar la sección seleccionada
            const seccionAMostrar = document.getElementById(idSeccion);
            if (seccionAMostrar) {
                seccionAMostrar.style.display = 'block';

                // 3. ¡ESTO ES LO MÁS IMPORTANTE!
                // Fuerza a la ventana a subir al inicio del contenedor
                window.scrollTo({
                    top: 0,
                    behavior: 'instant' // Sube de golpe para que no se note el salto
                });
            }
        }
    </script>
@endsection