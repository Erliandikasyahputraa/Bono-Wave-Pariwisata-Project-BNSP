/*
================================
SCRIPT.JS - THE BONO WAVE (Versi Final)
================================
*/

// Event ini berjalan saat struktur dasar halaman siap
document.addEventListener('DOMContentLoaded', function() {

    // --- 1. FUNGSI NAVBAR SCROLLED ---
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            const isMinimalHeader = document.querySelector('.header-minimal');
            if (window.scrollY > 50 || isMinimalHeader) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // --- 2. FUNGSI MENU HAMBURGER MOBILE ---
    const hamburger = document.querySelector('.hamburger-menu');
    const navLinks = document.querySelector('.nav-links');
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    }

    // --- 3. FUNGSI LIGHTBOX GALERI ---
    const galleryItems = document.querySelectorAll('.masonry-item');
    const lightbox = document.getElementById('lightbox');
    if (galleryItems.length > 0 && lightbox) {
        const lightboxImg = document.getElementById('lightbox-img');
        const closeBtn = document.querySelector('.lightbox-close');
        const prevBtn = document.querySelector('.lightbox-prev');
        const nextBtn = document.querySelector('.lightbox-next');
        let currentIndex;

        const images = Array.from(galleryItems).map(item => item.querySelector('img').src);

        function showLightbox(index) {
            currentIndex = index;
            lightboxImg.src = images[currentIndex];
            lightbox.style.display = 'flex';
            setTimeout(() => lightbox.style.opacity = 1, 10);
        }

        function hideLightbox() {
            lightbox.style.opacity = 0;
            setTimeout(() => lightbox.style.display = 'none', 400);
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            lightboxImg.src = images[currentIndex];
        }

        function showPrevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            lightboxImg.src = images[currentIndex];
        }

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => showLightbox(index));
        });

        closeBtn.addEventListener('click', hideLightbox);
        nextBtn.addEventListener('click', showNextImage);
        prevBtn.addEventListener('click', showPrevImage);
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                hideLightbox();
            }
        });
    }
        const togglePasswordIcons = document.querySelectorAll('.toggle-password');

togglePasswordIcons.forEach(icon => {
    icon.addEventListener('click', function () {
        const passwordInput = this.previousElementSibling;
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Ganti ikon mata
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
});

// --- FUNGSI SIDEBAR TOGGLE ---
const sidebarToggle = document.getElementById('sidebar-toggle');
if (sidebarToggle) {
    sidebarToggle.addEventListener('click', function() {
        document.body.classList.toggle('sidebar-collapsed');
    });
}

}); // Penutup event listener DOMContentLoaded


// Event ini berjalan PALING AKHIR, setelah semua gambar dan aset lain selesai dimuat
window.onload = function() {
    // --- 4. FUNGSI PETA INTERAKTIF (LEAFLET.JS) ---
    const mapElement = document.getElementById('map');
    if (mapElement) {
        
        // Perbaikan untuk ikon marker yang hilang
        delete L.Icon.Default.prototype._getIconUrl;
        L.Icon.Default.mergeOptions({
            iconRetinaUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon-2x.png',
            iconUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
        });

        const telukMerantiCoords = [0.1442, 102.5634];
        const map = L.map('map').setView(telukMerantiCoords, 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker(telukMerantiCoords).addTo(map)
            .bindPopup('<b>Desa Teluk Meranti</b><br>Titik utama akses Ombak Bono.')
            .openPopup();

        // Perbaikan final untuk memastikan ukuran peta benar
        const mapObserver = new ResizeObserver(function() {
            map.invalidateSize();
        });
        mapObserver.observe(mapElement);
    }
};