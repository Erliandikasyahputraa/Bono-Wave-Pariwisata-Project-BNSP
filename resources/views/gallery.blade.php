@extends('layouts.app')

@section('title', 'Galeri & Cerita - The Bono Wave')

@section('content')
    <section class="section-padding page-title-section">
        <h1 class="page-title">Galeri & Cerita</h1>
        <p class="page-subtitle">Saksikan Kekuatan dan Keindahan Ombak Bono</p>
    </section>
    
    <section id="full-gallery" class="section-padding">
        <div class="gallery-masonry">
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal1.jpg') }}" alt="Aksi Peselancar di Ombak Bono"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal2.jpg') }}" alt="Pemandangan Luas Sungai Kampar"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal3.jpg') }}" alt="Potret Peselancar"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal4.jpg') }}" alt="Perahu lokal menemani peselancar"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal5.jpg') }}" alt="Ombak Bono dari kejauhan"></div>
            <div class="masonry-item"><img src="{{ asset('assets/images/gallery/gal6.jpg') }}" alt="Detail ombak Bono"></div>
        </div>
    </section>

    <section id="stories" class="section-padding section-dark">
        <h2 class="section-title">Cerita Para Petualang</h2>
        <div class="stories-list">
            @forelse ($stories as $story)
                <div class="story-item">
                    <div class="story-author">
                        <img src="{{ asset('assets/images/gallery/man.jpg') }}" alt="Foto Profil">
                        <div>
                            <h3>"{{ $story->title }}"</h3>
                            <span>Oleh {{ $story->author }}</span>
                        </div>
                    </div>
                    <p>"{{ \Illuminate\Support\Str::limit($story->content, 150, '...') }}"</p>
                    
                    <a href="{{ route('stories.show', $story->id) }}" class="story-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            @empty
                <p style="color: var(--medium-text); width: 100%; text-align: center;">Belum ada cerita yang dibagikan.</p>
            @endforelse
        </div>
        
        @auth
            <a href="{{ route('stories.create') }}" class="btn-primary">Bagikan Ceritamu</a>
        @endauth
    </section>

    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
        <a class="lightbox-prev">&#10094;</a>
        <a class="lightbox-next">&#10095;</a>
    </div>
@endsection