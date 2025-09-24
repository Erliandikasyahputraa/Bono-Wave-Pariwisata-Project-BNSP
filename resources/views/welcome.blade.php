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
    <main>
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

        <section id="bono-video" class="section-padding section-dark">
            <h2 class="section-title">Lihat Bono Beraksi</h2>
            <p class="section-description">Rasakan kekuatan dan keindahan Ombak Bono melalui video sinematik ini.</p>
            <div class="video-container">
                <video controls poster="{{ asset('assets/images/hero/heroo.jpg') }}" style="width:100%; border-radius:10px;">
                    <source src="{{ asset('assets/videos/chasing the bono.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung tag video.
                </video>
            </div>
        </section>

        <section id="why-bono" class="section-padding">
            <h2 class="section-title">Mengapa Bono Begitu Istimewa?</h2>
            <p class="section-description">Bono bukan sekadar ombak, melainkan arena petualangan unik yang tidak akan Anda temukan di tempat lain.</p>
            <div class="feature-grid">
                 <div class="feature-item">
                    <i class="fas fa-infinity icon-feature"></i>
                    <h3>Ombak Tak Berujung</h3>
                    <p>Rasakan sensasi berselancar di atas gelombang yang bisa bertahan hingga puluhan kilometer, sebuah maraton di atas air.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-tree icon-feature"></i>
                    <h3>Petualangan Tropis</h3>
                    <p>Berselancar dengan latar belakang hutan hujan tropis yang eksotis, memberikan pengalaman yang benar-benar berbeda dari laut.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-users icon-feature"></i>
                    <h3>Budaya Otentik</h3>
                    <p>Menjadi bagian dari komunitas lokal yang hangat dan merasakan langsung kearifan masyarakat di tepi Sungai Kampar.</p>
                </div>
            </div>
        </section>
    </main>
@endsection