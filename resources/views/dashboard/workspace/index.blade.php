@extends('layouts.dashboard')
@section('content')
    <section class="nav-section bg-white border-bottom py-3">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-start align-items-lg-start">
                <div class="">
                    <h4 class="mb-0">
                        <span class="app-text-denim-900">Workspaces</span>
                    </h4>
                    <small class="text-muted small">See your workspaces</small>
                </div>
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route("dashboard.index") }}" class="app-link-accent">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Workspace</li>
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
                    <button class="btn app-btn-accent" data-bs-toggle="modal" data-bs-target="#addWorkspaceModal">
                        <i class="bi-plus"></i> Add Workspace
                    </button>
                </div>
            </div>
            @livewire('workspace-list', ['workspaces' => $workspaces])
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
    {{-- CREATE NEW WORKSPACE --}}
    <div class="modal fade" id="addWorkspaceModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0">New Workspace</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action=" {{ route('dashboard.workspace.store') }}" method="POST">
                        @csrf
                        <div class="form-group app-form-group mb-3">
                            <label class="mb-1" for="name">Workspace Name</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Add workspace name" required>
                            <small class="small text-muted">Workspace name should be uniqure to avoid conflict...</small>
                        </div>
                        <div class="">
                            <button class="btn app-btn-primary w-100">
                                <i class="bi-plus"></i> Add Workspace
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- EDIT WORKSPACE --}}
    <div class="modal fade" id="editWorkspaceModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0">New Workspace</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="edit-workspace" action=" {{ route('dashboard.workspace.update') }}" method="POST">
                        @csrf
                        <input type="hidden" id="workspace_id" name="id">
                        <div class="form-group app-form-group mb-3">
                            <label class="mb-1" for="edit-workspace-name">Workspace Name</label>
                            <input class="form-control" id="edit-workspace-name" name="name" type="text" placeholder="Add workspace name" required>
                            <small class="small text-muted">Workspace name should be uniqure to avoid conflict...</small>
                        </div>
                        <div class="">
                            <button id="edit-workspace-btn" class="edit-workspace-btn btn app-btn-primary w-100">
                                <i class="bi-plus"></i> Edit Workspace
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteWorkspaceModal" tabindex="-1" role="dialog" aria-labelledby="deleteWorkspaceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0" id="deleteWorkspaceModalLabel">Delete Workspace</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <small class="small">Are you sure you want to delete this workspace</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" onclick="window.livewire.emit('deleteWorkspaceConfirmed')" class="btn btn-primary">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
