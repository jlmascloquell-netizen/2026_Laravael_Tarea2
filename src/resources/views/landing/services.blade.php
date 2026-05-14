@extends('landing.layouts.landing')

@section('title', 'Services')

@section('header')
    <h1>Servicios</h1>
    <p>Elige uno de nuestros destinos destacados.</p>
@endsection

@section('content')
    <section class="cards-grid">

        <x-card 
            title="París"
            image="assets/images/paris.png"
            price="Desde 499 €"
            days="4"
            link="https://www.paris.fr/"
        >
            Disfruta de la Torre Eiffel, el Museo del Louvre, Montmartre
            y la gastronomía francesa.
        </x-card>

        <x-card 
            title="Roma"
            image="assets/images/roma.png"
            price="Desde 429 €"
            days="3"
            link="https://www.turismoroma.it/"
        >
            Visita el Coliseo, el Vaticano, la Fontana di Trevi
            y algunas de las plazas más famosas de Italia.
        </x-card>

        <x-card 
            title="Londres"
            image="assets/images/londres.png"
            price="Desde 459 €"
            days="4"
            link="https://www.visitlondon.com/"
        >
            Conoce el Big Ben, el Tower Bridge, Camden Town
            y los museos más conocidos de la ciudad.
        </x-card>

    </section>
@endsection