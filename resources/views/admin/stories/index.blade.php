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
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar</th> <th>Judul</th>
                    <th>Penulis</th>
                    <th style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($stories as $story)
                    <tr>
                        <td>{{ $story->id }}</td>
                        <td>
                            @if($story->image_path)
                                <img src="{{ asset('storage/' . $story->image_path) }}" alt="Gambar Cerita" width="100" style="border-radius: 5px;">
                            @else
                                <small>Tidak ada gambar</small>
                            @endif
                        </td>
                        <td>{{ $story->title }}</td>
                        <td>{{ $story->author }}</td>
                        <td style="display: flex; gap: 10px; align-items: center;">
                            <a href="{{ route('stories.edit', $story->id) }}" class="btn btn-edit" style="padding: 8px 12px;">Edit</a>
                            <form action="{{ route('stories.destroy', $story->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus cerita ini?');" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" style="padding: 8px 12px; border:none; cursor:pointer;">Hapus</button>
                            </form>
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