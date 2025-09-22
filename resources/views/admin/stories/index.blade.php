@extends('layouts.admin')

@section('title', 'Kelola Cerita')

@section('content')
    <div class="content-header">
        <h1>Cerita Para Petualang</h1>
        <a href="{{ route('stories.create') }}" class="btn">Tambah Cerita Baru</a>
    </div>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="content-box">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="width: 5%;">ID</th>
                    <th style="width: 20%;">Gambar</th>
                    <th style="width: 30%;">Judul</th>
                    <th style="width: 25%;">Penulis</th>
                    <th style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($stories as $story)
                    <tr style="vertical-align: middle;">
                        <td style="text-align: center;">{{ $story->id }}</td>
                        <td style="text-align: center;">
                            @if($story->image_path)
                                <img src="{{ asset('storage/' . $story->image_path) }}" alt="Gambar Cerita" style="max-height: 80px; width: auto; border-radius: 5px; display: block; margin: 0 auto;">
                            @else
                                <small>Tidak ada gambar</small>
                            @endif
                        </td>
                        <td>{{ $story->title }}</td>
                        <td>{{ $story->author }}</td>
                        <td style="text-align: center;">
                            <div style="display: flex; gap: 10px; align-items: center; justify-content: center;">
                                @if (auth()->user()->role == 'admin')
                                    {{-- Jika ADMIN: Tampilkan Edit dan Hapus --}}
                                    <a href="{{ route('stories.edit', $story->id) }}" class="btn btn-edit" style="padding: 8px 12px;">Edit</a>
                                    <form action="{{ route('stories.destroy', $story->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus cerita ini?');" style="margin: 0;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete" style="padding: 8px 12px; border:none; cursor:pointer;">Hapus</button>
                                    </form>
                                @elseif (auth()->user()->role == 'user')
                                    {{-- Jika USER BIASA: Hanya tampilkan Edit --}}
                                    <a href="{{ route('stories.edit', $story->id) }}" class="btn btn-edit" style="padding: 8px 12px;">Edit</a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align:center;">Belum ada cerita.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection