@extends('layouts.app')

@section('title', 'Galeri Petualangan - The Bono Wave')

@section('content')
    <section class="section-padding page-title-section">
        <h1 class="page-title">Galeri & Legenda</h1>
        <p class="page-subtitle">Setiap gambar menyimpan cerita. Setiap ombak melahirkan legenda.</p>
    </section>
    
    <section id="full-gallery" class="section-padding">
        <div class="gallery-masonry">
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal1.jpeg') }}" alt="Aksi Peselancar di Ombak Bono"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal2.jpeg') }}" alt="Pemandangan Luas Sungai Kampar"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal3.jpeg') }}" alt="Potret Peselancar"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal4.jpeg') }}" alt="Perahu lokal menemani peselancar"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal5.webp') }}" alt="Ombak Bono dari kejauhan"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal6.jpeg') }}" alt="Detail ombak Bono"></div>
        </div>
    </section>

    <section id="stories" class="section-padding section-dark">
        <h2 class="section-title">Kisah Para Penakluk Bono</h2>
        <div class="stories-list">
            @forelse ($stories as $story)
                <div class="story-item">
                    <div class="story-author">
                        @if($story->image_path)
                            <img src="{{ asset('storage/' . $story->image_path) }}" alt="Foto Profil Cerita">
                        @else
                            <img src="{{ asset('assets/images/gallery/default.png') }}" alt="Foto Profil Default">
                        @endif
                        <div>
                            <h3>"{{ $story->title }}"</h3>
                            <span>Oleh {{ $story->author }}</span>
                        </div>
                    </div>
                    <p>"{{ \Illuminate\Support\Str::limit($story->content, 120, '...') }}"</p>
                    <a href="{{ route('stories.show', $story->id) }}" class="story-link">Selami Cerita Lengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            @empty
                <p style="color: var(--medium-text); width: 100%; text-align: center;">
                    Jadilah legenda pertama. Bagikan ceritamu!
                </p>
            @endforelse
        </div>
        
        @auth
            <a href="{{ route('stories.create') }}" class="btn-primary" style="margin-top: 40px;">Bagikan Ceritamu</a>
        @endauth
    </section>

    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
        <a class="lightbox-prev">&#10094;</a>
        <a class="lightbox-next">&#10095;</a>
    </div>
@endsection