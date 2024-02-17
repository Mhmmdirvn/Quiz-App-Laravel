@extends('layouts.auth')
@section('content')
    <h5 class="text-dark fw-bold mb-4">Sign Up</h5>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="mb-1">Nama Lengkap</label>
            <input placeholder="Tulis nama kamu" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="mb-1">Alamat Email</label>
            <input placeholder="Tulis alamat email kamu" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="mb-1">Password</label>
            <input placeholder="Masukkan password kamu" id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="mb-1">Konfirmasi Password</label>
            <input id="password_confirmation" type="password"
                class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation" autofocus>

        </div>
        <button class="btn btn-primary d-block w-100 mb-3" type="submit">Sign Up</button>
        <p class="mb-0 text-secondary text-center">
            Sudah memiliki akun? <a href="{{ route('login') }}">Login</a>
        </p>
    </form>
@endsection
