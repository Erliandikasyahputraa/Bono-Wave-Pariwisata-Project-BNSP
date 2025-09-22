<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // WAJIB: Impor "alat" untuk manajemen file

class StoryController extends Controller
{
    /**
     * Menampilkan daftar semua cerita.
     */
    public function index()
    {
        $stories = Story::latest()->get(); // Mengambil data terbaru lebih dulu
        return view('admin.stories.index', ['stories' => $stories]);
    }

    /**
     * Menampilkan formulir untuk membuat cerita baru.
     */
    public function create()
    {
        return view('admin.stories.create');
    }

    /**
     * Menyimpan cerita baru ke database, termasuk gambar.
     */
    public function store(Request $request)
    {
        // Validasi data, termasuk file gambar
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Boleh kosong, harus gambar, maks 2MB
        ]);

        // Jika ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Simpan gambar di folder 'storage/app/public/story_images'
            $path = $request->file('image')->store('story_images', 'public');
            // Simpan path file ke dalam data yang akan dimasukkan ke database
            $validatedData['image_path'] = $path;
        }

        Story::create($validatedData);

        return redirect()->route('stories.index')->with('success', 'Cerita baru berhasil ditambahkan!');
    }

    /**
     * Menampilkan satu cerita spesifik.
     */
    public function show(Story $story)
    {
        return view('stories.show', ['story' => $story]);
    }

    /**
     * Menampilkan formulir untuk mengedit cerita.
     */
    public function edit(Story $story)
    {
        return view('admin.stories.edit', ['story' => $story]);
    }

    /**
     * Memperbarui cerita di database, termasuk gambar.
     */
      public function update(Request $request, Story $story)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|max:255',
            'author' => 'sometimes|required|max:255',
            'content' => 'sometimes|required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($story->image_path) {
                // Gunakan disk 'public' secara eksplisit
                Storage::disk('public')->delete($story->image_path);
            }
            // Unggah gambar baru
            $path = $request->file('image')->store('story_images', 'public');
            $validatedData['image_path'] = $path;
        } else {
            // Jika tidak ada file baru diunggah, tapi input 'image' ada (misal kosong)
            // dan kita tidak ingin menghapus gambar lama secara sengaja
            // Kita tidak perlu melakukan apa-apa di sini karena Laravel akan menjaga nilai lama
            // jika 'image_path' tidak ada di $validatedData.
        }

        $story->update($validatedData);

        return redirect()->route('stories.index')->with('success', 'Cerita berhasil diperbarui!');
    }

    public function destroy(Story $story)
    {
        // Hapus gambar terkait dari storage jika ada
        if ($story->image_path) {
            // Gunakan disk 'public' secara eksplisit
            Storage::disk('public')->delete($story->image_path);
        }
        // Hapus data dari database
        $story->delete();

        return redirect()->route('stories.index')->with('success', 'Cerita berhasil dihapus!');
    }
}
