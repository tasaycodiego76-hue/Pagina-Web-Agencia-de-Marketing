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
                    <img src="images/servicios/video1.jpg" alt="Video 1">
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