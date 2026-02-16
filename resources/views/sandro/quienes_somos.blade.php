@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sandro/quienes_somos.css') }}">
@endpush

@extends('layout.app')

@section('titulo', 'Quiénes Somos')

@section('contenido')
    <section id="quienes" class="team">
        <h2>Nuestro Equipo</h2>
        
        <div class="team-content">
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/rodrigo.jpg') }}" alt="Rodrigo">
                <h3>Rodrigo Felix</h3>
                <p>Director Creativo</p>
            </div>

            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/team2.jpg') }}" alt="Fabi">
                <h3>Fabi</h3>
                <p>Jefa de Marketing</p>
            </div>

            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/diego.jpg') }}" alt="Diego">
                <h3>Diego</h3>
                <p>Community Manager</p>
            </div>
        </div>
    </section>

    <section id="referencia" class="reference">
        <h2 style="text-align: center; font-family: 'Playfair Display', serif; margin-bottom: 40px;">Referencias</h2>
        
        <div class="reference-carousel" data-flickity='{ "autoPlay": true, "wrapAround": true, "prevNextButtons": false }'>
            <div class="reference-item">
                <p>"Las fotos de nuestra boda fueron increíbles. Rodrigo capturó cada momento con una esencia única."</p>
                <strong>— Shawn Beltran</strong>
            </div>
            
            <div class="reference-item">
                <p>"Excelente manejo de marca y redes sociales. El crecimiento fue notable en el primer mes."</p>
                <strong>— Empresa Cliente</strong>
            </div>
        </div>
    </section>
@endsection