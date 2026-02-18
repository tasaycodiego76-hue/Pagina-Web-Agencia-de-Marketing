@extends('layout.app')

@section('titulo', 'Contáctanos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sandro/contact.css') }}">
@endpush

@section('contenido')

    <section id="contacto" class="contact">
        <h2>¡Empecemos Algo Increíble!</h2>
        <div class="contact-content">
            <!-- Formulario de contacto -->
            <div class="contact-form">
                <h3>Deja un Comentario</h3>
                <p>Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados *</p>
                <form action="{{ route('referencia.store') }}" method="POST" id="contact-form">
                    @csrf
                    <input type="text" name="name" placeholder="Nombre" required>
                    <input type="email" name="email" placeholder="Correo Electrónico" required>
                    <textarea name="message" placeholder="Escribe tu mensaje" required></textarea>
                    <button type="submit" class="cta-button">Enviar Comentario</button>
                </form>
            </div>

            <!-- Información de contacto -->
            <div class="contact-info">
                <h3>Siéntete libre de contactarme en cualquier momento</h3>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <p><strong>Correo Electrónico</strong>: rodrigofelix.fotografo@gmail.com</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <p><strong>Teléfono</strong>: +(51) 931 826 325</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><strong>Dirección</strong>: Chincha Alta, Ica</p>
                </div>

            </div>
        </div>
    </section>

@endsection