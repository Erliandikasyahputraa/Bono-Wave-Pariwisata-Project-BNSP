<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Menampilkan daftar semua cerita.
     */
    public function index()
    {
        $stories = Story::all();
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
     * Menyimpan cerita baru ke database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
        ]);

        Story::create($validatedData);

        return redirect()->route('stories.index')->with('success', 'Cerita baru berhasil ditambahkan!');
    }

    /**
     * Menampilkan satu cerita spesifik. (Boleh dikosongkan)
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
     * Memperbarui cerita di database.
     */
    public function update(Request $request, Story $story)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
        ]);

        $story->update($validatedData);

        return redirect()->route('stories.index')->with('success', 'Cerita berhasil diperbarui!');
    }

    /**
     * Menghapus cerita dari database.
     */
    public function destroy(Story $story)
    {
        $story->delete();

        return redirect()->route('stories.index')->with('success', 'Cerita berhasil dihapus!');
    }
}