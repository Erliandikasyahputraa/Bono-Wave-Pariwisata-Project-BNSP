<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    public function index()
    {
        // Selalu tampilkan semua cerita untuk semua pengguna
        $stories = Story::latest()->get();
        return view('admin.stories.index', ['stories' => $stories]);
    }

    public function create()
    {
        return view('admin.stories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // Tetap simpan user_id agar kita tahu siapa yang membuat
        $validatedData['user_id'] = auth()->id();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('story_images', 'public');
            $validatedData['image_path'] = $path;
        }
        
        Story::create($validatedData);
        
        return redirect()->route('stories.index')->with('success', 'Cerita baru berhasil ditambahkan!');
    }
    
    public function show(Story $story)
    {
        return view('stories.show', ['story' => $story]);
    }

    public function edit(Story $story)
    {
        return view('admin.stories.edit', ['story' => $story]);
    }

   public function update(Request $request, Story $story)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|max:255',
            'author' => 'sometimes|required|max:255',
            'content' => 'sometimes|required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        try {
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($story->image_path && Storage::disk('public')->exists($story->image_path)) {
                    Storage::disk('public')->delete($story->image_path);
                }
                $path = $request->file('image')->store('story_images', 'public');
                $validatedData['image_path'] = $path;
            }
            
            $story->update($validatedData);
            
            return redirect()->route('stories.index')->with('success', 'Cerita berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui cerita: ' . $e->getMessage());
        }
    }
    
    
    public function destroy(Story $story)
    {
        try {
            // Hapus gambar jika ada
            if ($story->image_path && Storage::disk('public')->exists($story->image_path)) {
                Storage::disk('public')->delete($story->image_path);
            }
            
            $story->delete();
            
            return redirect()->route('stories.index')->with('success', 'Cerita berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus cerita: ' . $e->getMessage());
        }
    }

}