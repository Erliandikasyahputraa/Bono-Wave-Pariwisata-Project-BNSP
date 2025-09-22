<?php

namespace App\Http\Controllers;

use App\Models\Story; // Import model Story
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Fungsi untuk menampilkan halaman galeri
    public function gallery()
    {
        // Ambil semua data cerita dari database
        $stories = Story::all();

        // Kirim data ke view 'gallery.blade.php'
        return view('gallery', ['stories' => $stories]);
    }
}