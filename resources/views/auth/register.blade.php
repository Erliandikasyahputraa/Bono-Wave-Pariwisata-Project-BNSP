@extends('layouts.app')

@section('title', 'Register - The Bono Wave')

@section('content')
<div class="auth-container">
    <div class="auth-box">
        <h1 class="auth-title">Buat Akun Baru</h1>
        <p class="auth-subtitle">Bergabunglah dengan komunitas petualang Bono.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

          {{-- Untuk kolom Password --}}
<div class="form-group">
    <label for="password">Password</label>
    <div class="password-wrapper">
        <input id="password" type="password" name="password" required autocomplete="new-password">
        <i class="fas fa-eye toggle-password"></i>
    </div>
    @error('password')
        <span class="error-message">{{ $message }}</span>
    @enderror
</div>

{{-- Untuk kolom Konfirmasi Password --}}
<div class="form-group">
    <label for="password-confirm">Konfirmasi Password</label>
    <div class="password-wrapper">
        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        <i class="fas fa-eye toggle-password"></i>
    </div>
</div>

            <button type="submit" class="btn-primary auth-btn">Register</button>

            <p class="switch-auth">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
        </form>
    </div>
</div>
@endsection