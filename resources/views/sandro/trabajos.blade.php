@extends('layout.app')

@section('titulo', 'Trabajos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sandro/trabajos.css') }}">
@endpush

@section('contenido')
    <section id="trabajos" class="trabajos">
        <div class="titulo-trabajos">
            <span>Nuestros Trabajos</span>
        </div>

        <div class="carousel-container">
            <div class="carousel">
                <div class="carousel-item">
                    <img src="{{ asset('images/trabajos/boda1.jpg') }}" alt="Boda 1" class="carousel-image">
                    <div class="work-description">
                        <h4>Ceremonias Inolvidables</h4>
                        <p>Captura de momentos espontáneos con iluminación cálida para resaltar la emoción del evento.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/trabajos/boda2.jpg') }}" alt="Boda 2" class="carousel-image">
                    <div class="work-description">
                        <h4>Detalles que Enamoran</h4>
                        <p>Fotografía de retrato enfocada en la conexión y ternura de los novios, utilizando luz natural de
                            atardecer.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/trabajos/DSC06473.jpg') }}" alt="Trabajo" class="carousel-image">
                    <div class="work-description">
                        <h4>Arquitectura de Eventos</h4>
                        <p>Composición simétrica y gran angular para lucir la majestuosidad de la decoración y el montaje.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/trabajos/DSC09848.jpg') }}" alt="Trabajo" class="carousel-image">
                    <div class="work-description">
                        <h4>Esencia Floral</h4>
                        <p>Enfoque artístico en la decoración exterior, resaltando texturas y colores vivos bajo el sol de
                            Chincha.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/trabajos/work2.jpg') }}" alt="Trabajo" class="carousel-image">
                    <div class="work-description">
                        <h4>El Gran Momento</h4>
                        <p>Fotografía dinámica que congela la alegría del primer recorrido como esposos entre sus invitados.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-button prev" aria-label="Anterior">&#10094;</button>
            <button class="carousel-button next" aria-label="Siguiente">&#10095;</button>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.querySelector('.carousel');
            const items = document.querySelectorAll('.carousel-item');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');

            let counter = 0;
            const size = 100; // Mueve el 100% del ancho

            nextBtn.addEventListener('click', () => {
                if (counter >= items.length - 1) {
                    counter = 0; // Vuelve al inicio
                } else {
                    counter++;
                }
                carousel.style.transition = "transform 0.5s ease-in-out";
                carousel.style.transform = 'translateX(' + (-size * counter) + '%)';
            });

            prevBtn.addEventListener('click', () => {
                if (counter <= 0) {
                    counter = items.length - 1; // Va al final
                } else {
                    counter--;
                }
                carousel.style.transition = "transform 0.5s ease-in-out";
                carousel.style.transform = 'translateX(' + (-size * counter) + '%)';
            });
        });
    </script>
@endsection