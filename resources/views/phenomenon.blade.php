@extends('layouts.app')

@section('title', 'The Phenomenon - The Bono Wave')
@section('header_class', 'header-minimal')
@section('navbar_class', 'scrolled')

@section('content')
    <section class="section-padding page-title-section">
        <h1 class="page-title">Keajaiban di Jantung Sungai</h1>
        <p class="page-subtitle">Lebih dari sekadar ombak, Bono adalah fenomena alam yang memukau dunia.</p>
    </section>

    <section id="stats" class="section-padding section-dark">
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number">4+ M</span>
                <p class="stat-label">Tinggi Ombak Maksimal</p>
            </div>
            <div class="stat-item">
                <span class="stat-number">60 KM</span>
                <p class="stat-label">Jarak Tempuh Ombak</p>
            </div>
            <div class="stat-item">
                <span class="stat-number">40 KM/J</span>
                <p class="stat-label">Kecepatan Rata-Rata</p>
            </div>
        </div>
    </section>

    <section id="two-worlds" class="section-padding">
        <h2 class="section-title">Dua Dunia Bono: Sains & Mitos</h2>
        <p class="section-description">Di balik kekuatannya, Bono menyimpan dua cerita: penjelasan ilmiah yang menakjubkan dan legenda mistis yang dihormati oleh masyarakat setempat.</p>
        
        <div class="content-image-split">
            <div class="text-content">
                <h3>Dari Sudut Pandang Sains</h3>
                <p>Bono adalah tidal bore, pertemuan dahsyat antara pasang naik air laut dari Selat Malaka dengan arus Sungai Kampar. Muara sungai yang berbentuk corong raksasa memampatkan energi pasang ini, melahirkan gelombang tunggal yang terus bergerak puluhan kilometer melawan arus menuju hulu.</p>
            </div>
            <div class="image-content">
                <img src="{{ asset('assets/images/phenomenon/daerahg.jpg') }}" alt="Peta muara Sungai Kampar">
            </div>
        </div>

        <div class="content-image-split reverse" style="margin-top: 80px;">
            <div class="text-content">
                <h3>Dari Sudut Pandang Mitos</h3>
                <p>Masyarakat lokal mengenalnya sebagai "Tujuh Hantu", dipercaya sebagai arwah penjaga sungai yang sedang berparade dari laut ke daratan. Mitos ini mengajarkan rasa hormat yang mendalam terhadap alam, sebuah kearifan yang masih dipegang teguh hingga kini oleh para pemandu dan penduduk desa.</p>
            </div>
            <div class="image-content">
                <img src="{{ asset('assets/images/phenomenon/mist.jpg') }}" alt="Suasana mistis Sungai Kampar">
            </div>
        </div>
    </section>

    <section id="wave-schedule" class="section-padding final-cta-section" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('assets/images/phenomenon/final-cta-bg.jpg') }}')">
        <div class="cta-content">
            <h2>Saksikan Sendiri Keajaibannya</h2>
            <p>Bono paling spektakuler saat musim hujan dan bulan purnama. Rencanakan perjalanan Anda antara bulan Oktober hingga Desember untuk menyaksikan kekuatan maksimalnya.</p>
            <a href="{{ url('/trip') }}" class="btn-primary">Lihat Jadwal & Rencanakan Perjalanan</a>
        </div>
    </section>
@endsection