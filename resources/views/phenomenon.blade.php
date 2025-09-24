@extends('layouts.app')

@section('title', 'Fenomena Bono - The Bono Wave')

@section('content')
    <section class="section-padding page-title-section">
        <h1 class="page-title">Keajaiban di Jantung Sungai</h1>
        <p class="page-subtitle">Lebih dari sekadar ombak, Bono adalah fenomena alam dan budaya yang memukau dunia.</p>
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
                <ul>
                    <li><i class="fas fa-map-marked-alt"></i> Geografi: Terjadi di muara Sungai Kampar, Kabupaten Pelalawan, Riau, yang dikelilingi oleh ekosistem hutan gambut yang kaya.</li>
                    <li><i class="fas fa-cloud-sun-rain"></i> Iklim: Ombak terbesar muncul saat musim hujan (Oktober - Desember), didorong oleh volume air sungai yang lebih besar.</li>
                    <li><i class="fas fa-leaf"></i> Flora & Fauna: Area di sekitar sungai adalah rumah bagi berbagai satwa liar, menambah nuansa petualangan saat menyusuri sungai.</li>
                </ul>
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

   <section id="local-life" class="section-padding">
    <div class="culture-container">
        <div class="culture-image-collage">
            <img src="{{ asset('assets/images/phenomenon/petalangan.jpeg') }}" alt="petalangan" class="collage-img-1">
            <img src="{{ asset('assets/images/phenomenon/batik.jpeg') }}" alt="Batik" class="collage-img-2">
        </div>
        <div class="culture-text">
            <p class="section-tag">Kearifan Lokal</p>
            <h2 class="section-title">Nadi Kehidupan di Tepi Bono</h2>
            <p class="section-description" style="text-align: left;">
                Bagi masyarakat Desa Teluk Meranti, Bono bukan sekadar fenomena alam, melainkan bagian dari detak jantung kehidupan sehari-hari. Sungai Kampar adalah halaman depan rumah mereka, tempat para nelayan mencari nafkah dan anak-anak bermain. Kehidupan di sini berjalan selaras dengan ritme pasang surut.
            </p>
            <div class="culture-points">
                <div class="point-item">
                    <i class="fas fa-hand-holding-heart"></i>
                    <div>
                        <h4>Adat Menjaga Sungai</h4>
                        <p>Tradisi seperti "Petalangan" mengajarkan untuk tidak hanya mengambil dari alam, tetapi juga memberi kembali melalui rasa hormat dan upacara adat yang menjaga keharmonisan dengan sungai.</p>
                    </div>
                </div>
                <div class="point-item">
                    <i class="fas fa-handshake"></i>
                    <div>
                        <h4>Etika Bertamu</h4>
                        <p>Sebagai tamu, senyuman dan sapaan hangat akan selalu dibalas dengan keramahan. Mengenakan pakaian sopan saat berkeliling desa adalah cara terbaik untuk menghormati budaya Melayu yang santun.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection