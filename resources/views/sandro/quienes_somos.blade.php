@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sandro/quienes_somos.css') }}">
@endpush

@extends('layout.app')

@section('titulo', 'Quiénes Somos')

@section('contenido')
    <section id="quienes" class="team">
        <h2>Nuestro Equipo</h2>
        <div class="team-content">
            <!-- Primera Fila -->
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/rodrigo.jpg') }}" alt="Rodrigo">
                <h3>RODRIGO FELIX</h3>
                <p>JEFE DE MARKETING</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/fabiana.jpg') }}" alt="Fabi">
                <h3>FABIANA TASAYCO</h3>
                <p>COORDINADORA GENERAL</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/nayru.jpg') }}" alt="Nayru">
                <h3>NAYRU GOMEZ</h3>
                <p>DISEÑO GRÁFICO</p>
            </div>

            <!-- Segunda Fila -->
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/noemi.jpg') }}" alt="Noemi">
                <h3>NOEMI TORRES</h3>
                <p>CREACIÓN DE CONTENIDO</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/jonathan.jpg') }}" alt="Jonathan">
                <h3>JONATHAN MEDINA</h3>
                <p>EDICIÓN Y VIDEO</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/sonia.jpg') }}" alt="Sonia">
                <h3>SONIA ALEJANDRA</h3>
                <p>EDICIÓN Y VIDEO</p>
            </div>

            <!-- Tercera Fila -->
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/jose.jpg') }}" alt="Jose">
                <h3>JOSE GUERRA</h3>
                <p>EDICIÓN Y VIDEO</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/jesus.jpg') }}" alt="Jesus">
                <h3>JESUS DE LA CRUZ</h3>
                <p>DISEÑO GRÁFICO</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/fabrizio.jpg') }}" alt="Fabrizio">
                <h3>FABRIZIO RAMOS</h3>
                <p>DISEÑO GRÁFICO</p>
            </div>

            <!-- Cuarta Fila -->
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/diego.jpg') }}" alt="Diego">
                <h3>DIEGO TASAYCO</h3>
                <p>DESARROLLADOR SOFTWARE</p>
                <p>Practicante</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('images/quienes_somos/sandro.jpg') }}" alt="Sandro">
                <h3>SANDRO RODRÍGUEZ</h3>
                <p>DESARROLLADOR SOFTWARE</p>
                <p>Practicante</p>
            </div>
        </div>
    </section>
@endsection