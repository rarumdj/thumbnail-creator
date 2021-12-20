@extends('layouts.dashboard')
@section('content')
    <section class="nav-section bg-white border-bottom py-3">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-start align-items-lg-start">
                <div class="">
                    <h4 class="mb-0">
                        <span class="app-text-denim-900">Vimeo Videos</span>
                    </h4>
                    <small class="text-muted small">See your vimeo videos</small>
                </div>
                <div class="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route("dashboard.index") }}" class="app-link-accent">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vimeo Videos</li>
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

    {{-- VIDEOS SECTION --}}
    @livewire('vimeo-videos', ['videos' => $videos ?? []])

@endsection
@section('modals')
    {{-- SELECT THUMBNAIL --}}
    <div class="modal fade" id="thumbnailListModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable modal-fullscreen-md-down" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="d-flex justify-content-start align-items-center">
                        <img class="" src="{{ asset('assets/img/logo/logo-icon.svg') }}" height="auto" width="18" alt="">
                        <span class="mb-0 flex-grow-1 ms-1">
                            <span class="">
                                <span class="app-text-primary">Thumb</span><span class="app-text-accent">nail</span>(s)
                            </span>
                        </span>
                    </h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        @forelse ($templates as $template)
                            <div data-thumbnail-id="{{ $template->id }}" class="thumbnail-selectable col-md-4 col-6 col-lg-3">
                                <a href="#" class="card shadow-0 border">
                                    <div class="ratio ratio-4x3 p-0">
                                        @production
                                            <img src=" <?= asset('public/'.$template->image_path) ?>" alt="My thumbnail">
                                        @else
                                            <img src=" <?= asset($template->image_path) ?>" alt="My thumbnail">
                                        @endproduction
                                    </div>
                                </a>
                            </div>
                        @empty
                            
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CONFIRM CHANGE OF THUMBNAIL --}}
    <div class="modal fade" id="confirmThumbnailChangeModal" tabindex="-1" role="dialog" aria-labelledby="confirmThumbnailChangeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0" id="confirmThumbnailChangeModalLabel">Change Thumbnail</h6>
                    <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <small class="small">Please confirm you are changing this video thumbnail</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" onclick="window.livewire.emit('changeThumbnail')" class="btn btn-primary">Yes, Proceed</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
@endsection
