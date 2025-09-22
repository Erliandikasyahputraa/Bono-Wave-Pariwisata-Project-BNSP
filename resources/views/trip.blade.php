@extends('layouts.app')

@section('title', 'Rencanakan Perjalanan - The Bono Wave')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
@endpush

@section('content')
    <section class="section-padding page-title-section">
        <h1 class="page-title">Rencanakan Perjalanan Anda</h1>
        <p class="page-subtitle">Panduan Praktis dari Titik Awal hingga Tiba di Lokasi Ombak.</p>
    </section>

    <section id="trip-journey" class="section-padding">
        <div class="trip-step">
            <div class="trip-image">
                <img src="{{ asset('assets/images/trip/bandara.jpg') }}" alt="Bandara Sultan Syarif Kasim II Pekanbaru">
            </div>
            <div class="trip-content">
                <span class="step-number">01</span>
                <h3>Terbang ke Pekanbaru (PKU)</h3>
                <p>Gerbang utama Anda adalah Bandara Internasional Sultan Syarif Kasim II di Pekanbaru...</p>
            </div>
        </div>
        <div class="trip-step reverse">
            <div class="trip-image">
                <img src="{{ asset('assets/images/trip/meranti.jpg') }}" alt="Jalan menuju Teluk Meranti">
            </div>
            <div class="trip-content">
                <span class="step-number">02</span>
                <h3>Perjalanan Darat ke Teluk Meranti</h3>
                <p>Perjalanan darat memakan waktu sekitar 4-5 jam...</p>
            </div>
        </div>
        <div class="trip-step">
            <div class="trip-image">
                <img src="{{ asset('assets/images/trip/homestay.jpg') }}" alt="Salah satu homestay di Teluk Meranti">
            </div>
            <div class="trip-content">
                <span class="step-number">03</span>
                <h3>Menginap di Jantung Komunitas</h3>
                <p>Akomodasi utama adalah homestay yang dikelola warga...</p>
            </div>
        </div>
    </section>

    <section id="trip-map" class="section-padding section-dark">
        <h2 class="section-title">Peta Lokasi</h2>
        <p class="section-description">Lihat lokasi Desa Teluk Meranti secara langsung di peta. Ini akan membantu Anda merencanakan navigasi.</p>
        <div id="map" style="height: 400px; border-radius: 10px;"></div>
    </section>

   <section id="budget-tips" class="section-padding">
        <h2 class="section-title">Tips Anggaran</h2>
        <p class="section-description">Bono adalah destinasi yang ramah di kantong jika Anda merencanakannya dengan baik.</p>
        <div class="budget-grid">
            <div class="budget-item">
                <i class="fas fa-car"></i>
                <h4>Transportasi</h4>
                <p>Berbagi mobil sewaan dengan rekan perjalanan lain adalah cara paling hemat.</p>
            </div>
            <div class="budget-item">
                <i class="fas fa-home"></i>
                <h4>Akomodasi</h4>
                <p>Tarif homestay biasanya sudah termasuk sarapan. Konfirmasi untuk menghemat biaya makan.</p>
            </div>
            <div class="budget-item">
                <i class="fas fa-utensils"></i>
                <h4>Makan</h4>
                <p>Makan di warung-warung lokal tidak hanya murah, tetapi juga menyajikan rasa otentik terbaik.</p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@endpush