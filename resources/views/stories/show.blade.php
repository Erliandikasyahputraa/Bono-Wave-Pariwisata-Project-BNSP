@extends('layouts.app')

@section('title', $story->title)

@section('content')
    <div class="story-detail-container">
        <article class="story-detail">
            <h1 class="story-title">{{ $story->title }}</h1>
            <p class="story-meta">Ditulis oleh: <strong>{{ $story->author }}</strong> pada {{ $story->created_at->format('d F Y') }}</p>

            @if($story->image_path)
                <img class="story-image" src="{{ asset('storage/' . $story->image_path) }}" alt="{{ $story->title }}">
            @endif

            <div class="story-content">
                {!! nl2br(e($story->content)) !!}
            </div>

            <a href="{{ url('/gallery') }}" class="btn-primary" style="margin-top: 30px;">&laquo; Kembali ke Galeri</a>
        </article>
    </div>
@endsection