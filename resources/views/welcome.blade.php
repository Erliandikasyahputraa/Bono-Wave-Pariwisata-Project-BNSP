@extends('layouts.app')

@section('title', 'The Bono Wave - Taklukkan Ombak Sungai Legendaris')

@section('hero_content')
    <div class="hero-section" id="home">
        <div class="hero-bg" style="background-image: url('{{ asset('assets/images/hero/heroo.jpg') }}');"></div>
        <div class="hero-content">
            <p class="hero-tagline">SUNGAI KAMPAR, RIAU</p>
            <h1 class="hero-title">TAKLUKKAN OMBAK SUNGAI LEGENDARIS</h1>
            <a href="{{ url('/guide') }}" class="btn-primary hero-btn">Mulai Petualangan Anda</a>
        </div>
    </div>
@endsection

@section('content')
    <section id="about-bono" class="section-padding">
        <h2 class="section-title">Sebuah Keajaiban Alam</h2>
        <p class="section-description">Bono bukanlah ombak biasa. Ini adalah gelombang pasang surut yang langka, tercipta saat air laut dari Selat Malaka bertemu dengan arus Sungai Kampar, menciptakan gelombang yang bisa ditunggangi hingga puluhan kilometer.</p>
        <div class="feature-grid">
            <div class="feature-item">
                <i class="fas fa-water icon-feature"></i>
                <h3>Gelombang Sungai</h3>
                <p>Salah satu dari sedikit tempat di dunia untuk berselancar di sungai.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-moon icon-feature"></i>
                <h3>Tenaga Pasang Surut</h3>
                <p>Dibentuk oleh kekuatan bulan, menciptakan ombak yang kuat dan panjang.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-map-marker-alt icon-feature"></i>
                <h3>Lokasi Unik</h3>
                <p>Terletak di jantung hutan hujan tropis Sumatera.</p>
            </div>
        </div>
    </section>
    <section id="best-gallery" class="section-padding section-dark">
        <h2 class="section-title">Momen Luar Biasa</h2>
        <div class="gallery-grid-condensed">
            <img src="{{ asset('assets/images/index/selancar.jpg') }}" alt="Peselancar di Ombak Bono">
            <img src="{{ asset('assets/images/index/sungai.jpg') }}" alt="Suasana Sungai Kampar">
            <img src="{{ asset('assets/images/index/pemandangan.jpg') }}" alt="Pemandangan Ombak Bono">
            <img src="{{ asset('assets/images/index/ombak.jpg') }}" alt="Formasi Ombak Bono">
        </div>
        <a href="{{ url('/gallery') }}" class="btn-secondary">Lihat Galeri Lengkap</a>
    </section>
    <section id="testimoni" class="section-padding">
        <h2 class="section-title">Kata Para Penunggang Ombak</h2>
        <div class="testimoni-card">
            <p class="testimoni-text">"Berselancar di Bono adalah pengalaman sureal. Ini bukan sekadar ombak, ini adalah sebuah perjalanan. Tak terlupakan!"</p>
            <div class="testimoni-author">
                <img src="{{ asset('assets/images/index/sean.jpg') }}" alt="Foto Profil">
                <div>
                    <h4>Alex Johnson</h4>
                    <p>Peselancar Profesional, Australia</p>
                </div>
            </div>
        </div>
    </section>
@endsection