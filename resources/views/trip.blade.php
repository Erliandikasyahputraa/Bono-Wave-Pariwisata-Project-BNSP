@extends('layouts.app')

@section('title', 'Rencanakan Perjalanan - The Bono Wave')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
@endpush

@section('content')
    <section class="section-padding page-title-section">
        <h1 class="page-title">Rencanakan Petualangan Anda</h1>
        <p class="page-subtitle">Semua yang perlu Anda siapkan untuk perjalanan tak terlupakan ke Ombak Bono.</p>
    </section>

    <section id="trip-journey" class="section-padding">
        <h2 class="section-title">Langkah-Langkah Perjalanan Utama</h2>
        <div class="trip-step">
            <div class="trip-image">
                <img src="{{ asset('assets/images/trip/bandara.jpg') }}" alt="Bandara Sultan Syarif Kasim II Pekanbaru">
            </div>
            <div class="trip-content">
                <span class="step-number">01</span>
                <h3>Gerbang Masuk: Pekanbaru (PKU)</h3>
                <p>Perjalanan Anda dimulai di Pekanbaru. Pesan tiket penerbangan ke Bandara Internasional Sultan Syarif Kasim II. Dari sini, petualangan darat Anda akan dimulai.</p>
            </div>
        </div>
        <div class="trip-step reverse">
            <div class="trip-image">
                <img src="{{ asset('assets/images/trip/meranti.jpg') }}" alt="Jalan menuju Teluk Meranti">
            </div>
            <div class="trip-content">
                <span class="step-number">02</span>
                <h3>Menuju Desa Teluk Meranti <br>(4-5 Jam)</h3>
                <p>Dari Pekanbaru, Anda memiliki beberapa opsi untuk perjalanan darat yang akan membawa Anda melewati pemandangan pedesaan Riau sebelum tiba di Desa Teluk Meranti.</p>
            </div>
        </div>
        <div class="trip-step">
            <div class="trip-image">
                <img src="{{ asset('assets/images/trip/homestay.jpg') }}" alt="Salah satu homestay di Teluk Meranti">
            </div>
            <div class="trip-content">
                <span class="step-number">03</span>
                <h3>Menginap Bersama Komunitas Lokal</h3>
                <p>Akomodasi utama adalah homestay yang dikelola oleh warga. Ini adalah kesempatan emas untuk merasakan keramahan Melayu dan mendapatkan cerita langsung tentang Bono.</p>
            </div>
        </div>
    </section>
    
    <section id="transport-options" class="section-padding section-dark">
        <h2 class="section-title">Opsi & Biaya Transportasi dari Pekanbaru</h2>
        <p class="section-description">Pilih moda transportasi yang paling sesuai dengan gaya perjalanan dan anggaran Anda.</p>
        <div class="info-grid">
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-car"></i></div>
                <div class="info-text">
                    <h4>Sewa Mobil Pribadi</h4>
                    <p>Pilihan paling fleksibel dan nyaman. Anda bisa berhenti di mana saja. Jadwal keberangkatan sepenuhnya di tangan Anda.</p>
                    <p><strong>Estimasi Biaya:</strong> Rp 500.000 - Rp 700.000 per hari (termasuk supir).</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-bus-alt"></i></div>
                <div class="info-text">
                    <h4>Travel Bersama (Shared Taxi)</h4>
                    <p>Pilihan hemat biaya jika Anda bepergian sendiri atau berdua. Anda akan berbagi kendaraan dengan penumpang lain.</p>
                    <p><strong>Jadwal:</strong> Biasanya ada beberapa kali keberangkatan setiap hari dari terminal atau agen travel.</p>
                    <p><strong>Estimasi Biaya:</strong> Rp 100.000 - Rp 150.000 per orang.</p>
                </div>
            </div>
        </div>
        <p class="section-tip"><strong>Tips Memilih:</strong> Jika Anda datang bersama rombongan dan membawa papan selancar, sewa mobil adalah pilihan terbaik. Jika Anda seorang backpacker, travel bersama adalah opsi yang paling ekonomis.</p>
    </section>

    <section id="practical-info" class="section-padding">
        <h2 class="section-title">Informasi Penting Lainnya</h2>
        <p class="section-description">Detail kecil yang akan membuat perjalanan Anda jauh lebih lancar.</p>
        <div class="info-grid">
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-calendar-check"></i></div>
                <div class="info-text">
                    <h4>Waktu Terbaik</h4>
                    <p>Puncak Bono terjadi di musim hujan, antara Oktober - Desember. Gelombang tertinggi biasanya muncul beberapa hari setelah bulan purnama (`Bulan Besar`).</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-utensils"></i></div>
                <div class="info-text">
                    <h4>Kuliner Wajib Coba</h4>
                    <p>Jangan lewatkan Gulai Ikan Baung atau Asam Pedas Ikan Patin. Rasa autentik masakan sungai yang kaya rempah akan melengkapi petualangan Anda.</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-money-bill-wave"></i></div>
                <div class="info-text">
                    <h4>Mata Uang & Pembayaran</h4>
                    <p>Sangat disarankan membawa uang tunai (IDR) yang cukup, karena fasilitas pembayaran non-tunai sangat terbatas.</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-wifi"></i></div>
                <div class="info-text">
                    <h4>Fasilitas & Sinyal</h4>
                    <p>Sinyal telekomunikasi ada, namun koneksi internet mungkin tidak stabil. Anggap ini sebagai kesempatan untuk benar-benar menyatu dengan alam.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="additional-activities" class="section-padding section-dark">
        <h2 class="section-title">Aktivitas Tambahan di Sekitar Bono</h2>
        <p class="section-description">Manfaatkan waktu Anda untuk menjelajahi kekayaan budaya dan alam di sekitar Sungai Kampar.</p>
        <div class="feature-grid">
            <div class="feature-item">
                <i class="fas fa-archway icon-feature"></i>
                <h3>Wisata Budaya Setempat</h3>
                <p>Kunjungi Istana Pelalawan atau situs bersejarah lainnya untuk belajar tentang warisan kerajaan Melayu di masa lampau.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-fish icon-feature"></i>
                <h3>Memancing dengan Nelayan</h3>
                <p>Ikutlah dengan nelayan lokal untuk merasakan pengalaman mencari ikan baung atau udang galah di Sungai Kampar.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-coffee icon-feature"></i>
                <h3>Interaksi dengan Masyarakat</h3>
                <p>Habiskan waktu sore di kedai kopi lokal, mengobrol dengan warga, dan dengarkan cerita mereka tentang kehidupan yang berdampingan dengan Bono.</p>
            </div>
        </div>
    </section>

    <section id="trip-map" class="section-padding">
        <h2 class="section-title">Peta Lokasi</h2>
        <p class="section-description">Lihat lokasi Desa Teluk Meranti, titik utama untuk memulai petualangan Bono Anda.</p>
        <div id="map" style="height: 400px; border-radius: 10px;"></div>
    </section>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@endpush