@extends('layouts.auth')
@section('content')

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-warning fade show" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif
<form action="{{ route('login') }}" method="POST" name="login-form" class="">
    @csrf
    <div class=" text-center">
        <img class="mb-3" src="{{ asset('assets/img/logo/logo-icon.svg') }}" alt="" width="72" height="57">
        <h1 class="h5 mb-3">Hi, Welcome Back!</h1>
    </div>
    <div class="p-4 bg-white app-rounded-5 shadow-sm">
        <div class="form-group app-form-group mt-1">
            <label class="mb-1" for="email">Email</label>
            <input class="form-control bg-white @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" type="email" placeholder="example@example.com" required>
        </div>
        <div class="form-group app-form-group mt-1">
            <label class="mb-1" for="password">Password</label>
            <input class="form-control bg-white @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="****" required>
        </div>
        <div class="form-group app-form-group my-3">
            <div class="form-check">
                <input name="remember" class="form-check-input" type="checkbox" value="true" id="rememberMe">
                <label class="form-check-label text-dark" for="rememberMe">
                    Remember me
                </label>
            </div>
        </div>
        <button class="w-100 btn app-btn-primary login_btn" type="submit">Sign in</button>
    </div>
    <div class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; {{ date('Y') }}</p>
    </div>
</form>
@endsection
