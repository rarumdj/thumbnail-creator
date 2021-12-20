@extends('layouts.dashboard')
@section('content')
    <section class="h-100">
        <div class="container h-100">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>
            @endif

            <div class="row h-100">
                <div class="col-md-3 border-end px-0 app-bg-white-50">
                    <div class="list-group list-group-flush d-flex flex-row flex-md-column overflow-x-auto border-bottom">
                        <a href="{{ route('dashboard.profile.index', ['id'=>'maven-ti']) }}" class="list-group-item py-3 list-group-item-action text-nowrap">
                            <span class="me-2"><i class="bi-pencil-square"></i></span>
                            <span class="text-nowrap">Edit Profile</span>
                        </a>
                        <a href="{{ route('dashboard.profile.password', ['id'=>'maven-ti']) }}" class="list-group-item py-3 list-group-item-action text-nowrap">
                            <span class="me-2"><i class="bi-shield-lock"></i></span>
                            <span class="text-nowrap">Password & Security</span>
                        </a>
                        <div class="list-group-item py-3 text-white app-bg-denim-600 text-nowrap" aria-current="true">
                            <span class="me-2"><i class="bi-share"></i></span>
                            <span class="text-nowrap">Social Account</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 app-bg-white-50">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-start align-items-lg-start py-3">
                        <div class="">
                            <h5 class="mb-0">
                                <span class="app-text-gray-700">Connect Social Accounts</span>
                            </h5>
                        </div>
                        <div class="">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route("dashboard.index") }}" class="app-link-accent">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile Setting</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-md-7">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <a href="{{ route('facebook.redirect') }}" class="btn btn-primary w-100">
                                        <span class="d-flex justify-content-start">
                                            <span class="pe-2 border-1 border-end border-light">
                                                <i class="bi-facebook"></i>
                                            </span>
                                            <span class="text-center flex-grow-1">
                                                Facebook
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn app-btn-accent w-100">
                                        <span class="d-flex justify-content-start">
                                            <span class="pe-2 border-1 border-end border-light">
                                                <i class="bi-instagram"></i>
                                            </span>
                                            <span class="text-center flex-grow-1">
                                                Instagram
                                            </span>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-6 ">
                                    <button class="btn btn-info text-white w-100">
                                        <span class="d-flex justify-content-start">
                                            <span class="pe-2 border-1 border-end border-light">
                                                <i class="bi-linkedin"></i>
                                            </span>
                                            <span class="text-center flex-grow-1">
                                                Linkedin
                                            </span>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-danger w-100">
                                        <span class="d-flex justify-content-start">
                                            <span class="pe-2 border-1 border-end border-light">
                                                <i class="bi-youtube"></i>
                                            </span>
                                            <span class="text-center flex-grow-1">
                                                Youtube
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

@endsection
