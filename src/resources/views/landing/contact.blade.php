@extends('landing.layouts.landing')

@section('title', 'Contact')

@section('header')
    <h1>Contacto</h1>
    <p>Estamos aquí para ayudarte a preparar tu próximo viaje.</p>
@endsection

@section('content')
    <section class="contact">
        <div class="contact-info">
            <h2>Datos de contacto</h2>

            <p>
                <strong>Teléfono:</strong>
                <a href="tel:+34960000000">+34 960 000 000</a>
            </p>

            <p>
                <strong>Email:</strong>
                <a href="mailto:info@viajesfp.com">info@viajesfp.com</a>
            </p>

            <p>
                <strong>Dirección:</strong>
                Calle Laravel, 25, Valencia
            </p>
        </div>

        <div class="map">
            <h2>Dónde estamos</h2>

            <img 
                src="{{ asset('assets/images/mapa.png') }}" 
                alt="Mapa de ubicación de la agencia Viajes FP"
            >
        </div>
    </section>
@endsection