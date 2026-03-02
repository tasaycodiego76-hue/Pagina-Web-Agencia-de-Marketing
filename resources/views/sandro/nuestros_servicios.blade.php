@extends('layout.app')

@section('titulo', 'Servicios')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sandro/nuestros_servicios.css') }}">
@endpush

@section('contenido')
    <!-- Seccion Fiesta Infantil -->
    <div id="fiesta_infantil" class="service-section" style="display:none;">
        <div class="service-intro" style="text-align:center; margin-bottom: 40px;">
            <!-- Portada -->
            <section class="portada-section">
                <div class="portada-wrapper">
                    <img src="images/servicios/Fiesta Infantil/Portada.png" alt="Portada Fiesta Infantil"
                        class="portada-img">
                </div>
            </section>
            <div
                style="max-width: 800px; margin: 20px auto; line-height: 1.6; color: #444; background: #fff; padding: 25px; border-radius: 20px; border-left: 5px solid #edd132; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: left;">
                <h4 style="color: #edd132; margin-bottom: 10px; font-size: 1.4rem;">Sobre Nosotros</h4>
                <p>Nos encanta capturar los <b>momentos</b> más <b>especiales</b> de tu
                    vida, creando recuerdos que duren para siempre. Con un
                    enfoque <b>profesional</b> y una mirada <b>creativa</b>, buscamos
                    reflejar tu estilo y la esencia de cada celebración de una
                    manera única.<br>
                    Queremos que tu sesión sea una <b>experiencia divertida</b> y
                    <b>auténtica</b>, donde te sientas cómodo y disfrutes el momento
                    mientras inmortalizamos recuerdos que realmente cuenten
                    tu historia.
                </p>
            </div>
            <div
                style="max-width: 900px; margin: 0 auto; background-color: #ffffff; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">

                <!-- FILA 1: Imagen decoración principal + caja de texto -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: stretch;">

                    <div style="flex: 1.5;">
                        <img src="images/servicios/Fiesta Infantil/infantil1.jpg" alt="Decoración Principal"
                            style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                    </div>

                    <div
                        style="flex: 1; background: #000; color: #fff; padding: 30px 20px; text-align: center; border-radius: 5px; display: flex; flex-direction: column; justify-content: center;">
                        <h2
                            style="margin: 0; font-size: 1.9rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; line-height: 1.1;">
                            Paquetes<br>
                            <span style="color: #f0c040;">Infantiles</span>
                        </h2>
                        <div style="width: 50px; height: 2px; background: #f0c040; margin: 18px auto;"></div>
                        <p style="font-size: 0.88rem; line-height: 1.7; text-align: left; margin: 0; color: #e0e0e0;">
                            ¡Haz de la <b style="color:#fff;">fiesta de tu pequeño</b> un recuerdo inolvidable!
                            Capturamos cada sonrisa, risa y <b style="color:#fff;">momento especial</b> con fotos
                            y videos de alta calidad. Con nuestro equipo profesional, nos aseguramos de inmortalizar
                            la magia de su día, para que puedas revivirlo una y otra vez.
                        </p>
                    </div>

                </div>

                <!-- FILA 2: Pastel Carolina + Pastel Dara con globos -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: stretch;">

                    <div style="flex: 1;">
                        <img src="images/servicios/Fiesta Infantil/infantil2.jpg" alt="Pastel Carolina"
                            style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                    </div>

                    <div style="flex: 1.2;">
                        <img src="images/servicios/Fiesta Infantil/infantil3.jpg" alt="Pastel Dara"
                            style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                    </div>

                </div>

                <!-- FILA 3: Dos imágenes pequeñas a la izquierda + una grande a la derecha -->
                <div style="display: flex; gap: 15px;">

                    <div style="flex: 1; display: flex; flex-direction: column; gap: 15px;">
                        <img src="images/servicios/Fiesta Infantil/infantil4.jpg" alt="Candy Bar"
                            style="width: 100%; border-radius: 5px; object-fit: cover;">
                        <img src="images/servicios/Fiesta Infantil/infantil5.jpg" alt="Mesa cerdito rosado"
                            style="width: 100%; border-radius: 5px; object-fit: cover;">
                    </div>

                    <div style="flex: 1;">
                        <img src="images/servicios/Fiesta Infantil/infantil6.jpg" alt="Vista general con personaje"
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px; display: block;">
                    </div>

                </div>

            </div>
        </div>

        <div class="category-header" style="text-align:center; margin-bottom: 40px;">
            <h3
                style="color: #edd132; font-weight: 800; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px;">
                PAQUETES FOTOGRÁFICOS</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto; border-radius: 10px;"></div>
            <section id="tarifario-fotos-transparente">

                <div class="contenedor-cards">
                    <article class="card-paquete">
                        <h2>Básico-Digital</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Fotógrafo</li>
                            <li>01 Asistente de fotografía</li>
                            <li>02 Horas de Cobertura (Tiempo del Show)</li>
                            <li>80 Fotos en digital (previa edición)</li>
                            <li>Entrega Digital (Via WeTransfer o Drive)</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 180.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Básico-Digital"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Estandar</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Fotógrafo</li>
                            <li>01 Asistente de fotografía</li>
                            <li>02 Horas de Cobertura (Tiempo del Show)</li>
                            <li>120 Fotos en digital (previa edición)</li>
                            <li>10 Fotos impresas (10 x 15 cm)</li>
                            <li>01 Cuadro + Foto (20X15 cm)</li>
                            <li>Entrega Digital (Via WeTransfer o Drive)</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 230.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estandar"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>
                </div>
            </section>
        </div>
        <div
            style="max-width: 900px; margin: 35px auto; background-color: #ffffff; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">

            <!-- FILA 1 -->
            <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Fiesta Infantil/infantil1.jpg" alt="Decoración Sophia"
                        style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Fiesta Infantil/infantil2.jpg" alt="Pastel Masha"
                        style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>

            <!-- FILA 2 -->
            <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Fiesta Infantil/infantil3.jpg" alt="Candy Bar"
                        style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Fiesta Infantil/infantil4.jpg" alt="Salón Masha"
                        style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>

            <!-- FILA 3 -->
            <div style="display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Fiesta Infantil/infantil5.jpg" alt="Detalle decoración 1"
                        style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Fiesta Infantil/infantil6.jpg" alt="Detalle decoración 2"
                        style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>

        </div>

        <div class="category-header" style="text-align:center; margin: 80px 0 40px 0;">
            <h3
                style="color: #edd132; font-weight: 800; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px;">
                PAQUETES VIDEO</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto; border-radius: 10px;"></div>
            <section id="tarifario-fotos-transparente">
                <div class="contenedor-cards">
                    <article class="card-paquete">
                        <h2>Básico-Digital</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Vieógrafo</li>
                            <li>02 Horas de Cobertura (Tiempo del Show)</li>
                            <li>01 Video Extendido (de 30-40 min aprox.)</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 150.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Básico-Digital"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Estandar</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Vieógrafo</li>
                            <li>02 Horas de Cobertura (Tiempo del Show)</li>
                            <li>01 Video Extendido (de 30-40 min aprox.)</li>
                            <li>01 Video resumen (de 1-3 min aprox.)</li>
                            <li>01 USB de 16GB simple que incluye:</li>
                            <li class="item-guion">Video Extendido</li>
                            <li class="item-guion">Video Resumen</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 250.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estandar"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>
                </div>
            </section>
        </div>

        <!-- Servicios Adicionales -->
        <div style="max-width: 1100px; margin: 50px auto; padding: 20px; font-family: 'Helvetica', Arial, sans-serif;">

            <h3
                style="text-align:center; color: #333; margin-bottom: 40px; font-size: 1.8rem; text-transform: uppercase; letter-spacing: 1px;">
                Servicios Adicionales
            </h3>

            <div style="display: flex; align-items: flex-start; justify-content: center; gap: 20px; flex-wrap: wrap;">

                <div
                    style="flex: 1; min-width: 280px; background: #1a1a1a; color: #fff; padding: 30px 25px; border-radius: 15px; text-align: center; box-shadow: 0 10px 20px rgba(0,0,0,0.1); border-top: 4px solid #edd132;">
                    <div style="font-size: 2.5rem; margin-bottom: 10px;">🎥</div>
                    <h4 style="color: #edd132; text-transform: uppercase; margin-bottom: 10px; font-size: 1.1rem;">Tomas con
                        Drone</h4>
                    <p style="font-size: 0.85rem; color: #bbb; margin-bottom: 20px;">Tomas Aéreas del Evento</p>
                    <div style="font-size: 1.8rem; font-weight: bold; color: #fff;">S/ 350.00</div>
                </div>

                <div
                    style="flex: 1.1; min-width: 320px; background: #fff; color: #333; padding: 30px 25px; border-radius: 20px; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.1); border: 1px solid #eee; border-top: 8px solid #333;">
                    <div style="font-size: 3rem; margin-bottom: 10px;">⏰</div>
                    <h4
                        style="text-transform: uppercase; margin-bottom: 15px; font-weight: 800; letter-spacing: 1px; font-size: 1.2rem;">
                        Horas Adicionales</h4>

                    <div style="text-align: left; max-width: 230px; margin: 0 auto;">
                        <div style="margin-bottom: 15px; border-bottom: 1px solid #f0f0f0; padding-bottom: 10px;">
                            <div style="color: #444; font-size: 0.85rem; margin-bottom: 5px;">✅ FOTOGRAFÍA (POR HORA)</div>
                            <div style="font-size: 1.8rem; font-weight: 900; color: #edd132;">S/ 90.00</div>
                        </div>
                        <div>
                            <div style="color: #444; font-size: 0.85rem; margin-bottom: 5px;">✅ VIDEO (POR HORA)</div>
                            <div style="font-size: 1.8rem; font-weight: 900; color: #edd132;">S/ 90.00</div>
                        </div>
                    </div>
                </div>

                <div
                    style="flex: 1; min-width: 280px; background: #edd132; color: #000; padding: 30px 25px; border-radius: 15px; text-align: center; box-shadow: 0 10px 20px rgba(237, 209, 50, 0.3); border-top: 4px solid #b39b1a; position: relative;">
                    <div
                        style="position: absolute; top: 0; left: 0; background: #000; color: #fff; font-size: 0.7rem; padding: 6px 15px; font-weight: bold; border-radius: 0 0 15px 0;">
                        PROMOCIÓN</div>
                    <div style="font-size: 2.5rem; margin-bottom: 10px;">🎁</div>
                    <h4 style="text-transform: uppercase; margin-bottom: 10px; font-weight: 800; font-size: 1.1rem;">Sesión
                        Infantil Gratis</h4>
                    <p style="font-size: 0.85rem; margin-bottom: 15px;">Adquiriendo:</p>

                    <div style="text-align: left; display: inline-block; margin-bottom: 20px;">
                        <div style="font-size: 0.85rem; margin-bottom: 5px; font-weight: 600;">— Paquete Básico Digital
                        </div>
                        <div style="font-size: 0.85rem; font-weight: 600;">— Paquete Video Estándar</div>
                    </div>
                </div>

            </div>
        </div>

        <div class="service-footer" style="text-align:center; margin-top: 50px; padding: 40px 0 0 0; background: #fafafa;">
            <p style="font-size: 1.2rem; color: #444;">Soy parte de la fiesta de tu pequeño(a) capturando cada momento
                especial con fotografías de <b>alta calidad</b>.</p>
            <p
                style="margin-top: 15px; font-weight: bold; color: #edd132; font-size: 1.4rem; text-transform: uppercase; letter-spacing: 1px;">
                ¡Hagamos que este día dure para siempre!</p>
            <section class="galeria-seccion">
                <div class="contenedor-imagenes">
                    <div class="cuadro-imagen">
                        <img src="images/servicios/Fiesta Infantil/footer1.jpg" alt="Descripción de la imagen 1">
                    </div>
                    <div class="cuadro-imagen">
                        <img src="images/servicios/Fiesta Infantil/footer2.jpg" alt="Descripción de la imagen 2">
                    </div>
                    <div class="cuadro-imagen">
                        <img src="images/servicios/Fiesta Infantil/footer3.jpg" alt="Descripción de la imagen 3">
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Seccion Boda -->
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
            const secciones = document.querySelectorAll('.service-section');
            secciones.forEach(sec => {
                sec.style.display = 'none';
                sec.style.opacity = '0'; // Preparamos para una transición suave
            });

            const seccionAMostrar = document.getElementById(idSeccion);
            if (seccionAMostrar) {
                seccionAMostrar.style.display = 'block';
                // Un pequeño truco para que aparezca con un efecto suave (FadeIn)
                setTimeout(() => {
                    seccionAMostrar.style.opacity = '1';
                    seccionAMostrar.style.transition = 'opacity 0.5s ease';
                }, 10);

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth' // 'smooth' queda mucho más elegante que 'instant'
                });
            }
        }
    </script>
@endsection