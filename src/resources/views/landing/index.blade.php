@extends('landing.layouts.landing')

@section('title', 'Home')

@section('header')
    <h1>Viajes FP</h1>
    <p>Descubre ciudades increíbles con nuestra agencia de viajes.</p>
@endsection

@section('content')
    <section class="hero">
        <img 
            src="{{ asset('assets/images/portada.png') }}" 
            alt="Imagen de portada de una agencia de viajes" 
            class="hero-img"
        >

        <h2>Tu próxima aventura empieza aquí</h2>

        <p>
            En Viajes FP organizamos escapadas a las principales ciudades europeas.
            Elige destino, prepara la maleta y disfruta de una experiencia inolvidable.
        </p>
    </section>
@endsection