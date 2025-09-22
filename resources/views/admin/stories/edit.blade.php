@extends('layouts.admin')

@section('title', 'Edit Cerita')

@section('content')
    <div class="content-header">
        <h1>Edit Cerita: {{ $story->title }}</h1>
        <a href="{{ route('stories.index') }}" class="btn" style="background-color: var(--admin-border);">Batal</a>
    </div>
    
    <div class="content-box">
        <form action="{{ route('stories.update', $story->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" id="title" name="title" value="{{ $story->title }}" required>
            </div>
            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" id="author" name="author" value="{{ $story->author }}" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar Profil Baru (Opsional)</label>
                <input type="file" id="image" name="image">
                @if($story->image_path)
                    <div style="margin-top:15px;">
                        <small>Gambar saat ini:</small><br>
                        <img src="{{ asset('storage/' . $story->image_path) }}" alt="Gambar saat ini" width="150" style="border-radius: 5px;">
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="content">Isi Cerita</label>
                <textarea id="content" name="content" rows="10" required>{{ $story->content }}</textarea>
            </div>
            <button type="submit" class="btn">Perbarui Cerita</button>
        </form>
    </div>
@endsection