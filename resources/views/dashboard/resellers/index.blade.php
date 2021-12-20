@extends('layouts.dashboard')
@section('content')
    <section class="nav-section bg-white border-bottom py-3">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-start align-items-lg-start">
                <div class="">
                    <h4 class="mb-0">
                        <span class="app-text-denim-900">Resellers</span>
                    </h4>
                    <small class="text-muted small">See resellers details </small>
                </div>
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route("dashboard.index") }}" class="app-link-accent">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Resellers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>
    @endif

    <section class="py-3">
        <div class="container">
            <div class="py-3 d-flex justify-content-between align-items-center">
                <form class="">
                    <div class="form-group app-form-group">
                        <input type="search" class="form-control search-input-right bg-white" placeholder="Search..." name="" id="">
                    </div>
                </form>
                <div class="">
                    <button class="btn app-btn-accent" data-bs-toggle="modal" data-bs-target="#addResellersModal">
                        <i class="bi-plus"></i> Add Reseller
                    </button>
                </div>
            </div>
            @livewire('reseller-list', ['resellerUsers' => $resellerUsers])
            <div class="pt-3 al">
                <nav aria-label="...">
                    <ul class="pagination app-pagination-primary justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
@section('modals')
    <div class="modal fade" id="addResellersModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0">New Reseller</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('reseller.create') }}">
                        @csrf
                        <input type="hidden" value="FE" class="form-control" id="acls" name="acls" readonly required>
                        <div class="row g-3">
                            <div class="form-group app-form-group mt-1 col-md-12">
                                <label class="mb-1" for="firstName">Fullname</label>
                                <input class="form-control" id="firstName" value="{{ old('name') }}" name="name" type="text" placeholder="John Doe" required>
                            </div>
                            <div class="form-group app-form-group mt-1 col-12">
                                <label class="mb-1" for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="example@example.com" required>
                                <small class="small text-muted">Resellers Email should be uniqure</small>
                            </div>
                            <div class="form-group app-form-group mt-1 col-md-6">
                                <label class="mb-1" for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="*****" required>
                            </div>
                            <div class="form-group app-form-group mt-1  col-md-6">
                                <label class="mb-1" for="passwordConfirm">Confirm Password</label>
                                <input class="form-control" id="passwordConfirm" name="password_confirmation" type="password" placeholder="****" required>
                            </div>
                        </div>
                        <div class="text-end mt-3">
                            <button class="btn app-btn-primary">
                                <i class="bi-plus"></i> Add Reseller
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- DELETE USER --}}
    <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0" id="deleteUserModalLabel">Delete User</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <small class="small">Are you sure you want to delete this user</small>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-secondary">No</button>
                    <button type="button" onclick="window.livewire.emit('deleteUserConfirmed')" class="btn btn-primary">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- CHANGE USER PASSWORD MODAL --}}
    <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0">Change User Password</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="password_form">
                        @csrf
                        <div class="row g-3">
                            <div class="form-group app-form-group mt-1 col-md-6">
                                <label class="mb-1" for="password">Password</label>
                                <input class="form-control" id="password" name="edit_password" type="password" placeholder="*****" required>
                            </div>
                            <div class="form-group app-form-group mt-1  col-md-6">
                                <label class="mb-1" for="passwordConfirm">Confirm Password</label>
                                <input class="form-control" id="passwordConfirm" name="edit_password_confirmation" type="password" placeholder="****" required>
                            </div>
                        </div>
                        <div class="text-end mt-3">
                            <button id="change-password-btns" class="btn app-btn-primary">
                                <i class="bi-plus"></i> Change Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jquery-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@endsection
