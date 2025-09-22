@extends('layouts.app')

@section('title', 'Login - The Bono Wave')

@section('content')
<div class="auth-container">
    <div class="auth-box">
        <h1 class="auth-title">Selamat Datang Kembali</h1>
        <p class="auth-subtitle">Masuk untuk melanjutkan ke dashboard Anda.</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

           <div class="form-group">
    <label for="password">Password</label>
    <div class="password-wrapper">
        <input id="password" type="password" name="password" required autocomplete="current-password">
        <i class="fas fa-eye toggle-password"></i>
    </div>
    @error('password')
        <span class="error-message">{{ $message }}</span>
    @enderror
</div>

            <div class="form-group-row">
                <div class="remember-me">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Ingat Saya</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-password">
                        Lupa Password?
                    </a>
                @endif
            </div>

            <button type="submit" class="btn-primary auth-btn">Login</button>

            <p class="switch-auth">Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </form>
    </div>
</div>
@endsection