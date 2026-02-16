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
@endsection