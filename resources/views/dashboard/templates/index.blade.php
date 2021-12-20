@extends('layouts.dashboard')
@section('content')
    <section class="nav-section app-bg-denim-500 border-bottom py-3">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-start align-items-lg-start">
                <div class="">
                    <h1 class="mb-0 fs-3">
                        <span class="text-white">{{ ucwords($type) }} Templates</span>
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
            <div class="pt-3">
                <a class="app-link-white" href="{{ route('dashboard.index') }}"><i class="bi-arrow-left"></i> Back to categories</a>
            </div>
        </div>
    </section>
    @livewire('system-template', ['templates' => $templates, 'temp' => $temp])
@endsection
@section('scripts')
@endsection

@section('modals')

{{-- SAVE TEMPLATE --}}
<div class="modal fade" id="confirmCopyModal" tabindex="-1" role="dialog" aria-labelledby="confirmCopyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="mb-0" id="confirmCopyModalLabel">Save Template</h6>
                <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <small class="small">Do you want to save this templates for later use</small>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-secondary">No</button>
                <button type="button" onclick="window.livewire.emit('saveTemplateConfirmed')" class="btn btn-primary">Yes, Save</button>
            </div>
        </div>
    </div>
</div>

{{-- ENTER TEMPLATE NAME--}}
<div class="modal fade" id="saveSystemTemplateNameModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="mb-0">Save Template</h6>
                <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <form name="save-system-template" action="#" method="POST">
                    @csrf
                    <div class="form-group app-form-group mb-3">
                        <label class="mb-1">Template Name</label>
                        <input class="form-control" id="duplicate-template-name" name="template-name" type="text" placeholder="Template Name" required>
                        <small class="small text-muted">Template name should be unique to avoid conflict...</small>
                    </div>
                    <div class="">
                        <button class="btn app-btn-primary w-100">
                            <i class="bi-plus"></i> Save Template
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
