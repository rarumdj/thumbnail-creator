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
                        <i class="bi-plus"></i> Add User
                    </button>
                </div>
            </div>
            <div class="card border-0 overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle app-table-md app-table">
                            <thead class="app-bg-primary text-white">
                                <tr>
                                    <th scope="col">User</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Campaign(s)</th>
                                    <th class="text-end" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 3; $i++)
                                <tr>
                                    <td class="">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="">
                                                <div class="avatar avatar-md rounded-circle overflow-hidden">
                                                    <img src="{{ asset('assets/img/avatar/user-4.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0 ms-2 text-secondary app-fw-400"> Frank Lampard</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="">maven.gerard@gmail.com</span>
                                    </td>
                                    <td>
                                        <span class="">3</span>
                                    </td>
                                    <td class="">
                                        <div class="d-flex justify-content-end">
                                            <button class="app-btn-icon app-btn-icon-accent me-2">
                                                <i class="bi-eye"></i>
                                            </button>
                                            <button class="app-btn-icon app-btn-icon-accent me-2">
                                                <i class="bi-pencil"></i>
                                            </button>
                                            <button class="app-btn-icon app-btn-icon-accent">
                                                <i class="bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
                    <form action="">
                        <div class="row g-3">
                            <div class="form-group app-form-group mt-1 col-md-6">
                                <label class="mb-1" for="firstName">First Name</label>
                                <input class="form-control" id="firstName" name="first_name" type="text" placeholder="John" required>
                            </div>
                            <div class="form-group app-form-group mt-1 col-md-6">
                                <label class="mb-1" for="lastName">Last Name</label>
                                <input class="form-control" id="lastName" name="last_name" type="text" placeholder="Pope" required>
                            </div>
                            <div class="form-group app-form-group mt-1 col-12">
                                <label class="mb-1" for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="example@example.com" required>
                                <small class="small text-muted">Resellers Email should be uniqure</small>
                            </div>
                            <div class="form-group app-form-group mt-1 col-md-6">
                                <label class="mb-1" for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="" required>
                            </div>
                            <div class="form-group app-form-group mt-1  col-md-6">
                                <label class="mb-1" for="passwordConfirm">Confirm Password</label>
                                <input class="form-control" id="passwordConfirm" name="password_confirm" type="password" placeholder="&middot;&middot;&middot;&middot;" required>
                            </div>
                        </div>
                        <div class="text-end mt-3">
                            <button class="btn app-btn-primary">
                                <i class="bi-plus"></i> Add user
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
