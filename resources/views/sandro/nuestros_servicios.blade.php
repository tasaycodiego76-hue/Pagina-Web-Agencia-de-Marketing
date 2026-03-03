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

    <!-- aquí va el contenido de parejas -->

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