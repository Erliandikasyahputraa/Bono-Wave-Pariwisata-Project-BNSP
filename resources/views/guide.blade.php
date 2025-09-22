@extends('layouts.app')

@section('title', 'Panduan Selancar - The Bono Wave')

@section('content')
    <section class="section-padding page-title-section">
        <h1 class="page-title">Panduan Menaklukkan Bono</h1>
        <p class="page-subtitle">Jadilah Rider Cerdas, Hormati Alam, dan Nikmati Ombak Abadi.</p>
    </section>

    <section id="river-rules" class="section-padding content-image-split">
        <div class="text-content">
            <h2>Aturan Main di Sungai</h2>
            <p>Bono berbeda dari ombak laut. Arusnya kuat, medannya berubah-ubah, dan Anda berbagi rumah dengan alam liar. Keselamatan adalah prioritas mutlak.</p>
            <ul>
                <li><i class="fas fa-check-circle"></i> Selalu Bersama Pemandu: Mereka adalah kapten Anda. Ikuti arahan mereka tanpa kecuali.</li>
                <li><i class="fas fa-check-circle"></i> Kenali Bahaya: Waspadai kayu apung, ranting, dan satwa liar. Jaga jarak aman.</li>
                <li><i class="fas fa-check-circle"></i> Hormati Lokal: Ini adalah rumah mereka. Jaga sikap, kebersihan, dan hormati adat istiadat setempat.</li>
            </ul>
        </div>
        <div class="image-content">
            <img src="{{ asset('assets/images/trip/tur.jpg') }}" alt="Pemandu lokal memberikan arahan">
        </div>
    </section>

    <section id="pro-tip" class="section-padding section-dark">
        <div class="guide-pro-tip">
            <i class="fas fa-lightbulb"></i>
            <h3>Pro-Tip: Manajemen Energi</h3>
            <p>Anda bisa berselancar selama puluhan menit, bahkan satu jam! Jangan habiskan energi Anda di awal. Atur napas, temukan ritme yang santai, dan nikmati perjalanan. Ini adalah maraton, bukan sprint.</p>
        </div>
    </section>

    <section id="equipment" class="section-padding content-image-split reverse">
        <div class="text-content">
            <h2>Pilih Senjata Anda</h2>
            <p>Pemilihan papan selancar sangat memengaruhi pengalaman Anda. Stabilitas adalah kunci untuk menikmati alur panjang Bono.</p>
            <ul>
                <li><i class="fas fa-check-circle"></i> Papan Ideal: Papan dengan volume lebih besar seperti funboard, longboard, atau SUP board sangat direkomendasikan.</li>
                <li><i class="fas fa-check-circle"></i> Perlengkapan Wajib: Rash guard lengan panjang, leash yang kuat, dan tabir surya tahan air.</li>
                <li><i class="fas fa-check-circle"></i> Sangat Disarankan: Helm dan pelampung, terutama jika ini adalah pengalaman pertama Anda.</li>
            </ul>
        </div>
        <div class="image-content">
            <img src="{{ asset('assets/images/trip/surf.jpg') }}" alt="Berbagai jenis papan selancar di tepi sungai">
        </div>
    </section>

    <section id="contact-guide" class="section-padding">
        <h2 class="section-title">Siap Bertemu Pemandu Anda?</h2>
        <p class="section-description">Pengalaman Bono Anda dimulai dari sini. Hubungi komunitas pemandu lokal untuk merencanakan sesi selancar, penyewaan papan, dan akomodasi.</p>
        <a href="mailto:info@thebonowave.com" class="btn-primary">Hubungi Kami via Email</a>
    </section>
@endsection