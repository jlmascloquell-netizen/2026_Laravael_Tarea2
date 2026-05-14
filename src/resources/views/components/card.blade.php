@props([
    'title',
    'image',
    'price',
    'days',
    'link'
])

<article class="card">
    <img 
        src="{{ asset($image) }}" 
        alt="Imagen de {{ $title }}" 
        class="card-img"
    >

    <div class="card-body">
        <h2>{{ $title }}</h2>

        <p class="card-price">{{ $price }}</p>

        <p class="card-days">{{ $days }} días</p>

        <p>
            {{ $slot }}
        </p>

        <a href="{{ $link }}" class="btn" target="_blank">
            Más información
        </a>
    </div>
</article>