@extends('layouts.admin')

@section('title', 'Tambah Cerita Baru')

@section('content')
    <div class="content-header">
        <h1>Tambah Cerita Baru</h1>
        <a href="{{ route('stories.index') }}" class="btn" style="background-color: var(--admin-border);">Batal</a>
    </div>

    <div class="content-box">
        <form action="{{ route('stories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" id="title" name="title" required value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" id="author" name="author" required value="{{ old('author') }}">
            </div>
            <div class="form-group">
                <label for="content">Isi Cerita</label>
                <textarea id="content" name="content" rows="10" required>{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="btn">Simpan Cerita</button>
        </form>
    </div>
@endsection