@extends('layouts.dashboard')
@section('content')
    <section class="nav-section app-bg-denim-500 border-bottom py-3">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-start align-items-lg-start">
                <div class="">
                    <h1 class="mb-0 fs-3">
                        <span class="text-white">Create a Thumbnails or Banners</span>
                    </h1>
                    <small class="small app-text-white-75">Select a preset size or enter a custom graphic dimension to get started. </small>
                </div>
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route("dashboard.index") }}" class="app-link-white">Dashboard</a></li>
                            <li class="breadcrumb-item app-text-white-75" aria-current="page">Creator</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    @livewire('templates', ['templates' => $templates])
@endsection
@section('scripts')
@endsection

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">{{ $errors->first() }}</div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">{{ session()->get('error') }}</div>
    @endif

@section('modals')
    {{-- Duplicate Template --}}
    <div class="modal fade" id="duplicateDesignModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0">Duplicate Design</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="duplicate-template" action="#" method="POST">
                        @csrf
                        <div class="form-group app-form-group mb-3">
                            <label class="mb-1" for="duplicate-template-name">Template Name</label>
                            <input class="form-control" id="duplicate-template-name" name="duplicate-template-name" type="text" placeholder="Template Name" required>
                            <small class="small text-muted">Template name should be unique to avoid conflict...</small>
                        </div>
                        <div class="">
                            <button id="duplicate-template-btn" class="duplicate-template-btn btn app-btn-primary w-100">
                                <i class="bi-plus"></i> Duplicate Template
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- DELETE TEMPLATE --}}
    <div class="modal fade" id="deleteTemplateModal" tabindex="-1" role="dialog" aria-labelledby="deleteTemplateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0" id="deleteTemplateModalLabel">Delete Template</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <small class="small">Are you sure you want to delete this template</small>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-secondary">No</button>
                    <button type="button" onclick="window.livewire.emit('delete')" class="btn btn-primary">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- SHARE TEMPLATE --}}
    <div class="modal fade" id="shareTemplateModal" tabindex="-1" role="dialog" aria-labelledby="shareTemplateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0" id="shareTemplateModalLabel">Share Template</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <button onclick="window.livewire.emit('selectFacebookPage')" class="btn btn-primary w-100">
                                        <span class="d-flex justify-content-start">
                                            <span class="pe-2 border-1 border-end border-light">
                                                <i class="bi-facebook"></i>
                                            </span>
                                            <span class="text-center flex-grow-1">
                                                Facebook
                                            </span>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-info text-white w-100">
                                        <span class="d-flex justify-content-start">
                                            <span class="pe-2 border-1 border-end border-light">
                                                <i class="bi-twitter"></i>
                                            </span>
                                            <span class="text-center flex-grow-1">
                                                Twitter
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SELECT PAGE MODAL --}}
    <div class="modal fade" id="facebookSharePagesModal" tabindex="-1" role="dialog" aria-labelledby="facebookSharePagesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0" id="facebookSharePagesModalLabel">Select Pages</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="pages_to_share" action="#" method="POST">
                        @csrf
                        <div class="form-group app-form-group mb-3">
                            <label class="mb-1" for="duplicate-template-name">Select Pages</label>
                            <select class="form-control" name="pages" id="share_pages">
                                <option value="">Select Pages</option>
                            </select>
                        </div>
                        <div class="">
                            <button id="share_to_facebook_btn" class="share_to_facebook_btn btn app-btn-primary w-100">
                                <i class="bi-plus"></i> Share
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
