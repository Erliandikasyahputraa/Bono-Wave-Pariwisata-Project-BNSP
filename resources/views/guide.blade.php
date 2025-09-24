@extends('layouts.app')

@section('title', 'Panduan Surfing - The Bono Wave')

@section('content')
    <section class="section-padding page-title-section">
        <h1 class="page-title">Panduan Surfing Bono Terlengkap</h1>
        <p class="page-subtitle">Semua yang perlu Anda tahu untuk menaklukkan ombak legendaris dengan aman dan maksimal.</p>
    </section>

    <section id="safety-procedures" class="section-padding content-image-split">
        <div class="text-content">
            <p class="section-tag">Keselamatan #1</p>
            <h2 class="section-title" style="text-align: left;">Aturan Emas di Sungai</h2>
            <p>Bono adalah fenomena alam liar. Hormati kekuatannya dengan mematuhi standar keselamatan. Setiap sesi wajib didahului dengan briefing dari pemandu, menjelaskan kondisi sungai, jalur aman, dan protokol darurat.</p>
            <ul>
                <li><i class="fas fa-check-circle"></i> Waspadai kayu apung dan arus tepi yang kuat.</li>
                <li><i class="fas fa-check-circle"></i> Jangan pernah berselancar sendirian atau saat badai.</li>
                <li><i class="fas fa-check-circle"></i> Perahu pendamping dan P3K selalu siaga untuk evakuasi.</li>
            </ul>
        </div>
        <div class="image-content">
            <img src="{{ asset('assets/images/trip/tur.jpg') }}" alt="Pemandu lokal memberikan briefing keselamatan">
        </div>
    </section>

    <section id="schedule-levels" class="section-padding">
        <h2 class="section-title">Pilih Waktu & Tantangan Anda</h2>
        <p class="section-description">Bono sangat dipengaruhi oleh musim dan fase bulan. Memilih waktu yang tepat adalah kunci pengalaman terbaik sesuai level Anda.</p>
        
       <div class="schedule-info">
    <div class="info-item">
        <div class="info-icon"><i class="fas fa-cloud-showers-heavy"></i></div>
        <div class="info-text">
            <h4>Musim Terbaik</h4>
            <p>Rencanakan kunjungan Anda antara Oktober hingga Desember untuk menyaksikan Bono dalam kekuatan puncaknya.</p>
        </div>
    </div>
     <div class="info-item">
        <div class="info-icon"><i class="fas fa-water"></i></div>
        <div class="info-text">
            <h4>Jadwal Pasang Surut</h4>
            <p>Untuk jadwal harian yang akurat, Anda bisa memeriksanya langsung di situs prediksi <a href="https://pasanglaut.com/id/riau/teluk-meranti" target="_blank" rel="noopener noreferrer">berikut ini</a>.</p>
        </div>
    </div>
    <div class="info-item">
        <div class="info-icon"><i class="fas fa-moon"></i></div>
        <div class="info-text">
            <h4>Fase Bulan</h4>
            <p>Gelombang tertinggi muncul beberapa hari setelah Bulan Purnama atau Bulan Baru karena tarikan gravitasi maksimal.</p>
        </div>
    </div>
</div>

        <div class="level-grid">
            <div class="level-card">
                <h3><i class="fas fa-child"></i> Pemula</h3>
                <p><strong>Fokus:</strong> Merasakan sensasi berdiri di atas ombak sungai yang panjang dan stabil.</p>
                <ul>
                    <li><strong>Area Terbaik:</strong> Zona akhir ombak, di mana gelombang sudah lebih landai dan aman.</li>
                    <li><strong>Waktu Terbaik:</strong> Di luar puncak bulan purnama, saat ombak tidak terlalu tinggi.</li>
                    <li><strong>Syarat Wajib:</strong> Harus bisa berenang dan wajib didampingi pemandu.</li>
                </ul>
            </div>
            <div class="level-card">
                <h3><i class="fas fa-water"></i> Menengah</h3>
                <p><strong>Fokus:</strong> Melatih ketahanan dan mencoba manuver dasar di atas ombak yang bergerak.</p>
                <ul>
                    <li><strong>Area Terbaik:</strong> Zona tengah ombak, mencari bagian yang memiliki "dinding" paling konsisten.</li>
                    <li><strong>Waktu Terbaik:</strong> Bisa di hampir semua kondisi, namun puncak bulan purnama akan memberikan tantangan lebih.</li>
                    <li><strong>Syarat Wajib:</strong> Pengalaman surfing minimal 1 tahun dan mampu mengontrol papan.</li>
                </ul>
            </div>
            <div class="level-card">
                <h3><i class="fas fa-bolt"></i> Ahli</h3>
                <p><strong>Fokus:</strong> Menaklukkan bagian ombak yang paling kuat dan mencatat durasi selancar terlama.</p>
                <ul>
                    <li><strong>Area Terbaik:</strong> Titik awal ombak di dekat muara, di mana ombak pertama kali terbentuk dan paling kuat.</li>
                    <li><strong>Waktu Terbaik:</strong> Beberapa hari setelah puncak bulan purnama atau bulan baru untuk gelombang tertinggi.</li>
                    <li><strong>Syarat Wajib:</strong> Pengalaman di ombak besar dan kondisi fisik prima.</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section id="equipment" class="section-padding content-image-split reverse">
        <div class="text-content">
            <p class="section-tag">Perlengkapan</p>
            <h2 class="section-title" style="text-align: left;">Peralatan Wajib & Opsi Sewa</h2>
            <p>Pastikan Anda membawa perlengkapan yang tepat. Papan jenis funboard atau longboard sangat disarankan. Pemandu lokal menyediakan penyewaan peralatan berkualitas.</p>
            <ul>
                <li><i class="fas fa-check-circle"></i>Peralatan Wajib: Papan selancar, leash, helm, dan pelampung.</li>
                <li><i class="fas fa-check-circle"></i>Estimasi Harga Sewa: Mulai dari Rp 250.000/hari untuk paket lengkap.</li>
            </ul>
        </div>
        <div class="image-content">
            <img src="{{ asset('assets/images/trip/surf.jpg') }}" alt="Papan selancar di tepi sungai">
        </div>
    </section>
    
    <section id="local-guides" class="section-padding section-dark">
        <h2 class="section-title">Temui Pemandu Bersertifikat Kami</h2>
        <p class="section-description">Pemandu lokal adalah kunci pengalaman Bono yang aman dan tak terlupakan. Mereka adalah ahli sungai dengan pengalaman bertahun-tahun.</p>
        <div class="guide-grid">
            <div class="guide-card">
                <img src="{{ asset('assets/images/phenomenon/guide1.jpg') }}" alt="Foto Pemandu Anto">
                <h3>Anto Bono</h3>
                <p><strong>Keahlian:</strong> Spesialis jalur panjang (semua level).<br><strong>Bahasa:</strong> Indonesia, Inggris (Dasar).<br><strong>Kontak:</strong> +62 812 3456 7890 (WA)</p>
            </div>
            <div class="guide-card">
                <img src="{{ asset('assets/images/phenomenon/guide2.jpg') }}" alt="Foto Pemandu Udin">
                <h3>Udin Kampar</h3>
                <p><strong>Keahlian:</strong> Pelatih sabar untuk pemula.<br><strong>Bahasa:</strong> Indonesia.<br><strong>Kontak:</strong> +62 812 9876 5432 (WA)</p>
            </div>
             <div class="guide-card">
                <img src="{{ asset('assets/images/phenomenon/guide3.jpg') }}" alt="Foto Pemandu Rina">
                <h3>Rina Pelalawan</h3>
                <p><strong>Keahlian:</strong> Teknik manuver tingkat menengah.<br><strong>Bahasa:</strong> Indonesia, Melayu.<br><strong>Kontak:</strong> +62 812 1122 3344 (WA)</p>
            </div>
        </div>
    </section>
@endsection