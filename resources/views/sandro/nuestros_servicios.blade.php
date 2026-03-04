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
            <section class="portada-section" style="margin-top: 40px;">
                <div class="portada-wrapper">
                    <img src="images/servicios/Fiesta Infantil/portada.png" alt="Portada Fiesta Infantil"
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

    <!-- Seccion Pedida de Mano -->
    <div id="pedida_mano" class="service-section" style="display:none;">

        <!-- PORTADA -->
        <section class="portada-section" style="margin-top: 40px;">
            <div class="portada-wrapper">
                <img src="images/servicios/Pedida Mano/portada.png" alt="Portada Pedida de Mano" class="portada-img">
            </div>
        </section>

        <div class="service-intro" style="text-align:center; margin-bottom: 40px; margin-top: 40px;">

            <div
                style="max-width: 900px; margin: 0 auto; background-color: #ffffff; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">

                <!-- TEXTO DESCRIPTIVO -->
                <div style="text-align: center; padding: 40px 30px; border: 1px solid #eee; margin-bottom: 15px;">
                    <div style="font-size: 2rem; color: #edd132; margin-bottom: 15px;">💍</div>
                    <p style="font-size: 1.05rem; line-height: 1.9; color: #333; max-width: 680px; margin: 0 auto;">
                        Haz de tu <b>pedida de mano</b> un <b>recuerdo inolvidable</b> con fotos que capturen cada emoción.
                        Nos encargamos de inmortalizar este <b>momento único</b> con un estilo natural y profesional,
                        para que puedas revivirlo siempre como el gran comienzo de esta <b>nueva etapa juntos.</b>
                    </p>
                </div>

                <!-- CAJA NEGRA CENTRADA SIN IMAGEN -->
                <div style="background: #000; color: #fff; padding: 50px 40px; text-align: center; margin-bottom: 15px;">
                    <h2
                        style="margin: 0; font-size: 1.9rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; line-height: 1.1;">
                        Paquete<br>
                        <span
                            style="color: #edd132; background: #edd132; color: #000; padding: 2px 10px; display: inline-block; margin: 8px 0;">Pedida
                            de Mano</span>
                    </h2>
                    <div style="width: 50px; height: 2px; background: #edd132; margin: 20px auto;"></div>
                    <p style="font-size: 0.95rem; line-height: 1.8; color: #e0e0e0; max-width: 500px; margin: 0 auto;">
                        Capturamos el instante más especial de tu historia de amor.
                        Cada mirada, cada lágrima de alegría y cada sonrisa quedarán
                        <b style="color:#fff;">inmortalizados para siempre</b> en imágenes que contarán
                        vuestra historia de la manera más auténtica.
                    </p>
                </div>
            </div>
        </div>

        <!-- PAQUETE PEDIDA DE MANO (solo uno) -->
        <div class="category-header" style="text-align:center; margin-bottom: 40px;">
            <h3
                style="color: #edd132; font-weight: 800; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px;">
                PAQUETE</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto; border-radius: 10px;"></div>

            <section id="tarifario-fotos-transparente" style="padding: 10px 10px">
                <div class="contenedor-cards" style="justify-content: center;">

                    <article class="card-paquete" style="max-width: 420px; width: 100%;">
                        <h2 style="font-size: 1.9rem;">Pedida de Mano</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Fotógrafo</li>
                            <li>01 Asistente de Fotografía</li>
                            <li>02 Horas de cobertura</li>
                            <li>30 Fotos en digital (previa edición)</li>
                            <li>05 Fotos impresas (10X15 cm)</li>
                            <li>01 Cuadro + Foto impresa (20X15 cm)</li>
                        </ul>

                        <!-- Nota especial traslado -->
                        <div
                            style="margin-top: 20px; background: #fffbe6; border: 1.5px solid #edd132; border-radius: 8px; padding: 12px 16px; text-align: center;">
                            <p
                                style="margin: 0; font-size: 0.85rem; font-weight: 800; text-transform: uppercase; color: #000; letter-spacing: 0.5px;">
                                ✅ Incluye traslado dentro de Chincha
                            </p>
                        </div>

                        <div class="footer-card">
                            <div class="precio">S/. 300.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20de%20Pedida%20de%20Mano"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>
                </div>
            </section>
        </div>
        <!-- FOOTER CON GALERÍA -->
        <div class="service-footer" style="text-align:center; padding: 30px 0 0 0; background: #fafafa;">
            <p style="font-size: 1.2rem; color: #444;">Inmortalizamos el instante más especial de tu historia de amor con
                fotografías de <b>alta calidad</b>.</p>
            <p
                style="margin-top: 15px; font-weight: bold; color: #edd132; font-size: 1.4rem; text-transform: uppercase; letter-spacing: 1px;">
                ¡Un Sí para Siempre!</p>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Seccion Baby Shower -->
    <div id="baby_shower" class="service-section">

        <!-- PORTADA -->
        <section class="portada-section">
            <div class="portada-wrapper" style="margin-top: 20px;">
                <img src="images/servicios/Baby Shower/Portada1.png" alt="Portada Baby Shower" class="portada-img">
            </div>
        </section>

        <div class="service-intro" style="text-align:center; margin-bottom: 40px;">

            <!-- SOBRE NOSOTROS -->
            <div
                style="max-width: 900px; margin: 0 auto; background-color: #ffffff; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">

                <!-- FILA 1: Foto principal + caja de texto -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: stretch;">

                    <div style="flex: 1; background: #fff; border: 1px solid #000; padding: 0;">
                        <!-- barra superior decorativa -->
                        <div style="display:flex; height: 8px;">
                            <div style="flex:3; background:#000;"></div>
                            <div style="flex:1; background:#edd132;"></div>
                        </div>
                        <div style="padding: 30px 25px;">
                            <h2 style="font-size:1.8rem; font-weight:900; margin:0 0 15px 0; color:#000;">Sobre Nosotros
                            </h2>
                            <p style="font-size: 0.9rem; line-height: 1.75; text-align: left; margin: 0; color: #333;">
                                Nos encanta capturar los <b>momentos</b> más <b>especiales</b> de tu
                                vida, creando recuerdos que duren para siempre. Con un
                                enfoque <b>profesional</b> y una mirada <b>creativa</b>, buscamos
                                reflejar tu estilo y la esencia de cada celebración de una
                                manera única.<br><br>
                                Queremos que tu sesión sea una <b>experiencia divertida</b> y
                                <b>auténtica</b>, donde te sientas cómodo y disfrutes el momento
                                mientras inmortalizamos recuerdos que realmente cuenten
                                tu historia.
                            </p>
                        </div>
                    </div>

                    <div style="flex: 0.5;">
                        <img src="images/servicios/Baby Shower/babyshower1.jpg" alt="Baby Shower"
                            style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>

                </div>

                <!-- FILA 2: Imagen grande full width -->
                <div style="margin-bottom: 15px;">
                    <img src="images/servicios/Baby Shower/babyshower2.jpg" alt="Baby Shower decoración"
                        style="width: 100%; height: 320px; object-fit: cover; display: block;">
                </div>

                <!-- FILA 3: caja texto Paquetes + imagen derecha -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: stretch;">

                    <div
                        style="flex: 1; background: #000; color: #fff; padding: 30px 20px; text-align: center; display: flex; flex-direction: column; justify-content: center;">
                        <h2
                            style="margin: 0; font-size: 1.9rem; font-weight: 900; text-transform: uppercase; letter-spacing: 2px; line-height: 1.1;">
                            Paquetes<br>
                            <span style="color: #edd132;">Baby Shower</span>
                        </h2>
                        <div style="width: 50px; height: 2px; background: #edd132; margin: 18px auto;"></div>
                        <p style="font-size: 0.88rem; line-height: 1.7; text-align: left; margin: 0; color: #e0e0e0;">
                            Celebra la llegada de tu <b style="color:#fff;">bebé</b> con un <b style="color:#fff;">recuerdo
                                inolvidable.</b>
                            Nuestros paquetes de baby shower están diseñados para capturar cada sonrisa,
                            abrazo y emoción de este <b style="color:#fff;">momento tan especial.</b>
                        </p>
                    </div>

                    <div style="flex: 1.4;">
                        <img src="images/servicios/Baby Shower/babyshower3.jpg" alt="Baby Shower"
                            style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>

                </div>

                <!-- FILA 4: Dos imágenes -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                    <div style="flex: 1;">
                        <img src="images/servicios/Baby Shower/babyshower4.jpg" alt="Baby Shower"
                            style="width: 100%; height: 280px; object-fit: cover; display: block;">
                    </div>
                    <div style="flex: 1;">
                        <img src="images/servicios/Baby Shower/babyshower5.jpg" alt="Baby Shower"
                            style="width: 100%; height: 280px; object-fit: cover; display: block;">
                    </div>
                </div>

                <!-- FILA 5: Dos imágenes -->
                <div style="display: flex; gap: 15px;">
                    <div style="flex: 1;">
                        <img src="images/servicios/Baby Shower/babyshower6.jpg" alt="Baby Shower"
                            style="width: 100%; height: 280px; object-fit: cover; display: block;">
                    </div>
                    <div style="flex: 1;">
                        <img src="images/servicios/Baby Shower/babyshower7.jpg" alt="Baby Shower"
                            style="width: 100%; height: 280px; object-fit: cover; display: block;">
                    </div>
                </div>

            </div>
        </div>

        <!-- PAQUETES FOTOGRÁFICOS -->
        <div class="category-header" style="text-align:center; margin-bottom: 40px;">
            <h3
                style="color: #edd132; font-weight: 800; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px;">
                PAQUETES FOTOGRÁFICOS</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto; border-radius: 10px;"></div>

            <section id="tarifario-fotos-transparente">
                <div class="contenedor-cards">

                    <article class="card-paquete">
                        <h2>Básico</h2>
                        <div class="badge-negro">Mi primer bebé</div>
                        <ul class="lista-items">
                            <li>01 Fotógrafo</li>
                            <li>01 Asistente de fotografía</li>
                            <li>02 Horas de Cobertura (tiempo del show)</li>
                            <li>100 Fotos en digital (previa edición)</li>
                            <li>10 Fotos impresas (10X15 cm)</li>
                            <li>01 Cuadro + Foto (20X15 cm)</li>
                            <li>Material en digital + Impresión</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 200.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Básico%20de%20Baby%20Shower"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Estándar</h2>
                        <div class="badge-negro">Somos uno</div>
                        <ul class="lista-items">
                            <li>01 Fotógrafo</li>
                            <li>01 Asistente de fotografía</li>
                            <li>03 Horas de Cobertura (tiempo del show)</li>
                            <li>150 Fotos en digital (previa edición)</li>
                            <li>20 Fotos en impresas (10X15 cm)</li>
                            <li>01 Cuadro + Foto impresa (20X30 cm)</li>
                            <li>Material en digital + Impresión</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 350.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estándar%20de%20Baby%20Shower"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                </div>
            </section>
        </div>

        <!-- GALERÍA ENTRE PAQUETES -->
        <div style="max-width: 900px; margin: 35px auto; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">
            <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Baby Shower/babyshower8.jpg" alt="Baby Shower"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Baby Shower/babyshower9.jpg" alt="Baby Shower"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>
            <div style="display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Baby Shower/babyshower10.jpg" alt="Baby Shower"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Baby Shower/babyshower11.jpg" alt="Baby Shower"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>
        </div>

        <!-- PAQUETES VIDEO -->
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
                            <li>01 Videógrafo</li>
                            <li>02 Horas de Cobertura (tiempo del show)</li>
                            <li>01 Video extendido (de 30-40 min aprox.)</li>
                            <li>Material en digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 150.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Básico-Digital%20Video%20de%20Baby%20Shower"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Estándar</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Videógrafo</li>
                            <li>03 Horas de Cobertura (tiempo del show)</li>
                            <li>01 Video extendido (de 30-40 min aprox.)</li>
                            <li>01 Video resumen (de 1-3 min aprox.)</li>
                            <li>01 USB de 16GB simple que incluye:</li>
                            <li class="item-guion">Video extendido</li>
                            <li class="item-guion">Video resumen</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 250.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estándar%20Video%20de%20Baby%20Shower"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                </div>
            </section>
        </div>

        <!-- GALERÍA FINAL VIDEO -->
        <div style="max-width: 900px; margin: 35px auto; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">
            <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Baby Shower/babyshower12.jpg" alt="Baby Shower"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Baby Shower/babyshower13.jpg" alt="Baby Shower"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>
            <div style="display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Baby Shower/babyshower14.jpg" alt="Baby Shower"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Baby Shower/babyshower15.jpg" alt="Baby Shower"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
=======
    <!-- SECCION BAUTIZO -->
  <div id="bautizo" class="service-section" style="display: none;">
    
    <section style="width: 100%; margin-top: -40px; display: flex; justify-content: center; align-items: center; background-color: #000; padding: 20px 20px 0 20px;">
        <div style="position: relative; width: clamp(320px, 75vw, 1100px); min-width: 320px;">
            <img src='images/servicios/PORTADA_WEB_PAQUETE_BAUTIZO.png' 
                 alt='Portada Bautizo' 
                 style="width: 100%; height: auto; display: block; border-radius: 8px;">
            <div style="position: absolute; top: 0; left: 0; width: 80px; height: 100%; background: linear-gradient(to right, #000, transparent); border-radius: 8px 0 0 8px;"></div>
            <div style="position: absolute; top: 0; right: 0; width: 80px; height: 100%; background: linear-gradient(to left, #000, transparent); border-radius: 0 8px 8px 0;"></div>
        </div>
    </section>

    <section style="width: 100%; padding: 80px 0; overflow: hidden; background-color: #fff;">
        <div style="max-width: 1100px; margin: 0 auto; display: flex; align-items: center; gap: 60px; padding: 0 20px;">
            
            <div style="flex: 1;">
                <img src="images/servicios/BAUTIZO01.jpg" alt="Bautizo" style="width: 100%; height: auto; display: block; border-radius: 4px;">
            </div>

            <div style="flex: 1.2; position: relative;">
                
                <div style="position: relative; margin-bottom: 30px; padding-top: 20px;">
                    <div style="position: absolute; top: 0; left: -120px; width: 200vw; display: flex; height: 7px;">
                        <div style="background-color: #000; width: 480px;"></div> 
                        <div style="background-color: #fcdb05; flex-grow: 1;"></div> 
                    </div>
                    
                    <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 3.5rem; color: #000; margin: 0; letter-spacing: -1px; text-align: left;">Sobre Nosotros</h2>
                </div>
                
                <div style="text-align: left; font-family: 'Jost', sans-serif; font-size: 1.1rem; line-height: 1.6; color: #1a1a1a;">
                    <p style="margin-bottom: 25px;">
                        Nos encanta capturar los <strong>momentos</strong> más <strong>especiales</strong> de tu vida, creando recuerdos que duren para siempre. Con un enfoque <strong>profesional</strong> y una mirada <strong>creativa</strong>, buscamos reflejar tu estilo y la esencia de cada celebración de una manera única.
                    </p>
                    <p>
                        Queremos que tu sesión sea una <strong>experiencia divertida</strong> y <strong>auténtica</strong>, donde te sientas cómodo y disfrutes el momento mientras inmortalizamos recuerdos que realmente cuenten tu historia.
                    </p>
                </div>
            </div>
        </div>
    </section>
<div style="width: 100%; max-width: 1100px; margin: 0 auto; padding: 40px 20px 80px 20px; background-color: #fff;">

    <div style="width: 100%; position: relative; z-index: 1;">
        <img src="images/servicios/BAUTIZO02.jpg" 
             alt="Ceremonia Bautizo" 
             style="width: 100%; height: auto; display: block; border-radius: 4px;">
    </div>

    <div style="
        width: 45%; 
        background-color: #000; 
        margin: -150px 0 60px auto; /* Elevado a -150px para que suba bastante sobre la imagen */
        padding: 45px 35px; 
        color: #fff; 
        text-align: center; 
        box-shadow: 15px 15px 40px rgba(0,0,0,0.3);
        z-index: 10;
        position: relative;
    ">
        <h3 style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 1.7rem; margin: 0; letter-spacing: 1px; color: #fff;">Paquetes</h3>
        <h2 style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 3.3rem; margin: 0; line-height: 0.9; color: #fff;">Bautizo</h2>
        
        <div style="width: 65px; height: 3px; background-color: #fcdb05; margin: 20px auto;"></div>

        <p style="font-family: 'Jost', sans-serif; font-size: 1rem; line-height: 1.5; font-weight: 300; margin: 0; color: #fff;">
            Celebra este día tan <strong>especial</strong> con recuerdos que durarán toda la vida. El <strong>bautizo</strong> es un <strong>momento lleno de amor, fe y sonrisas</strong>, ¡y queremos ayudarte a capturarlo todo!
        </p>
    </div>

    <div style="width: 100%; display: grid; grid-template-columns: 1fr 1fr; gap: 25px; align-items: start;">
        
        <div style="display: flex; flex-direction: column; gap: 25px;">
            <img src="images/servicios/BAUTIZO05.jpg" style="width: 100%; height: auto; border-radius: 4px; display: block;" alt="Evento 05">
            <img src="images/servicios/BAUTIZO03.jpg" style="width: 100%; height: auto; border-radius: 4px; display: block;" alt="Niña 03">
        </div>

        <div style="display: flex; flex-direction: column; gap: 25px;">
            <img src="images/servicios/BAUTIZO06.jpg" style="width: 100%; height: auto; border-radius: 4px; display: block;" alt="Detalle 06">
            
            <div style="width: 100%; overflow: hidden; border-radius: 500px 500px 4px 4px;">
                <img src="images/servicios/BAUTIZO04.jpg" 
                     style="width: 100%; height: auto; display: block;" 
                     alt="Decoración 04">
            </div>
        </div>
    </div>
</div>

<section id="tarifario-fotos-transparente">
    
    <div class="titulo-seccion">
        <h1>Paquetes<br>Fotográficos</h1>
        <div class="barra-amarilla"></div>
    </div>

    <div class="contenedor-cards">
        
        <article class="card-paquete">
            <h2>Básico</h2>
            <div class="badge-vacio"></div>
            <ul class="lista-items">
                <li>01 Fotógrafo</li>
                <li>01 Asistente de fotografía</li>
                <li>02 Horas de cobertura (tiempo del show)</li>
                <li>100 Fotos en digital (previa edición)</li>
                <li>10 Fotos impresas (10X15 cm)</li>
                <li>01 Cuadro + Foto (20X15 cm)</li>
                <li>Material en digital + Impresión</li>
            </ul>
            <div class="footer-card">
                <div class="precio">S/. 200.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Básico%20de%20Bautizo" class="btn-wsp" target="_blank">
                    ME INTERESA ESTE PAQUETE
                </a>
            </div>
        </article>

        <article class="card-paquete">
            <h2>Estándar</h2>
            <div class="badge-negro">El más pedido</div>
            <ul class="lista-items">
                <li>01 Fotógrafo</li>
                <li>01 Asistente de fotografía</li>
                <li>03 Horas de cobertura (tiempo del show)</li>
                <li>150 Fotos en digital (previa edición)</li>
                <li>20 Fotos impresas (10X15 cm)</li>
                <li>01 Cuadro + Foto impresa (20X30 cm)</li>
                <li>Material en digital + Impresión</li>
            </ul>
            <div class="footer-card">
                <div class="precio">S/. 350.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estándar%20de%20Bautizo" class="btn-wsp" target="_blank">
                    ME INTERESA ESTE PAQUETE
                </a>
            </div>
        </article>
    </div>
    <div class="bloque-galeria" style="margin-top: 60px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; max-width: 1100px; margin-left: auto; margin-right: auto; padding: 0 10px;">
    <img src="images/servicios/BAUTIZO07.jpg" alt="Evento Bautizo 07" style="width: 100%; border-radius: 4px;">
    <img src="images/servicios/BAUTIZO08.jpg" alt="Decoración Bautizo 08" style="width: 100%; border-radius: 4px;">
    <img src="images/servicios/BAUTIZO09.jpg" alt="Familia Bautizo 09" style="width: 100%; border-radius: 4px;">
    <img src="images/servicios/BAUTIZO10.jpg" alt="Ceremonia Bautizo 10" style="width: 100%; border-radius: 4px;">
    <img src="images/servicios/BAUTIZO11.jpg" alt="Local Bautizo 11" style="width: 100%; border-radius: 4px;">
    <img src="images/servicios/BAUTIZO12.jpg" alt="Bautizo Detalle 12" style="width: 100%; border-radius: 4px;">
</div>

<section id="tarifario-fotos-transparente" style="padding: 80px 10px 40px 10px;">
    
    <div class="titulo-seccion" style="text-align: center; margin-bottom: 40px;">
        <h1 style="font-weight: 900; font-size: 2.2rem; margin: 0; line-height: 1.1; text-transform: uppercase; font-family: 'Montserrat', sans-serif;">Paquetes<br>Video</h1>
        <div class="barra-amarilla" style="width: 70px; height: 4px; background-color: #fcdb05; margin: 10px auto;"></div>
    </div>

    <div class="contenedor-cards" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; max-width: 1100px; margin: 0 auto;">
        
        <article class="card-paquete">
            <h2>Básico-Digital</h2>
            <div class="badge-vacio"></div>
            <ul class="lista-items">
                <li>01 Videógrafo</li>
                <li>02 Horas de cobertura (tiempo del show)</li>
                <li>01 Video extendido (de 30-40 min aprox.)</li>
                <li>Material en digital</li>
            </ul>
            <div class="footer-card">
                <div class="precio">S/. 200.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Video%20Básico-Digital" class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
            </div>
        </article>

        <article class="card-paquete">
            <h2>Estándar</h2>
            <div class="badge-negro">Recomendado</div>
            <ul class="lista-items">
                <li>01 Videógrafo</li>
                <li>03 Horas de cobertura (tiempo del show)</li>
                <li>01 Video extendido (de 30-40 min aprox.)</li>
                <li>01 Video resumen (de 1-3 min aprox.)</li>
                <li>01 USB de 16GB simple que incluye:</li>
            </ul>
            <div class="footer-card">
                <div class="precio">S/. 250.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Video%20Estándar" class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
            </div>
        </article>
    </div>

    <p style="text-align: center; font-family: 'Montserrat', sans-serif; font-size: 0.7rem; color: #888; margin-top: 40px; letter-spacing: 1px;">
        SUJETO A TÉRMINOS Y CONDICIONES
    </p>
</section>
</section>
<footer style="margin:0; padding:0;">

    <img src="images/servicios/FOOTER.png"
         alt="Contacto Empresa"
         style="width:100vw; height:auto; display:block;">

</footer>
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

<section id="embarazo-exteriores-full">
    
    <div class="seccion-header">
        <h1>Paquete Embarazo<br>en Exteriores</h1>
        <div class="separador"></div>
    </div>

    <div class="bloque-paquetes">
        
        <article class="tarjeta">
            <h2>Básico-Digital</h2>
            <div class="tag-vacio"></div>
            <ul class="lista">
                <li>01 Fotógrafo</li>
                <li>01 Asistente de fotografía</li>
                <li>45min de sesión</li>
                <li>01 Cambio de ropa</li>
                <li>20 Fotos en digital (previa edición)</li>
                <li>Material en digital</li>
            </ul>
            <div class="card-footer">
                <div class="precio-tag">S/. 200.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Básico-Digital" class="btn-ws" target="_blank">ME INTERESA ESTE PAQUETE</a>
            </div>
        </article>

        <article class="tarjeta">
            <h2>Estándar</h2>
            <div class="tag-negro">Mi primer bebe</div>
            <ul class="lista">
                <li>01 Fotógrafo</li>
                <li>01 Asistente de fotografía</li>
                <li>01 Hora de sesión</li>
                <li>01 Cambio de ropa</li>
                <li>30 Fotos en digital (previa edición)</li>
                <li>05 Fotos impresas (10 x 15 cm)</li>
                <li>01 Cuadro + Foto (20X15 cm)</li>
                <li>Material en digital + impresiones</li>
            </ul>
            <div class="card-footer">
                <div class="precio-tag">S/. 250.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estándar" class="btn-ws" target="_blank">ME INTERESA ESTE PAQUETE</a>
            </div>
        </article>

        <article class="tarjeta">
            <h2>Full</h2>
            <div class="tag-vacio"></div>
            <ul class="lista">
                <li>01 Fotógrafo</li>
                <li>01 Asistente de fotografía</li>
                <li>01 Hora 30 min de sesión</li>
                <li>02 Cambios de ropa</li>
                <li>40 Fotos en digital (previa edición)</li>
                <li>10 Fotos impresas (10 x 15 cm)</li>
                <li>01 Cuadro + Foto (20X30 cm)</li>
                <li>01 Video resumen de sesión</li>
                <li>Material en digital + impresiones</li>
            </ul>
            <div class="card-footer">
                <div class="precio-tag">S/. 350.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Full" class="btn-ws" target="_blank">ME INTERESA ESTE PAQUETE</a>
            </div>
        </article>
    </div>

    <div class="bloque-galeria">
        <img src="images/servicios/EMBARAZO6.jpg" alt="Sesión de embarazo 1">
        <img src="images/servicios/EMBARAZO7.jpg" alt="Sesión de embarazo 2">
        <img src="images/servicios/EMBARAZO8.jpg" alt="Sesión de embarazo 3">
        <img src="images/servicios/EMBARAZO9.jpg" alt="Sesión de embarazo 4">
        <img src="images/servicios/EMBARAZO10.jpg" alt="Sesión de embarazo 5">
        <img src="images/servicios/EMBARAZO11.jpg" alt="Sesión de embarazo 6">
    </div>

</section>
<section id="embarazo-estudio-full">
    
    <div class="estudio-header">
        <h1>Paquete Embarazo<br>en Estudio</h1>
        <div class="estudio-separador"></div>
    </div>

    <div class="estudio-contenido-row">
        
        <div class="estudio-bloque-paquetes">
            <article class="estudio-tarjeta">
                <h2>Básico-Digital</h2>
                <div class="estudio-tag-vacio"></div>
                <ul class="estudio-lista">
                    <li>01 Fotógrafo</li>
                    <li>45min de sesión</li>
                    <li>01 Cambio de ropa</li>
                    <li>15 Fotos en digital</li>
                    <li>Material en digital</li>
                </ul>
                <div class="estudio-footer">
                    <div class="estudio-precio">S/. 250.00</div>
                    <a href="https://wa.me/51931826325?text=Info Estudio Básico" class="estudio-btn-ws" target="_blank">ME INTERESA</a>
                </div>
            </article>

            <article class="estudio-tarjeta">
                <h2>Estándar</h2>
                <div class="estudio-tag-negro">Mi primer bebe</div>
                <ul class="estudio-lista">
                    <li>01 Fotógrafo</li>
                    <li>01 Hora de sesión</li>
                    <li>01 Cambio de ropa</li>
                    <li>20 Fotos en digital</li>
                    <li>10 Fotos impresas</li>
                    <li>01 Cuadro + Foto</li>
                </ul>
                <div class="estudio-footer">
                    <div class="estudio-precio">S/. 350.00</div>
                    <a href="https://wa.me/51931826325?text=Info Estudio Estándar" class="estudio-btn-ws" target="_blank">ME INTERESA</a>
>>>>>>> e085e48826d082d0043f04fec025344a4f7e270d
                </div>
            </article>
        </div>

        <div class="estudio-galeria-vertical">
            <div class="pareja-fotos">
                <img src="images/servicios/EMBARAZO12.png" alt="Estudio 1">
                <img src="images/servicios/EMBARAZO13.png" alt="Estudio 2">
            </div>
            <div class="pareja-fotos">
                <img src="images/servicios/EMBARAZO14.png" alt="Estudio 3">
                <img src="images/servicios/EMBARAZO15.png" alt="Estudio 4">
            </div>
        </div>

    </div>
</section>

 <section class="p-portafolio-contenedor">
    
    <h2 class="p-titulo-seccion">Nuestro Portafolio</h2>

    <div class="p-bloque-fotos">
        
        <div class="p-fila-fotos">
            <div class="p-foto p-foto-lateral">
                <img src="images/servicios/EMBARAZO16.png" alt="Sesión de estudio 16">
            </div>
            <div class="p-foto p-foto-central">
                <img src="images/servicios/EMBARAZO17.png" alt="Sesión de estudio 17">
            </div>
            <div class="p-foto p-foto-lateral">
                <img src="images/servicios/EMBARAZO18.png" alt="Sesión de estudio 18">
            </div>
        </div>

        <div class="p-fila-fotos">
            <div class="p-foto p-foto-lateral">
                <img src="images/servicios/EMBARAZO19.png" alt="Sesión de estudio 19">
            </div>
            <div class="p-foto p-foto-central">
                <img src="images/servicios/EMBARAZO20.png" alt="Sesión de estudio 20">
            </div>
            <div class="p-foto p-foto-lateral">
                <img src="images/servicios/EMBARAZO21.png" alt="Sesión de estudio 21">
            </div>
        </div>

    </div>

 </section>
   </div> 

    <!-- SECCION QUINCEAÑERA -->
     <div id="quinceanera" class="service-section" style="display: none;">
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
        <img src='images/servicios/QUINO_PORTADA.png'
             alt='Portada quino'
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


 <!-- SOBRE NOSOTROS - QUINCEAÑERA -->
<!-- SOBRE NOSOTROS - QUINCEAÑERA -->
<section class="qsn-section">
    <div class="qsn-inner">

        <!-- Columna imagen -->
        <div class="qsn-col-img">
            <img src="images/servicios/QUINO01.jpeg" alt="Quinceañera">
        </div>

        <!-- Columna texto -->
        <div class="qsn-col-texto">

            <!-- Línea negra + amarilla (solo dentro del texto) -->
            <div class="qsn-linea">
                <div class="qsn-linea__negro"></div>
                <div class="qsn-linea__amarillo"></div>
            </div>

            <h2 class="qsn-titulo">Sobre Nosotros</h2>

            <!-- Texto -->
            <div class="qsn-texto">
                <p>
                    Nos encanta capturar los <strong>momentos</strong> más <strong>especiales</strong> de tu
                    vida, creando recuerdos que duren para siempre. Con un
                    enfoque <strong>profesional</strong> y una mirada <strong>creativa</strong>, buscamos
                    reflejar tu estilo y la esencia de cada celebración de una
                    manera única.
                </p>
                <p>
                    Queremos que tu sesión sea una <strong>experiencia divertida</strong> y
                    <strong>auténtica</strong>, donde te sientas cómodo y disfrutes el momento
                    mientras inmortalizamos recuerdos que realmente cuenten
                    tu historia.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- BLOQUE HERO + PAQUETES QUINCEAÑERA -->

<!-- ① IMAGEN HERO CON TARJETA SUPERPUESTA -->
<div class="quino-container">

    <div class="qhero-wrap">
        <div class="qhero-img">
            <img src="images/servicios/QUINO02.jpeg" alt="Sesiones XV Años" style="width: 100%; height: auto; display: block;">
        </div>
        <div class="qhero-card" style="position: absolute; bottom: 5%; right: 5%; background-color: #000; color: #fff; padding: 35px; width: 40%; z-index: 10; text-align: center;">
            <p style="margin:0; font-size: 1.2rem; font-family: 'Montserrat', sans-serif;">Sesiones de</p>
            <h2 style="font-size: 2.5rem; font-weight: 800; margin: 5px 0; font-family: 'Montserrat', sans-serif;">XV Años</h2>
            <div style="width: 50px; height: 3px; background-color: #fcdb05; margin: 15px auto;"></div>
            <p style="font-size: 0.9rem; line-height: 1.4; font-family: 'Montserrat', sans-serif;">
                Celebra el paso de tu <strong>hija</strong> a la adultez con
                una sesión de fotos de <strong>quinceañera única</strong>.
                Capturamos su belleza, alegría y esencia
                en estos <strong>momentos especiales</strong>.
            </p>
        </div>
    </div>

    <div class="qpaq-wrap" style="display: flex; gap: 30px; align-items: flex-start; margin-top: 40px;">
        
        <div class="qpaq-col-cards" style="flex: 1; display: flex; flex-direction: column; gap: 30px;">
            
            <article class="qpaq-card" style="border: 2px solid #000; padding: 30px; text-align: center; font-family: 'Montserrat', sans-serif;">
                <h3 style="font-size: 1.8rem; font-weight: 800; margin-bottom: 20px;">Sesión-Pre XV Digital</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 25px; text-align: left; display: inline-block;">
                    <li style="margin-bottom: 8px;">✔ 03 Horas de sesión</li>
                    <li style="margin-bottom: 8px;">✔ 50 Fotos en digital</li>
                    <li style="margin-bottom: 8px;">✔ 10 Fotos impresas (10x15 cm)</li>
                    <li style="margin-bottom: 8px;">✔ Material en digital</li>
                </ul>
                <div style="margin-bottom: 20px;">
                    <span style="background-color: #fcdb05; padding: 8px 25px; font-weight: 800; font-size: 1.4rem; border-radius: 5px;">S/. 450.00</span>
                </div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20paquete%20Sesión-Pre%20XV%20Digital" 
                   target="_blank" 
                   style="display: block; background-color: #000; color: #fff; text-decoration: none; padding: 12px; font-weight: 700; font-size: 0.9rem; border-radius: 5px; transition: 0.3s;">
                   ME INTERESA ESTE PAQUETE
                </a>
            </article>

            <article class="qpaq-card" style="border: 2px solid #000; padding: 30px; text-align: center; font-family: 'Montserrat', sans-serif;">
                <h3 style="font-size: 1.8rem; font-weight: 800; margin-bottom: 20px;">Pre XV-Recuerdo</h3>
                <ul style="list-style: none; padding: 0; margin-bottom: 25px; text-align: left; display: inline-block;">
                    <li style="margin-bottom: 8px;">✔ 03 Horas de sesión</li>
                    <li style="margin-bottom: 8px;">✔ 50 Fotos en digital</li>
                    <li style="margin-bottom: 8px;">✔ 20 Fotos impresas (10x15 cm)</li>
                    <li style="margin-bottom: 8px;">✔ 01 Cuadro de firmas + Foto (40x30 cm)</li>
                </ul>
                <div style="margin-bottom: 20px;">
                    <span style="background-color: #fcdb05; padding: 8px 25px; font-weight: 800; font-size: 1.4rem; border-radius: 5px;">S/. 520.00</span>
                </div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20paquete%20Pre%20XV-Recuerdo" 
                   target="_blank" 
                   style="display: block; background-color: #000; color: #fff; text-decoration: none; padding: 12px; font-weight: 700; font-size: 0.9rem; border-radius: 5px; transition: 0.3s;">
                   ME INTERESA ESTE PAQUETE
                </a>
            </article>
        </div>

        <div class="qpaq-col-img" style="flex: 0.8;">
            <img src="images/servicios/QUINO03.jpeg" alt="Quinceañera lateral" style="width: 100%; height: auto; display: block;">
        </div>

    </div>
</div>
<section style="width: 100%; max-width: 1100px; margin: 0 auto; padding: 60px 20px; font-family: 'Montserrat', sans-serif;">
    
    <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.8rem; font-weight: 800; margin: 0; color: #000;">Paquete Fotográfico</h2>
        <h2 style="font-size: 2.8rem; font-weight: 800; margin: 0; color: #000;">XV años</h2>
        <div style="width: 60px; height: 4px; background-color: #fcdb05; margin: 15px auto;"></div>
    </div>

    <div style="display: flex; align-items: center; gap: 50px; justify-content: center; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 320px; max-width: 450px;">
            <div style="width: 100%; overflow: hidden; border-radius: 500px 500px 0 0;">
                <img src="images/servicios/QUINO01.jpeg" alt="Sesión XV Años" style="width: 100%; height: auto; display: block;">
            </div>
        </div>

        <div style="flex: 1; min-width: 320px; max-width: 500px; border: 2px solid #000; padding: 40px; position: relative; background: #fff;">
            <ul style="list-style: none; padding: 0; margin: 0 0 30px 0; font-size: 1rem; line-height: 1.8;">
                <li><strong>✔ SESIÓN PRE XV</strong></li>
                <li><strong>✔ 04 Horas de cobertura</strong> (día del evento)</li>
                <li><strong>✔ 01 Fotógrafo</strong></li>
                <li><strong>✔ 01 Asistente de Fotografía</strong></li>
                <li><strong>✔ 01 Cuadro de firmas + Parante</strong> como préstamo</li>
                <li><strong>✔ 01 USB personalizado</strong> con contenido de:</li>
                <li style="padding-left: 20px;">- Pre-XV: <strong>40 Fotos digitales</strong></li>
                <li style="padding-left: 20px;">- Evento: <strong>350 Fotos digitales</strong></li>
            </ul>
            <div style="text-align: center;">
                <span style="background-color: #fcdb05; padding: 10px 30px; font-weight: 900; font-size: 1.5rem; border-radius: 5px; color: #000;">S/. 1500.00</span>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Fotográfico%20de%20XV%20Años" 
                   target="_blank" style="display: block; margin-top: 20px; background: #000; color: #fff; text-decoration: none; padding: 12px; font-weight: 700; border-radius: 5px;">ME INTERESA ESTE PAQUETE</a>
            </div>
        </div>
    </div>
</section>

<section style="width: 100%; max-width: 1100px; margin: 0 auto; padding: 60px 20px; font-family: 'Montserrat', sans-serif;">
    
    <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.8rem; font-weight: 800; margin: 0; color: #000;">Paquetes Videos</h2>
        <h2 style="font-size: 2.8rem; font-weight: 800; margin: 0; color: #000;">XV años</h2>
        <div style="width: 60px; height: 4px; background-color: #fcdb05; margin: 15px auto;"></div>
    </div>

    <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
        
        <div style="flex: 1; min-width: 300px; max-width: 450px; border: 2px solid #000; padding: 40px; text-align: center; background: #fff;">
            <h3 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 25px;">Estándar</h3>
            <ul style="list-style: none; padding: 0; margin-bottom: 30px; text-align: left; display: inline-block;">
                <li style="margin-bottom: 10px;">✔ 01 Videógrafo</li>
                <li style="margin-bottom: 10px;">✔ 04 Horas de cobertura</li>
                <li style="margin-bottom: 10px;">✔ 40 min aprox. de video editado</li>
                <li style="margin-bottom: 10px;">✔ 01 Video Reel (resumen)</li>
                <li style="margin-bottom: 10px;">✔ Material en digital</li>
            </ul>
            <div style="margin-top: 20px;">
                <span style="background-color: #fcdb05; padding: 10px 30px; font-weight: 900; font-size: 1.5rem; border-radius: 5px; color: #000;">S/. 950.00</span>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Video%20Estándar%20de%20XV%20Años" 
                   target="_blank" style="display: block; margin-top: 20px; background: #000; color: #fff; text-decoration: none; padding: 12px; font-weight: 700; border-radius: 5px;">ME INTERESA ESTE PAQUETE</a>
            </div>
        </div>

        <div style="flex: 1; min-width: 300px; max-width: 450px; border: 2px solid #000; padding: 40px; text-align: center; background: #fff;">
            <h3 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 25px;">Full</h3>
            <ul style="list-style: none; padding: 0; margin-bottom: 30px; text-align: left; display: inline-block;">
                <li style="margin-bottom: 10px;">✔ 02 Videógrafos</li>
                <li style="margin-bottom: 10px;">✔ 06 Horas de cobertura</li>
                <li style="margin-bottom: 10px;">✔ 40 min aprox. de video editado</li>
                <li style="margin-bottom: 10px;">✔ 01 Video Reel (resumen)</li>
                <li style="margin-bottom: 10px;">✔ Material digital + USB personalizado</li>
            </ul>
            <div style="margin-top: 20px;">
                <span style="background-color: #fcdb05; padding: 10px 30px; font-weight: 900; font-size: 1.5rem; border-radius: 5px; color: #000;">S/. 1800.00</span>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Video%20Full%20de%20XV%20Años" 
                   target="_blank" style="display: block; margin-top: 20px; background: #000; color: #fff; text-decoration: none; padding: 12px; font-weight: 700; border-radius: 5px;">ME INTERESA ESTE PAQUETE</a>
            </div>
        </div>

    </div>
</section>

<section style="width: 100%; max-width: 1100px; margin: 0 auto; padding: 20px 20px 80px 20px; background-color: #fff;">
    
    <div style="width: 100%; position: relative;">
        <img src="images/servicios/QUINO04.jpeg" 
             alt="Galería Quinceañera" 
             style="
                width: 100%; 
                height: auto; 
                display: block; 
                border-radius: 4px;
                /* Agregamos una sombra muy sutil para que no flote en el blanco */
                box-shadow: 0 4px 15px rgba(0,0,0,0.05);
             ">
             
        <div style="width: 60px; height: 4px; background-color: #fcdb05; margin: 40px auto 0 auto;"></div>
    </div>

</section>
<!-- SECCIÓN: SERVICIOS ADICIONALES -->
<section class="seccion-adicionales">

    <div class="adicionales-inner">

        <h2 class="seccion-titulo">Servicios <strong>Adicionales</strong></h2>
        <div class="titulo-linea"></div>

        <div class="adicionales-grid">

            <!-- Card: Drone -->
            <div class="adicional-card adicional-card--dark">
                <h3 class="adicional-card-titulo">Drone</h3>
                <ul class="adicional-lista">
                    <li><span class="check">✔</span> Tomas aéreas de PRE XV + Evento</li>
                </ul>
                <div class="adicional-precio">S/. 350.00</div>
            </div>

            <!-- Card: Horas Adicionales -->
            <div class="adicional-card adicional-card--dark">
                <h3 class="adicional-card-titulo">Horas<br>Adicionales</h3>
                <ul class="adicional-lista adicional-lista--precios">
                    <li>
                        <span><span class="check">✔</span> Fotografía (Por hora)</span>
                        <div class="adicional-precio">S/. 120.00</div>
                    </li>
                    <li>
                        <span><span class="check">✔</span> Video (Por hora)</span>
                        <div class="adicional-precio">S/. 120.00</div>
                    </li>
                </ul>
            </div>

            <!-- Card: Video PRE XV GRATIS -->
            <div class="adicional-card adicional-card--dark">
                <h3 class="adicional-card-titulo">
                    Video PRE XV<br>
                    <span class="gratis-label">GRATIS</span>
                </h3>
                <p class="adicional-por-adquirir">Por adquirir el:</p>
                <ul class="adicional-lista">
                    <li>PAQUETE FOTOGRÁFICO +</li>
                    <li>PAQUETE VIDEO ESTÁNDAR</li>
                </ul>
            </div>

        </div>

    </div>

</section>


<!-- SECCIÓN: FORMAS DE PAGO -->
<section class="seccion-pago">

    <h2 class="seccion-titulo">Formas de Pago</h2>
    <div class="titulo-linea"></div>

    <div class="pago-contenedor">

        <div class="pago-opciones">

            <!-- Opción 01 -->
            <div class="pago-card">
                <h3 class="pago-card-titulo">OPCIÓN 01</h3>
                <ul class="pago-lista">
                    <li><span class="pago-dash">—</span><span><strong>30%</strong> En la Firma de contrato</span></li>
                    <li><span class="pago-dash">—</span><span><strong>70%</strong> En el día del evento</span></li>
                </ul>
            </div>

            <!-- Opción 02 -->
            <div class="pago-card">
                <h3 class="pago-card-titulo">OPCIÓN 02</h3>
                <ul class="pago-lista">
                    <li><span class="pago-dash">—</span><span><strong>50%</strong> En la Firma de contrato</span></li>
                    <li><span class="pago-dash">—</span><span><strong>50%</strong> En el día del evento</span></li>
                </ul>
            </div>

        </div>

        <!-- Imagen con arco -->
        <div class="pago-imagen-wrap">
            <img src="images/servicios/QUINO03.jpeg" alt="Quinceañera" class="pago-imagen">
        </div>

    </div>

    <p class="pago-terminos">Sujeto a Términos y Condiciones</p>

</section>
</div>
   
<!-- SECCION PAREJAS -->
<div id="parejas" class="service-section" style="display: none;">

    <!-- PORTADA -->
    <section style="width: 100%; margin-top: -40px; display: flex; justify-content: center; align-items: center; background-color: #000; padding: 20px 20px 0 20px;">
        <div style="position: relative; width: clamp(320px, 75vw, 1100px); min-width: 320px;">
            <img src='images/servicios/PAREJA_PORTADA.png' alt='Portada Parejas' style="width: 100%; height: auto; display: block; border-radius: 8px;">
            <div style="position: absolute; top: 0; left: 0; width: 80px; height: 100%; background: linear-gradient(to right, #000, transparent); border-radius: 8px 0 0 8px;"></div>
            <div style="position: absolute; top: 0; right: 0; width: 80px; height: 100%; background: linear-gradient(to left, #000, transparent); border-radius: 0 8px 8px 0;"></div>
        </div>
    </section>

    <section style="width: 100%; max-width: 1100px; margin: 0 auto; padding: 80px 20px; font-family: 'Montserrat', sans-serif; background-color: #fff; position: relative; overflow: hidden;">
        
        <div style="position: absolute; top: 35%; left: 0; width: 100%; height: 6px; display: flex; z-index: 1;">
            <div style="flex: 2; background-color: #000;"></div>
            <div style="flex: 1; background-color: #fcdb05;"></div>
        </div>

        <div style="display: flex; gap: 50px; align-items: center; position: relative; z-index: 2;">
            
            <div style="flex: 1;">
                <img src="images/servicios/PAREJA02.jpg" 
                     alt="Sobre Nosotros" 
                     style="width: 100%; height: auto; display: block; border-radius: 2px;">
            </div>

            <div style="flex: 1; padding-left: 20px;">
                <h2 style="font-size: 3.5rem; font-weight: 800; margin: 0 0 30px 0; color: #000; text-align: right;">Sobre Nosotros</h2>
                
                <div style="text-align: left; max-width: 500px; margin-left: auto;">
                    <p style="font-size: 1rem; line-height: 1.6; color: #333; margin-bottom: 20px;">
                        Nos encanta capturar los <strong>momentos</strong> más <strong>especiales</strong> de tu vida, creando recuerdos que duren para siempre. Con un enfoque <strong>profesional</strong> y una mirada <strong>creativa</strong>, buscamos reflejar tu estilo y la esencia de cada celebración de una manera única.
                    </p>
                    <p style="font-size: 1rem; line-height: 1.6; color: #333;">
                        Queremos que tu sesión sea una <strong>experiencia divertida</strong> y <strong>auténtica</strong>, donde te sientas cómodo y disfrutes el momento mientras inmortalizamos recuerdos que realmente cuenten tu historia.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section style="width: 100%; max-width: 1000px; margin: 0 auto; padding: 40px 20px; font-family: 'Montserrat', sans-serif; background-color: #fff;">
    
    <div style="position: relative; width: 100%; margin-bottom: 50px;">
        <div style="width: 100%; overflow: hidden; border-radius: 4px;">
            <img src="images/servicios/PAREJA05.jpg" alt="Portada Parejas" style="width: 100%; height: auto; display: block; transform: scale(1.02);">
        </div>
        
        <div style="position: absolute; bottom: -30px; right: 5%; background-color: #000; color: #fff; padding: 35px; width: 42%; box-sizing: border-box; z-index: 10; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
            <h2 style="font-size: 2rem; font-weight: 800; margin: 0 0 12px 0; text-align: center; line-height: 1.1; letter-spacing: -1px;">Sesiones<br>en pareja</h2>
            <div style="width: 50px; height: 3px; background-color: #fcdb05; margin: 0 auto 20px auto;"></div>
            <p style="font-size: 0.9rem; line-height: 1.6; font-weight: 300; margin: 0; text-align: center; color: #e0e0e0;">
                Celebro tu <strong>amor</strong> con una sesión fotográfica que capture su esencia y complicidad. Ofrecemos paquetes personalizados, desde <strong>sesiones al aire libre</strong> hasta <strong>estudios</strong> con iluminación especial.
            </p>
        </div>
    </div>

    <div style="display: flex; gap: 25px; margin-top: 80px; width: 90%; margin-left: auto; margin-right: auto;">
        
        <div style="flex: 1; border-radius: 4px; overflow: hidden;">
            <img src="images/servicios/PAREJA03.jpg" alt="Pareja Exterior" style="width: 100%; height: 350px; object-fit: cover; display: block;">
        </div>

        <div style="flex: 1; border-radius: 4px; overflow: hidden;">
            <img src="images/servicios/PAREJA04.jpg" alt="Pareja Detalle" style="width: 100%; height: 350px; object-fit: cover; display: block;">
        </div>

    </div>
</section>



<div style="width: 100%; max-width: 1100px; margin: 0 auto; padding: 40px 20px; font-family: 'Montserrat', sans-serif; background-color: #fff; color: #000;">

    <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.5rem; font-weight: 800; margin: 0;">Paquetes de</h2>
        <h2 style="font-size: 2.5rem; font-weight: 800; margin: 0;">Sesiones en Exteriores</h2>
        <div style="width: 60px; height: 4px; background-color: #fcdb05; margin: 10px auto;"></div>
    </div>

    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 80px;">
        
        <div style="border: 1.5px solid #000; padding: 30px 20px; flex: 1; min-width: 280px; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="font-size: 2.2rem; font-weight: 800; margin: 0;">Estándar</h3>
                <div style="background: #000; color: #fff; padding: 5px; font-size: 0.9rem; font-weight: 700; margin: 10px 0;">Nuevas parejas</div>
                <ul style="list-style: none; padding: 0; text-align: left; font-size: 0.9rem; line-height: 1.8; margin: 20px 0;">
                    <li>✔ <b>45min</b> de sesión</li>
                    <li>✔ <b>01</b> Cambio de ropa</li>
                    <li>✔ <b>20</b> Fotos en digital</li>
                    <li>✔ <b>05</b> Fotos impresas (10X15 cm)</li>
                    <li>✔ Material en digital</li>
                </ul>
            </div>
            <div>
                <div style="display: inline-block; background: #fcdb05; padding: 8px 25px; font-weight: 800; font-size: 1.3rem; border-radius: 6px; margin-bottom: 15px;">S/. 200.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Exterior%20Estándar" target="_blank" style="display: block; background-color: #25d366; color: #fff; padding: 12px; font-size: 0.9rem; font-weight: 800; text-decoration: none; border-radius: 6px; text-transform: uppercase;">ME INTERESA ESTE PAQUETE</a>
            </div>
        </div>

        <div style="border: 1.5px solid #000; padding: 30px 20px; flex: 1; min-width: 280px; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="font-size: 2.2rem; font-weight: 800; margin: 0;">Avanzado</h3>
                <div style="background: #000; color: #fff; padding: 5px; font-size: 0.9rem; font-weight: 700; margin: 10px 0;">Ideal para parejas sólidas</div>
                <ul style="list-style: none; padding: 0; text-align: left; font-size: 0.9rem; line-height: 1.8; margin: 20px 0;">
                    <li>✔ <b>01</b> Hora de sesión</li>
                    <li>✔ <b>01</b> Cambio de ropa</li>
                    <li>✔ <b>30</b> Fotos en digital</li>
                    <li>✔ <b>10</b> Fotos impresas (10 X 15 cm)</li>
                    <li>✔ <b>01</b> Foto impresa (20 X 15 cm)</li>
                    <li>✔ Material en digital</li>
                </ul>
            </div>
            <div>
                <div style="display: inline-block; background: #fcdb05; padding: 8px 25px; font-weight: 800; font-size: 1.3rem; border-radius: 6px; margin-bottom: 15px;">S/. 250.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Exterior%20Avanzado" target="_blank" style="display: block; background-color: #25d366; color: #fff; padding: 12px; font-size: 0.9rem; font-weight: 800; text-decoration: none; border-radius: 6px; text-transform: uppercase;">ME INTERESA ESTE PAQUETE</a>
            </div>
        </div>

        <div style="border: 1.5px solid #000; padding: 30px 20px; flex: 1; min-width: 280px; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="font-size: 2.2rem; font-weight: 800; margin: 0;">Premium</h3>
                <div style="background: #000; color: #fff; padding: 5px; font-size: 0.9rem; font-weight: 700; margin: 10px 0;">Detalle de amor</div>
                <ul style="list-style: none; padding: 0; text-align: left; font-size: 0.9rem; line-height: 1.8; margin: 20px 0;">
                    <li>✔ <b>1.5</b> Horas de sesión</li>
                    <li>✔ <b>02</b> Cambios de ropa</li>
                    <li>✔ <b>35</b> Fotos en digital</li>
                    <li>✔ <b>10</b> Fotos impresas (10 X 15 cm)</li>
                    <li>✔ <b>01</b> Cuadro + Foto impresa (15 X 20 cm)</li>
                    <li>✔ Material en digital</li>
                </ul>
            </div>
            <div>
                <div style="display: inline-block; background: #fcdb05; padding: 8px 25px; font-weight: 800; font-size: 1.3rem; border-radius: 6px; margin-bottom: 15px;">S/. 300.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Exterior%20Premium" target="_blank" style="display: block; background-color: #25d366; color: #fff; padding: 12px; font-size: 0.9rem; font-weight: 800; text-decoration: none; border-radius: 6px; text-transform: uppercase;">ME INTERESA ESTE PAQUETE</a>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Seccion Bautizo -->


    <!-- Seccion Bodas -->
    <div id="bodas" class="service-section" style="display:none;">
        <!-- PORTADA -->
        <section class="portada-section" style="margin-top: 30px;">
            <div class="portada-wrapper">
                <img src="images/servicios/Bodas/portada.png" alt="Portada Bodas" class="portada-img">
            </div>
        </section>

        <div class="service-intro" style="text-align:center; margin-bottom: 40px; margin-top: 40px;">
            <div
                style="max-width: 900px; margin: 0 auto; background-color: #ffffff; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">

                <!-- FILA 1: imagen izquierda + caja Sobre Nosotros derecha -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: stretch;">

                    <div style="flex: 1.2; overflow: hidden;">
                        <img src="images/servicios/Bodas/boda1.jpg" alt="Boda"
                            style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>

                    <div
                        style="flex: 1; background: #fff; border: 1px solid #000; padding: 0; display: flex; flex-direction: column;">
                        <div style="display:flex; height: 8px;">
                            <div style="flex:3; background:#000;"></div>
                            <div style="flex:1; background:#edd132;"></div>
                        </div>
                        <div
                            style="padding: 30px 25px; flex-grow:1; display:flex; flex-direction:column; justify-content:center;">
                            <h2 style="font-size:1.8rem; font-weight:900; margin:0 0 15px 0; color:#000; text-align:right;">
                                Sobre Nosotros</h2>
                            <p style="font-size: 0.9rem; line-height: 1.75; text-align: left; margin: 0; color: #333;">
                                Nos encanta capturar los <b>momentos</b> más <b>especiales</b> de tu
                                vida, creando recuerdos que duren para siempre. Con un
                                enfoque <b>profesional</b> y una mirada <b>creativa</b>, buscamos
                                reflejar tu estilo y la esencia de cada celebración de una
                                manera única.<br><br>
                                Queremos que tu sesión sea una <b>experiencia divertida</b> y
                                <b>auténtica</b>, donde te sientas cómodo y disfrutes el momento
                                mientras inmortalizamos recuerdos que realmente cuenten
                                tu historia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FILA 2: Imagen grande full width -->
                <div style="margin-bottom: 15px;">
                    <img src="images/servicios/Bodas/bodasfull.jpg" alt="Baby Shower decoración"
                        style="width: 100%; height: 320px; object-fit: cover; display: block;">
                </div>

                <!-- FILA 2: imagen grande full + caja negra -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: stretch;">

                    <div style="flex: 1.5; overflow: hidden; max-height: 380px;">
                        <img src="images/servicios/Bodas/boda2.jpg" alt="Boda"
                            style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>

                    <div
                        style="flex: 1; background: #000; color: #fff; padding: 30px 20px; text-align: center; display: flex; flex-direction: column; justify-content: center;">
                        <h2 style="margin: 0; font-size: 1.9rem; font-weight: 900; line-height: 1.2;">
                            Sesiones<br>
                            <span style="color: #edd132;">de Boda</span>
                        </h2>
                        <div style="width: 50px; height: 2px; background: #edd132; margin: 18px auto;"></div>
                        <p style="font-size: 0.88rem; line-height: 1.7; text-align: left; margin: 0; color: #e0e0e0;">
                            Celebra tu <b style="color:#fff;">boda</b> con una foto o video único que
                            <b style="color:#fff;">capture</b> cada <b style="color:#fff;">momento especial.</b> Nos
                            aseguramos de que no te pierdas ni un detalle, utilizando equipos de alta gama
                            para grabar tu día de manera auténtica y profesional.
                        </p>
                    </div>

                </div>

                <!-- FILA 3: 2 imágenes -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                    <div style="flex: 1;">
                        <img src="images/servicios/Bodas/boda3.jpg" alt="Boda"
                            style="width: 100%; height: 280px; object-fit: cover; display: block; border-radius: 5px;">
                    </div>
                    <div style="flex: 1;">
                        <img src="images/servicios/Bodas/boda4.jpg" alt="Boda"
                            style="width: 100%; height: 280px; object-fit: cover; display: block; border-radius: 5px;">
                    </div>
                </div>

                <!-- FILA 4: 2 imágenes -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                    <div style="flex: 1;">
                        <img src="images/servicios/Bodas/boda5.jpg" alt="Boda"
                            style="width: 100%; height: 280px; object-fit: cover; display: block; border-radius: 5px;">
                    </div>
                    <div style="flex: 1;">
                        <img src="images/servicios/Bodas/boda6.jpg" alt="Boda"
                            style="width: 100%; height: 280px; object-fit: cover; display: block; border-radius: 5px;">
                    </div>
                </div>

                <!-- FILA 5: 2 imágenes -->
                <div style="display: flex; gap: 15px;">
                    <div style="flex: 1;">
                        <img src="images/servicios/Bodas/boda7.jpg" alt="Boda"
                            style="width: 100%; height: 280px; object-fit: cover; display: block; border-radius: 5px;">
                    </div>
                    <div style="flex: 1;">
                        <img src="images/servicios/Bodas/boda8.jpg" alt="Boda"
                            style="width: 100%; height: 280px; object-fit: cover; display: block; border-radius: 5px;">
                    </div>
                </div>

            </div>
        </div>

        <!-- ===== SESIONES PRE-BODA ===== -->
        <div class="category-header" style="text-align:center; margin-bottom: 40px;">
            <h3
                style="color: #edd132; font-weight: 800; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px;">
                SESIONES PRE-BODA</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto; border-radius: 10px;"></div>

            <section id="tarifario-fotos-transparente" style="padding: 30px 10px;">
                <div class="contenedor-cards">

                    <article class="card-paquete">
                        <h2>Pre Boda-Digital</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Fotógrafo</li>
                            <li>01 Asistente de Fotografía</li>
                            <li>02 Horas de sesión</li>
                            <li>30 Fotos en digital</li>
                            <li>05 Fotos impresas (10X15 cm)</li>
                            <li>Entrega digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 300.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Pre%20Boda-Digital"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Pre Boda-Recuerdo</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Fotógrafo</li>
                            <li>01 Asistente de Fotografía</li>
                            <li>02 Horas de sesión</li>
                            <li>50 Fotos en digital</li>
                            <li>20 Fotos impresas (10X15 cm)</li>
                            <li>01 Cuadro de firmas + Foto impresa (40X30 cm)</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 480.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Pre%20Boda-Recuerdo"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                </div>
            </section>
        </div>

        <!-- GALERÍA PRE-BODA -->
        <div style="max-width: 900px; margin: 35px auto; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">
            <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Bodas/boda9.jpg" alt="Boda"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Bodas/boda10.jpg" alt="Boda"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>
            <div style="display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Bodas/boda11.jpg" alt="Boda"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Bodas/boda12.jpg" alt="Boda"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>
        </div>

        <!-- ===== PAQUETE FOTOGRÁFICO ===== -->
        <div class="category-header" style="text-align:center; margin: 80px 0 40px 0;">
            <h3
                style="color: #edd132; font-weight: 800; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px;">
                PAQUETE FOTOGRÁFICO</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto; border-radius: 10px;"></div>

            <section id="tarifario-fotos-transparente" style="padding: 30px 10px;">

                <div style="display: flex; gap: 25px; max-width: 900px; margin: 0 auto; align-items: stretch;">

                    <!-- COLUMNA IZQUIERDA: Básico + Premium -->
                    <div style="flex: 1; display: flex; flex-direction: column; gap: 25px;">

                        <article class="card-paquete">
                            <h2>Básico-Digital</h2>
                            <div class="badge-negro">Ideal para Bodas Pequeñas</div>
                            <ul class="lista-items">
                                <li>01 Fotógrafo</li>
                                <li>01 Asistente de Fotografía</li>
                                <li>04 Horas de cobertura</li>
                                <li>120 Fotos en digital (previa edición)</li>
                                <li>20 Fotos impresas (10X15 cm)</li>
                                <li>Entrega digital</li>
                            </ul>
                            <div class="footer-card">
                                <div class="precio">S/. 450.00</div>
                                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Fotográfico%20Básico-Digital%20de%20Bodas"
                                    class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                            </div>
                        </article>

                        <article class="card-paquete" style="flex-grow: 1;">
                            <h2>Premium</h2>
                            <div class="badge-vacio"></div>
                            <ul class="lista-items">
                                <li>SESIÓN PRE BODA</li>
                                <li>08 Horas de cobertura (día de la boda)</li>
                                <li>01 Fotógrafo</li>
                                <li>01 Asistente de Fotografía</li>
                                <li>01 Cuadro de firmas + Foto (parante como préstamo)</li>
                                <li>01 USB de 16GB con contenido de:</li>
                                <li class="item-guion">Sesión Pre-Boda: 50 Fotos digitales</li>
                                <li class="item-guion">Boda: 400 Fotos digitales aprox.</li>
                            </ul>
                            <div class="footer-card">
                                <div class="precio">S/. 1,300.00</div>
                                <div
                                    style="margin-bottom: 15px; border: 1px solid #ddd; border-radius: 6px; padding: 12px; text-align:center;">
                                    <span style="font-size: 1.2rem; font-weight: 900;">+</span><br>
                                    <span style="font-size: 0.82rem; color: #555;">01 Photobook en biocuero (20X25 cm) (20
                                        pág.)</span><br>
                                    <div class="precio" style="margin: 10px auto 0; display:inline-block;">S/. 1,600.00
                                    </div>
                                </div>
                                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Fotográfico%20Premium%20de%20Bodas"
                                    class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                            </div>
                        </article>

                        <!-- Nota traslado -->
                        <div style="background: #000; color: #fff; padding: 18px 25px; text-align: center;">
                            <p
                                style="margin: 0; font-size: 0.9rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;">
                                INCLUYE TRASLADO DENTRO DE CHINCHA
                            </p>
                        </div>

                    </div>

                    <!-- COLUMNA DERECHA: Estándar + imagen + Full -->
                    <div style="flex: 1; display: flex; flex-direction: column; gap: 25px;">

                        <article class="card-paquete">
                            <h2>Estándar Digital</h2>
                            <div class="badge-vacio"></div>
                            <ul class="lista-items">
                                <li>01 Fotógrafo</li>
                                <li>01 Asistente de Fotografía</li>
                                <li>06 Horas de cobertura</li>
                                <li>300 Fotos en digital</li>
                            </ul>
                            <div class="footer-card">
                                <div class="precio">S/. 750.00</div>
                                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Fotográfico%20Estándar%20Digital%20de%20Bodas"
                                    class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                            </div>
                        </article>

                        <!-- Imagen decorativa -->
                        <div style="width: 350px; height: 200px; overflow: hidden;">
                            <img src="images/servicios/Bodas/boda_foto_premium.jpg" alt="Boda"
                                style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        </div>

                        <article class="card-paquete" style="flex-grow: 1;">
                            <h2>Full</h2>
                            <div class="badge-vacio"></div>
                            <ul class="lista-items">
                                <li>SESIÓN PRE BODA</li>
                                <li>08 Horas de cobertura (día de la boda)</li>
                                <li>02 Fotógrafos</li>
                                <li>01 Asistente de Fotografía</li>
                                <li>30 Fotos impresas (10X15 cm)</li>
                                <li>01 Cuadro de firmas + Foto (parante como préstamo)</li>
                                <li>01 USB de 16GB con contenido de:</li>
                                <li class="item-guion">Sesión Pre-Boda: 50 Fotos digitales</li>
                                <li class="item-guion">Boda: 700 Fotos digitales aprox.</li>
                                <li>01 Photobook en biocuero (20X25 cm) (20 pág.)</li>
                            </ul>
                            <div class="footer-card">
                                <div class="precio">S/. 1,800.00</div>
                                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Fotográfico%20Full%20de%20Bodas"
                                    class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                            </div>
                        </article>

                    </div>

                </div>
            </section>
        </div>

        <!-- GALERÍA FOTOGRÁFICA -->
        <div style="max-width: 1100px; margin: 35px auto; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">
            <!-- Fila 3 columnas -->
            <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda13.jpg" alt="Boda"
                        style="width:100%; height:200px; object-fit:cover; display:block; border-radius:5px;"></div>
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda14.jpg" alt="Boda"
                        style="width:100%; height:200px; object-fit:cover; display:block; border-radius:5px;"></div>
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda15.jpg" alt="Boda"
                        style="width:100%; height:200px; object-fit:cover; display:block; border-radius:5px;"></div>
            </div>
            <!-- Fila 2 columnas -->
            <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda16.jpg" alt="Boda"
                        style="width:100%; height:260px; object-fit:cover; display:block; border-radius:5px;"></div>
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda17.jpg" alt="Boda"
                        style="width:100%; height:260px; object-fit:cover; display:block; border-radius:5px;"></div>
            </div>
            <!-- Fila 4 columnas -->
            <div style="display: flex; gap: 10px;">
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda18.jpg" alt="Boda"
                        style="width:100%; height:180px; object-fit:cover; display:block; border-radius:5px;"></div>
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda19.jpg" alt="Boda"
                        style="width:100%; height:180px; object-fit:cover; display:block; border-radius:5px;"></div>
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda20.jpg" alt="Boda"
                        style="width:100%; height:180px; object-fit:cover; display:block; border-radius:5px;"></div>
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda21.jpg" alt="Boda"
                        style="width:100%; height:180px; object-fit:cover; display:block; border-radius:5px;"></div>
            </div>
        </div>

        <!-- ===== PAQUETE VIDEOGRÁFICO ===== -->
        <div class="category-header" style="text-align:center; margin: 80px 0 40px 0;">
            <h3
                style="color: #edd132; font-weight: 800; font-size: 2.5rem; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px;">
                PAQUETE VIDEOGRÁFICO</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto; border-radius: 10px;"></div>

            <section id="tarifario-fotos-transparente" style="padding: 30px 10px;">
                <div class="contenedor-cards">

                    <article class="card-paquete">
                        <h2>Básico-Digital</h2>
                        <div class="badge-negro">Ideal para Bodas Pequeñas</div>
                        <ul class="lista-items">
                            <li>01 Videógrafo</li>
                            <li>04 Horas de cobertura</li>
                            <li>01 Video extendido de toda la boda (de 30 min aprox.)</li>
                            <li>01 Video Reel resumen de la boda (de 1 a 3 min aprox.)</li>
                            <li>Entrega en digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 600.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Videográfico%20Básico-Digital%20de%20Bodas"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Estándar</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Videógrafo</li>
                            <li>08 Horas de cobertura</li>
                            <li>01 Video extendido de toda la boda (de 01 hora aprox.)</li>
                            <li>01 Video Reel resumen de la boda (de 1 a 3 min aprox.)</li>
                            <li>01 USB personalizado de 16GB con cajita (Madera Nogal)</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 1,200.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Videográfico%20Estándar%20de%20Bodas"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Full</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Video PRE BODA</li>
                            <li>02 Videógrafos</li>
                            <li>08 Horas de cobertura</li>
                            <li>01 Video extendido de toda la boda (de 01 hora 30 min aprox.)</li>
                            <li>01 Video Reel resumen de la boda (de 1 a 3 min aprox.)</li>
                            <li>01 Drone</li>
                            <li>01 USB personalizado de 16GB con cajita (Madera Nogal)</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 1,500.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Videográfico%20Full%20de%20Bodas"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                </div>
            </section>
        </div>

        <!-- GALERÍA VIDEO -->
        <div style="max-width: 900px; margin: 35px auto; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">
            <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda22.jpg" alt="Boda"
                        style="width:100%; height:260px; object-fit:cover; display:block; border-radius:5px;"></div>
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda23.jpg" alt="Boda"
                        style="width:100%; height:260px; object-fit:cover; display:block; border-radius:5px;"></div>
            </div>
            <div style="display: flex; gap: 15px;">
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda24.jpg" alt="Boda"
                        style="width:100%; height:260px; object-fit:cover; display:block; border-radius:5px;"></div>
                <div style="flex: 1;"><img src="images/servicios/Bodas/boda25.jpg" alt="Boda"
                        style="width:100%; height:260px; object-fit:cover; display:block; border-radius:5px;"></div>
            </div>
        </div>

        <!-- ===== SERVICIOS ADICIONALES ===== -->
        <div style="max-width: 1100px; margin: 50px auto; padding: 20px; font-family: 'Helvetica', Arial, sans-serif;">

            <h3
                style="text-align:center; color: #333; margin-bottom: 10px; font-size: 1.8rem; text-transform: uppercase; letter-spacing: 1px;">
                Servicios</h3>
            <h3
                style="text-align:center; color: #333; margin-bottom: 40px; font-size: 2.2rem; font-weight: 900; text-transform: uppercase; letter-spacing: 1px; margin-top:0;">
                Adicionales</h3>
            <div style="width: 70px; height: 4px; background: #edd132; margin: -30px auto 40px;"></div>

            <div style="display: flex; align-items: stretch; justify-content: center; gap: 20px; flex-wrap: wrap;">

                <!-- Drone -->
                <div
                    style="flex: 1; min-width: 280px; background: #1a1a1a; color: #fff; padding: 30px 25px; border-radius: 0; text-align: center; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
                    <h4 style="font-size: 1.5rem; font-weight: 900; margin-bottom: 20px; color: #fff;">Drone</h4>
                    <ul style="list-style:none; padding:0; margin:0 0 25px 0; text-align:left;">
                        <li style="margin-bottom:8px; font-size:0.9rem; display:flex; align-items:center; gap:8px;"><span
                                style="color:#edd132;">✔</span> Tomas de salida de casa</li>
                        <li style="margin-bottom:8px; font-size:0.9rem; display:flex; align-items:center; gap:8px;"><span
                                style="color:#edd132;">✔</span> Ingreso y salida de la iglesia</li>
                        <li style="font-size:0.9rem; display:flex; align-items:center; gap:8px;"><span
                                style="color:#edd132;">✔</span> Recepción</li>
                    </ul>
                    <div class="precio" style="display:inline-block;">S/. 350.00</div>
                </div>

                <!-- Horas Adicionales -->
                <div
                    style="flex: 1; min-width: 280px; background: #1a1a1a; color: #fff; padding: 30px 25px; border-radius: 0; text-align: center; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
                    <h4 style="font-size: 1.5rem; font-weight: 900; margin-bottom: 20px; color: #fff;">Horas<br>Adicionales
                    </h4>
                    <div style="margin-bottom: 20px;">
                        <p
                            style="font-size:0.85rem; color:#bbb; margin-bottom:8px; display:flex; align-items:center; gap:8px;">
                            <span style="color:#edd132;">✔</span> Fotografía (Por hora)
                        </p>
                        <div class="precio" style="display:inline-block;">S/. 120.00</div>
                    </div>
                    <div>
                        <p
                            style="font-size:0.85rem; color:#bbb; margin-bottom:8px; display:flex; align-items:center; gap:8px;">
                            <span style="color:#edd132;">✔</span> Video (Por hora)
                        </p>
                        <div class="precio" style="display:inline-block;">S/. 120.00</div>
                    </div>
                </div>

                <!-- Descuento 10% -->
                <div
                    style="flex: 1; min-width: 280px; background: #1a1a1a; color: #fff; padding: 30px 25px; border-radius: 0; text-align: center; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
                    <h4 style="font-size: 1.5rem; font-weight: 900; margin-bottom: 5px; color: #fff;">Descuento del</h4>
                    <h4 style="font-size: 2rem; font-weight: 900; margin-bottom: 20px; color: #edd132;">10%</h4>
                    <p style="font-size:0.85rem; color:#bbb; margin-bottom:15px;">Por adquirir el:</p>
                    <div style="text-align:center; font-size:0.85rem; font-weight:700; line-height:1.8;">
                        PAQUETE FOTOGRÁFICO FULL<br>
                        +<br>
                        PAQUETE VIDEOGRÁFICO ESTÁNDAR
                    </div>
                </div>

            </div>
        </div>

        <!-- FOOTER CON GALERÍA -->
        <div class="service-footer" style="text-align:center; margin-top: 20px; padding: 20px 0 0 0; background: #fafafa;">
            <p style="font-size: 1.2rem; color: #444;">Inmortalizamos cada momento de tu boda con fotografías y videos de
                <b>alta calidad</b>.
            </p>
            <p
                style="margin-top: 15px; font-weight: bold; color: #edd132; font-size: 1.4rem; text-transform: uppercase; letter-spacing: 1px;">
                ¡Haz que el amor de tu boda dure para siempre!</p>
            <section class="galeria-seccion" style="padding: 25px">
                <div class="contenedor-imagenes">
                    <div class="cuadro-imagen">
                        <img src="images/servicios/Bodas/footer1.jpg" alt="Boda galería 1">
                    </div>
                    <div class="cuadro-imagen">
                        <img src="images/servicios/Bodas/footer2.jpg" alt="Boda galería 2">
                    </div>
                    <div class="cuadro-imagen">
                        <img src="images/servicios/Bodas/footer3.jpg" alt="Boda galería 3">
                    </div>
                </div>
            </section>
        </div>

    </div>

    <!-- Seccion Sesion Infantil -->
    <div id="infantil" class="service-section" style="display:none;">

        <!-- PORTADA -->
        <section class="portada-section" style="margin-top: 40px;">
            <div class="portada-wrapper">
                <img src="images/servicios/Sesiones Infantiles/portada.png" alt="Portada Sesiones Infantiles"
                    class="portada-img">
            </div>
        </section>

        <!-- INTRO: imagen izq + Sobre Nosotros der -->
        <div class="service-intro" style="text-align:center; margin-bottom: 40px; margin-top: 40px;">
            <div
                style="max-width: 900px; margin: 0 auto; background-color: #ffffff; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">

                <!-- FILA 1: imagen izquierda + caja Sobre Nosotros derecha -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px; align-items: stretch;">

                    <div style="flex: 1.2; overflow: hidden;">
                        <img src="images/servicios/Sesiones Infantiles/infantil1.jpg" alt="Sesión Infantil"
                            style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>

                    <div
                        style="flex: 1; background: #fff; border: 1px solid #000; padding: 0; display: flex; flex-direction: column;">
                        <div style="display:flex; height: 8px;">
                            <div style="flex:3; background:#000;"></div>
                            <div style="flex:1; background:#edd132;"></div>
                        </div>
                        <div
                            style="padding: 30px 25px; flex-grow:1; display:flex; flex-direction:column; justify-content:center;">
                            <h2 style="font-size:1.8rem; font-weight:900; margin:0 0 15px 0; color:#000; text-align:right;">
                                Sobre Nosotros</h2>
                            <p style="font-size: 0.9rem; line-height: 1.75; text-align: left; margin: 0; color: #333;">
                                Nos encanta capturar los <b>momentos</b> más <b>especiales</b> de tu
                                vida, creando recuerdos que duren para siempre. Con un
                                enfoque <b>profesional</b> y una mirada <b>creativa</b>, buscamos
                                reflejar tu estilo y la esencia de cada celebración de una
                                manera única.<br><br>
                                Queremos que tu sesión sea una <b>experiencia divertida</b> y
                                <b>auténtica</b>, donde te sientas cómodo y disfrutes el momento
                                mientras inmortalizamos recuerdos que realmente cuenten
                                tu historia.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- FILA 2: Imagen grande full width -->
                <div style="margin-bottom: 15px;">
                    <img src="images/servicios/Sesiones Infantiles/infantilfull.jpg" alt="Baby Shower decoración"
                        style="width: 100%; height: 320px; object-fit: cover; display: block;">
                </div>

                <!-- FILA 2: imagen grande + caja negra "Sesiones Infantiles" -->
                <div style="display: flex; gap: 0; margin-bottom: 15px; align-items: stretch;">

                    <div style="flex: 1.5; overflow: hidden;">
                        <img src="images/servicios/Sesiones Infantiles/infantil2.jpg" alt="Sesión Infantil"
                            style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>

                    <div
                        style="flex: 1; background: #000; color: #fff; padding: 30px 20px; text-align: center; display: flex; flex-direction: column; justify-content: center;">
                        <h2 style="margin: 0; font-size: 1.9rem; font-weight: 900; line-height: 1.2;">
                            Sesiones<br>
                            <span style="color: #edd132;">Infantiles</span>
                        </h2>
                        <div style="width: 50px; height: 2px; background: #edd132; margin: 18px auto;"></div>
                        <p style="font-size: 0.88rem; line-height: 1.7; text-align: left; margin: 0; color: #e0e0e0;">
                            Capturamos cada sonrisa, risa y <b style="color:#fff;">momento
                                especial</b> con fotos de alta calidad. Con
                            nuestro equipo profesional, nos aseguramos de inmortalizar momentos mágicos,
                            para que puedas vivirlo una y otra vez.
                        </p>
                    </div>

                </div>

                <!-- GALERÍA 2 columnas -->
                <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                    <div style="flex: 1.2;">
                        <img src="images/servicios/Sesiones Infantiles/infantil3.jpg" alt="Sesión Infantil"
                            style="width: 100%; height: 280px; object-fit: cover; display: block; border-radius: 5px;">
                    </div>
                    <div style="flex: 0.8; display: flex; flex-direction: column; gap: 8px;">
                        <img src="images/servicios/Sesiones Infantiles/infantil4.jpg" alt="Sesión Infantil"
                            style="width: 100%; height: 136px; object-fit: cover; object-position: center 20%; display: block; border-radius: 5px;">
                        <img src="images/servicios/Sesiones Infantiles/infantil5.jpg" alt="Sesión Infantil"
                            style="width: 100%; height: 136px; object-fit: cover; object-position: center 20%; display: block; border-radius: 5px;">
                    </div>
                </div>

                <!-- GALERÍA 2 columnas fila 2 -->
                <div style="display: flex; gap: 15px;">
                    <div style="flex: 1;">
                        <img src="images/servicios/Sesiones Infantiles/infantil6.jpg" alt="Sesión Infantil"
                            style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                    </div>
                    <div style="flex: 1;">
                        <!-- imagen con arco redondeado arriba -->
                        <div
                            style="overflow: hidden; border-radius: 50% 50% 0 0 / 40% 40% 0 0; width: 100%; height: 260px;">
                            <img src="images/servicios/Sesiones Infantiles/infantil7.jpg" alt="Sesión Infantil"
                                style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ===== PAQUETES SESIONES EN EXTERIORES ===== -->
        <div class="category-header" style="text-align:center; margin-bottom: 40px;">
            <h3 style="font-weight: 400; font-size: 1.8rem; letter-spacing: 1px; margin-bottom: 0; color:#333;">
                Paquetes de</h3>
            <h3 style="font-weight: 900; font-size: 2.3rem; letter-spacing: 1px; margin-top: 0; color:#000;">
                Sesiones en Exteriores</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto 10px; border-radius: 10px;"></div>

            <section id="tarifario-fotos-transparente" style="padding: 20px 10px;">
                <div class="contenedor-cards">

                    <article class="card-paquete">
                        <h2>Estándar</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>45min de sesión</li>
                            <li>01 Cambio de ropa</li>
                            <li>20 Fotos en digital</li>
                            <li>05 Fotos impresas (10X15 cm)</li>
                            <li>Material en digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 200.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estándar%20de%20Sesiones%20Infantiles%20en%20Exteriores"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Avanzado</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Hora de sesión</li>
                            <li>01 Cambio de ropa</li>
                            <li>30 Fotos en digital</li>
                            <li>10 Fotos impresas (10 X 15 cm)</li>
                            <li>01 Foto impresa (20 X 15 cm)</li>
                            <li>Material en digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 250.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Avanzado%20de%20Sesiones%20Infantiles%20en%20Exteriores"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Premium</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>1.5 Horas de sesión</li>
                            <li>02 Cambios de ropa</li>
                            <li>35 Fotos en digital</li>
                            <li>10 Fotos impresas (10 X 15 cm)</li>
                            <li>01 Cuadro + Foto impresa (15 X 20 cm)</li>
                            <li>Material en digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 300.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Premium%20de%20Sesiones%20Infantiles%20en%20Exteriores"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                </div>
            </section>
        </div>

        <!-- GALERÍA entre secciones -->
        <div style="max-width: 900px; margin: 10px auto 50px; font-family: 'Helvetica', Arial, sans-serif; padding: 10px;">
            <div style="display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Sesiones Infantiles/infantil8.jpg" alt="Sesión Infantil"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Sesiones Infantiles/infantil9.jpg" alt="Sesión Infantil"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>
            <div style="display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <img src="images/servicios/Sesiones Infantiles/infantil10.jpg" alt="Sesión Infantil"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
                <div style="flex: 1;">
                    <img src="images/servicios/Sesiones Infantiles/infantil11.jpg" alt="Sesión Infantil"
                        style="width: 100%; height: 260px; object-fit: cover; display: block; border-radius: 5px;">
                </div>
            </div>
        </div>

        <!-- ===== PAQUETES SESIONES DE ESTUDIO ===== -->
        <div class="category-header" style="text-align:center; margin-bottom: 20px;">
            <h3 style="font-weight: 400; font-size: 1.8rem; letter-spacing: 1px; margin-bottom: 0; color:#333;">
                Paquetes de</h3>
            <h3 style="font-weight: 900; font-size: 2.3rem; letter-spacing: 1px; margin-top: 0; color:#000;">
                Sesiones de Estudio</h3>
            <div style="width: 80px; height: 4px; background: #edd132; margin: 0 auto 10px; border-radius: 10px;"></div>

            <section id="tarifario-fotos-transparente" style="padding: 20px 10px;">
                <div class="contenedor-cards">

                    <article class="card-paquete">
                        <h2>Estándar</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Hora de sesión</li>
                            <li>01 Cambio de ropa</li>
                            <li>10 Fotos en digital</li>
                            <li>05 Fotos impresas (10X15 cm)</li>
                            <li>Material en digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 250.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estándar%20de%20Sesiones%20Infantiles%20de%20Estudio"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Avanzado</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Hora de sesión</li>
                            <li>01 Cambio de ropa</li>
                            <li>15 Fotos en digital</li>
                            <li>10 Fotos impresas (10 X 15 cm)</li>
                            <li>02 Fotos impresas (20 X 15 cm)</li>
                            <li>Material en digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 300.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Avanzado%20de%20Sesiones%20Infantiles%20de%20Estudio"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                    <article class="card-paquete">
                        <h2>Premium</h2>
                        <div class="badge-vacio"></div>
                        <ul class="lista-items">
                            <li>01 Hora de sesión</li>
                            <li>02 Cambios de ropa</li>
                            <li>25 Fotos en digital</li>
                            <li>15 Fotos impresas (10 X 15 cm)</li>
                            <li>01 Foto impresa + Cuadro (20 X 15 cm)</li>
                            <li>Material en digital</li>
                        </ul>
                        <div class="footer-card">
                            <div class="precio">S/. 350.00</div>
                            <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Premium%20de%20Sesiones%20Infantiles%20de%20Estudio"
                                class="btn-wsp" target="_blank">ME INTERESA ESTE PAQUETE</a>
                        </div>
                    </article>

                </div>
            </section>
        </div>

        <!-- FOOTER CON GALERÍA -->
        <div class="service-footer" style="text-align:center; margin-top: 40px; padding: 40px 0; background: #fafafa;">
            <p style="font-size: 1.2rem; color: #444;">Inmortalizamos los momentos más mágicos de tu pequeño con fotografías
                de <b>alta calidad</b>.</p>
            <p
                style="margin-top: 15px; font-weight: bold; color: #edd132; font-size: 1.4rem; text-transform: uppercase; letter-spacing: 1px;">
                ¡Momentos mágicos, recuerdos para siempre!</p>
        </div>
    </div>

=======
    <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.5rem; font-weight: 800; margin: 0;">Paquetes de</h2>
        <h2 style="font-size: 2.5rem; font-weight: 800; margin: 0;">Sesiones de Estudio</h2>
        <div style="width: 60px; height: 4px; background-color: #fcdb05; margin: 10px auto;"></div>
    </div>

    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 50px;">
        
        <div style="border: 1.5px solid #000; padding: 30px 20px; flex: 1; min-width: 280px; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="font-size: 2.2rem; font-weight: 800; margin: 0;">Estándar</h3>
                <div style="background: #000; color: #fff; padding: 5px; font-size: 0.9rem; font-weight: 700; margin: 10px 0;">Nuevas parejas</div>
                <ul style="list-style: none; padding: 0; text-align: left; font-size: 0.9rem; line-height: 1.8; margin: 20px 0;">
                    <li>✔ <b>01</b> Hora de sesión</li>
                    <li>✔ <b>01</b> Cambio de ropa</li>
                    <li>✔ <b>10</b> Fotos en digital</li>
                    <li>✔ <b>05</b> Fotos impresas (10X15 cm)</li>
                    <li>✔ Material en digital</li>
                </ul>
            </div>
            <div>
                <div style="display: inline-block; background: #fcdb05; padding: 8px 25px; font-weight: 800; font-size: 1.3rem; border-radius: 6px; margin-bottom: 15px;">S/. 250.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estudio%20Estándar" target="_blank" style="display: block; background-color: #25d366; color: #fff; padding: 12px; font-size: 0.9rem; font-weight: 800; text-decoration: none; border-radius: 6px; text-transform: uppercase;">ME INTERESA ESTE PAQUETE</a>
            </div>
        </div>

        <div style="border: 1.5px solid #000; padding: 30px 20px; flex: 1; min-width: 280px; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="font-size: 2.2rem; font-weight: 800; margin: 0;">Avanzado</h3>
                <div style="background: #000; color: #fff; padding: 5px; font-size: 0.9rem; font-weight: 700; margin: 10px 0;">Ideal para parejas sólidas</div>
                <ul style="list-style: none; padding: 0; text-align: left; font-size: 0.9rem; line-height: 1.8; margin: 20px 0;">
                    <li>✔ <b>01</b> Hora de sesión</li>
                    <li>✔ <b>01</b> Cambio de ropa</li>
                    <li>✔ <b>15</b> Fotos en digital</li>
                    <li>✔ <b>10</b> Fotos impresas (10 X 15 cm)</li>
                    <li>✔ <b>02</b> Fotos impresas (20 X 15 cm)</li>
                    <li>✔ Material en digital</li>
                </ul>
            </div>
            <div>
                <div style="display: inline-block; background: #fcdb05; padding: 8px 25px; font-weight: 800; font-size: 1.3rem; border-radius: 6px; margin-bottom: 15px;">S/. 300.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estudio%20Avanzado" target="_blank" style="display: block; background-color: #25d366; color: #fff; padding: 12px; font-size: 0.9rem; font-weight: 800; text-decoration: none; border-radius: 6px; text-transform: uppercase;">ME INTERESA ESTE PAQUETE</a>
            </div>
        </div>

        <div style="border: 1.5px solid #000; padding: 30px 20px; flex: 1; min-width: 280px; text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
                <h3 style="font-size: 2.2rem; font-weight: 800; margin: 0;">Premium</h3>
                <div style="background: #000; color: #fff; padding: 5px; font-size: 0.9rem; font-weight: 700; margin: 10px 0;">Detalle de amor</div>
                <ul style="list-style: none; padding: 0; text-align: left; font-size: 0.9rem; line-height: 1.8; margin: 20px 0;">
                    <li>✔ <b>01</b> Hora de sesión</li>
                    <li>✔ <b>02</b> Cambios de ropa</li>
                    <li>✔ <b>25</b> Fotos en digital</li>
                    <li>✔ <b>15</b> Fotos impresas (10 X 15 cm)</li>
                    <li>✔ <b>01</b> Foto impresa + Cuadro (20 X 15 cm)</li>
                    <li>✔ Material en digital</li>
                </ul>
            </div>
            <div>
                <div style="display: inline-block; background: #fcdb05; padding: 8px 25px; font-weight: 800; font-size: 1.3rem; border-radius: 6px; margin-bottom: 15px;">S/. 350.00</div>
                <a href="https://wa.me/51931826325?text=Hola,%20me%20interesa%20el%20Paquete%20Estudio%20Premium" target="_blank" style="display: block; background-color: #25d366; color: #fff; padding: 12px; font-size: 0.9rem; font-weight: 800; text-decoration: none; border-radius: 6px; text-transform: uppercase;">ME INTERESA ESTE PAQUETE</a>
            </div>
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
>>>>>>> e085e48826d082d0043f04fec025344a4f7e270d
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