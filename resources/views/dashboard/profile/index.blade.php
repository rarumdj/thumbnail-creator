@extends('layouts.dashboard')
@section('content')
    <section class="h-100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-3 border-end px-0 app-bg-white-50">
                    <div class="list-group list-group-flush d-flex flex-row flex-md-column overflow-x-auto border-bottom">
                        <div class="list-group-item py-3 text-white app-bg-denim-600 text-nowrap" aria-current="true">
                            <span class="me-2"><i class="bi-pencil-square"></i></span>
                            <span class="text-nowrap">Edit Profile</span>
                        </div>
                        <a href="{{ route('dashboard.profile.password', ['id'=>'maven-ti']) }}" class="list-group-item py-3 list-group-item-action text-nowrap">
                            <span class="me-2"><i class="bi-shield-lock"></i></span>
                            <span class="text-nowrap">Password & Security</span>
                        </a>
                        <a href="{{ route('dashboard.profile.social-account', ['id'=>'maven-ti']) }}" class="list-group-item py-3 list-group-item-action text-nowrap">
                            <span class="me-2"><i class="bi-share"></i></span>
                            <span class="text-nowrap">Social Account</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 app-bg-white-50">
                    <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-start align-items-lg-start py-3">
                        <div class="">
                            <h5 class="mb-0">
                                <span class="app-text-gray-700">Edit Profile</span>
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
                            <form action="">
                                <div class="row g-3">
                                    <div class="form-group app-form-group mt-1 col-md-12">
                                        <label class="mb-1" for="firstName">First Name</label>
                                        <input class="form-control bg-white" id="firstName" name="first_name" type="text" placeholder="John" required>
                                    </div>
                                    <div class="form-group app-form-group mt-1 col-md-12">
                                        <label class="mb-1" for="lastName">Last Name</label>
                                        <input class="form-control bg-white" id="lastName" name="last_name" type="text" placeholder="Pope" required>
                                    </div>
                                    <div class="form-group app-form-group mt-1 col-12">
                                        <label class="mb-1" for="email">Email</label>
                                        <input class="form-control disabled text-muted" id="email" name="email" type="email" value="example@example.com" placeholder="example@example.com" disabled>
                                        <small class="small text-muted"></small>
                                    </div>
                                </div>
                                <div class="text-end mt-3">
                                    <button class="btn app-btn-primary">
                                        <i class="bi-arrow-repeat"></i> Update Profile
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

@endsection
