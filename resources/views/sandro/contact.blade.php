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

@section('contenido')

@if(session('success'))
<div id="overlay" style="
    position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.5);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
">
    <div style="
        background: white;
        padding: 40px;
        border-radius: 12px;
        text-align: center;
        max-width: 400px;
        width: 90%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    ">
<h3 style="color: #155724; margin-bottom: 10px;">¡Muchas Gracias!</h3>
<p style="color: #555;">Tu mensaje ha sido recibido. Apreciamos mucho que hayas compartido tu experiencia con nosotros.</p>
        <button onclick="document.getElementById('overlay').remove()" style="
            margin-top: 20px;
            padding: 10px 30px;
            background: #155724;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        ">Cerrar</button>
    </div>
</div>
@endif

@endsection