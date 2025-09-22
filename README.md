# The Bono Wave - Website Pariwisata Riau

<div align="center">
  <img src="https://i.ibb.co/rfxDbqx9/Cuplikan-layar-2025-09-22-122822.png" alt="Screenshot Halaman Depan The Bono Wave" width="800"/>
</div>

<p align="center">
  <em>Aplikasi web pariwisata dinamis untuk Ombak Bono di Riau, dibangun menggunakan Laravel. Mencakup sistem manajemen konten (CRUD) dan integrasi front-end. Proyek untuk sertifikasi BNSP.</em>
</p>

<div align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel Badge"/>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Badge"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL Badge"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript Badge"/>
</div>

---

## 🚀 Fitur Utama

-   🎨 **Tampilan Depan Responsif:** 5 halaman yang diintegrasikan ke dalam Laravel Blade dengan CSS kustom.
-   🔐 **Panel Admin Aman:** Dashboard untuk mengelola konten, dilindungi oleh sistem otentikasi bawaan Laravel.
-   ✍️ **Manajemen Konten (CRUD):** Fungsionalitas penuh untuk menambah, melihat, mengedit, dan menghapus "Cerita Petualang".
-   ✨ **Interaktivitas Pengguna:** Galeri foto Masonry dengan efek Lightbox dan Peta Interaktif menggunakan Leaflet.js.
-   🛡️ **Sistem Level Pengguna (Direncanakan):** Fondasi untuk membedakan peran 'admin' dan 'user'.

---

## 🛠️ Tumpukan Teknologi (Tech Stack)

| Kategori | Teknologi |
| :--- | :--- |
| **Framework** | Laravel 12+ |
| **Bahasa** | PHP 8.1+, JavaScript (ES6) |
| **Database** | MySQL |
| **UI Front-end** | CSS Kustom |
| **UI Backend** | Blade dengan CSS Kustom |
| **Tools** | Composer, NPM, Vite, Laragon |
| **Webserver** | Apache |

---

## ⚙️ Instalasi Lokal

1.  **Clone repositori:**
    ```bash
    git clone [https://github.com/Erliandikasyahputraa/Bono-Wave-Pariwisata-Project-BNSP.git](https://github.com/Erliandikasyahputraa/Bono-Wave-Pariwisata-Project-BNSP.git)
    ```
2.  **Masuk ke direktori proyek:**
    ```bash
    cd Bono-Wave-Pariwisata-Project-BNSP
    ```
3.  **Instal dependensi PHP:**
    ```bash
    composer install
    ```
4.  **Instal dependensi JavaScript:**
    ```bash
    npm install
    ```
5.  **Salin file `.env`:**
    ```bash
    cp .env.example .env
    ```
6.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```
7.  **Konfigurasi database Anda di file `.env`**.
8.  **Jalankan migrasi database:**
    ```bash
    php artisan migrate
    ```
9.  **Jalankan server pengembangan:**
    ```bash
    php artisan serve
    ```