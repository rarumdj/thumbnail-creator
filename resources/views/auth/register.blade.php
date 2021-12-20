@extends('layouts.auth')
@section('content')
<form action="{{ route('register') }}" method="POST" class="">
    @csrf
    <input type="hidden" value="FE" class="form-control" id="acls" name="acls" readonly required>
    <div class=" text-center">
        <img class="mb-3" src="{{ asset('assets/img/logo/logo-icon.svg') }}" alt="" width="72" height="57">
        <h1 class="h5 mb-3">Hi, We're glad to have you!</h1>
    </div>
    <div class="p-4 bg-white app-rounded-5 shadow-sm">
        <div class="form-group app-form-group mt-1">
            <label class="mb-1" for="email">Fullname</label>
            <input class="form-control bg-white @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" name="name" type="text" placeholder="John Doe" required>
            @error('name')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group app-form-group mt-1">
            <label class="mb-1" for="email">Email</label>
            <input class="form-control bg-white @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="example@example.com" required>
            @error('email')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group app-form-group mt-1">
            <label class="mb-1" for="password">Password</label>
            <input class="form-control bg-white" id="password" name="password" type="password" placeholder="******" required>
            @error('password')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group app-form-group mt-1">
            <label class="mb-1" for="password">Password Confirmation</label>
            <input class="form-control bg-white" id="password" name="password_confirmation" type="password" placeholder="******" required>
        </div>
        <div class="form-group app-form-group my-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                <label class="form-check-label text-dark" for="rememberMe">
                    Remember me
                </label>
            </div>
        </div>
        <button class="w-100 btn app-btn-primary" type="submit">Sign in</button>
    </div>
    <div class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; {{ date('Y') }}</p>
    </div>
</form>
@endsection
