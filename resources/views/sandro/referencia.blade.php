@extends('layout.app')

@section('titulo', 'referencia')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sandro/referencias.css') }}">
@endpush

@section('contenido')

    <section id="referencia" class="reference">
        <h2>Referencias</h2>
        <div class="reference-carousel">
            <div class="reference-track" id="track">
                <!-- Aquí duplicamos las 6 referencias para el scroll infinito -->
                <div class="reference-item">
                    <img src="images/referencia/descarga.jfif" alt="Cliente 1" />
                    <p>"Las fotos de nuestra boda fueron increíbles. David capturó cada momento con gran sensibilidad. No
                        solo se trató de tomar fotos, sino de inmortalizar sentimientos que hoy volvemos a vivir al ver cada
                        imagen."</p>
                    <p><strong>Shawn Beltran</strong></p>
                    <p>Dueño de Negocio</p>
                </div>
                <div class="reference-item">
                    <img src="images/referencia/cliente2.jpg" alt="Cliente 2" />
                    <p>"El mejor servicio de fotografía que hemos tenido. Reflejaron cada momento con emoción. El equipo fue
                        amable, puntual y siempre atentos a los detalles más importantes de nuestro evento."</p>
                    <p><strong>Laura Hernandez</strong></p>
                    <p>Planificadora de Eventos</p>
                </div>
                <div class="reference-item">
                    <img src="images/referencia/images.jfif" alt="Cliente 3" />
                    <p>"Nuestra sesión de preboda fue mágica. Capturaron nuestra esencia en cada imagen. Nos sentimos muy
                        cómodos durante toda la sesión y el resultado final fue simplemente espectacular."</p>
                    <p><strong>Sofia Torres</strong></p>
                    <p>Cliente</p>
                </div>
                <div class="reference-item">
                    <img src="{{ asset('images/referencia/199104012-young-and-handsome-bearded-man-wearing-white-t-shirt.jpg') }}"
                        alt="Cliente 4" />
                    <p>"Las fotos del bautizo de mi hijo fueron hermosas. Cada sonrisa fue capturada a la perfección. Fue
                        una experiencia muy emotiva y ahora tenemos recuerdos imborrables gracias a su gran trabajo."</p>
                    <p><strong>Juan Pérez</strong></p>
                    <p>Papá Feliz</p>
                </div>
                <div class="reference-item">
                    <img src="{{ asset('images/referencia/images (1).jfif') }}" alt="Cliente 5" />
                    <p>"Contratarlos fue lo mejor que hicimos para nuestra empresa. Profesionalismo y creatividad. Las
                        imágenes que entregaron superaron nuestras expectativas y fortalecieron nuestra imagen corporativa."
                    </p>
                    <p><strong>Steven Gómez</strong></p>
                    <p>CEO de StartUp</p>
                </div>
                <div class="reference-item">
                    <img src="{{ asset('images/referencia/istockphoto-1090878494-612x612.jpg') }}" alt="Cliente 6" />
                    <p>"Las fotos de mi cumpleaños fueron maravillosas. Cada detalle quedó inmortalizado. Fue como revivir
                        cada instante lleno de alegría y diversión. Gracias por hacerlo tan especial."</p>
                    <p><strong>Luis Ramírez</strong></p>
                    <p>Cliente</p>
                </div>


                <!-- Duplicado para hacer loop infinito -->
                <div class="reference-item">
                    <img src="images/referencia/descarga.jfif" alt="Cliente 1" />
                    <p>"Las fotos de nuestra boda fueron increíbles. David capturó cada momento con gran sensibilidad. No
                        solo se trató de tomar fotos, sino de inmortalizar sentimientos que hoy volvemos a vivir al ver cada
                        imagen."</p>
                    <p><strong>Shawn Beltran</strong></p>
                    <p>Dueño de Negocio</p>
                </div>
                <div class="reference-item">
                    <img src="images/descarga(1).jfif" alt="Cliente 2" />
                    <p>"El mejor servicio de fotografía que hemos tenido. Reflejaron cada momento con emoción. El equipo fue
                        amable, puntual y siempre atentos a los detalles más importantes de nuestro evento."</p>
                    <p><strong>Laura Hernandez</strong></p>
                    <p>Planificadora de Eventos</p>
                </div>
                <div class="reference-item">
                    <img src="{{ asset('images/referencia/images.jfif') }}" alt="Cliente 3" />
                    <p>"Nuestra sesión de preboda fue mágica. Capturaron nuestra esencia en cada imagen. Nos sentimos muy
                        cómodos durante toda la sesión y el resultado final fue simplemente espectacular."</p>
                    <p><strong>Sofia Torres</strong></p>
                    <p>Cliente</p>
                </div>
                <div class="reference-item">
                    <img src="{{ asset('images/referencia/199104012-young-and-handsome-bearded-man-wearing-white-t-shirt.jpg') }}"
                        alt="Cliente 4" />
                    <p>"Las fotos del bautizo de mi hijo fueron hermosas. Cada sonrisa fue capturada a la perfección. Fue
                        una experiencia muy emotiva y ahora tenemos recuerdos imborrables gracias a su gran trabajo."</p>
                    <p><strong>Juan Pérez</strong></p>
                    <p>Papá Feliz</p>
                </div>
                <div class="reference-item">
                    <img src="{{ asset('images/referencia/images (1).jfif') }}" alt="Cliente 5" />
                    <p>"Contratarlos fue lo mejor que hicimos para nuestra empresa. Profesionalismo y creatividad. Las
                        imágenes que entregaron superaron nuestras expectativas y fortalecieron nuestra imagen corporativa."
                    </p>
                    <p><strong>Steven Gómez</strong></p>
                    <p>CEO de StartUp</p>
                </div>
                <div class="reference-item">
                    <img src="{{ asset('images/referencia/istockphoto-1090878494-612x612.jpg') }}" alt="Cliente 6" />
                    <p>"Las fotos de mi cumpleaños fueron maravillosas. Cada detalle quedó inmortalizado. Fue como revivir
                        cada instante lleno de alegría y diversión. Gracias por hacerlo tan especial."</p>
                    <p><strong>Luis Ramírez</strong></p>
                    <p>Cliente</p>
                </div>
            </div>
        </div>
    </section>

@endsection