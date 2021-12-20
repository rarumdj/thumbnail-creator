@extends('layouts.dashboard')
@section('content')
<section class="nav-section app-bg-denim-500 border-bottom py-3">
    <div class="container">
        <div
            class="d-flex flex-column flex-md-row justify-content-md-between justify-content-start align-items-lg-start">
            <div class="">
                <h1 class="mb-0 fs-3">
                    <span class="text-white">Welcome {{ ucwords( Auth::user()->name ) }}</span>
                </h1>
                <small class="small app-text-white-75">Select a preset size or enter a custom graphic dimension to get
                    started. </small>
            </div>
            <div class="pt-2">
                <a href="{{ route('app.creator') }}" class="btn btn-light app-text-primary bg-white">New Thumbnail</a>
            </div>
        </div>
    </div>
</section>
{{-- START HERE --}}

<section class="">
    <div class="container">
        <div class="py-3">

        </div>
        <div class="pb-3">
            <h2 class="border-bottom border-2 fs-5 app-text-gray-700 pb-2">Facebook</h2>
        </div>
        <div class="thumbnails-collection">
            <div class="row g-3">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/facebook/facebook_right_column.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Right Column</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/facebook/facebook_instant_artice.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Instant Article</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/facebook/facebook_marketPlace_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Marketplace Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/facebook/facebook_story.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Facebook Story</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/facebook/facebook_carousel_ads.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Facebook Carousel Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/facebook/facebook_collection_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Facebook Collection Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/facebook/facebook_messenger_ads.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Messanger Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/facebook/facebook_canvas_ads.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Canvas Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/facebook"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/facebook/facebook_news_feed.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">News Feeds</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/instagram"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/instagram-post.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="app-text-accent">
                                            <i class="bi-instagram"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Instagram Post</h6>
                                        <p class="text-muted small mb-0 text-truncate">1200px x 900px</p>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/linkedin"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/linkedin-post.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi-linkedin"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">LinkedIn Post</h6>
                                        <p class="text-muted small mb-0 text-truncate">1200px x 900px</p>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/facebook.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-primary">
                                            <i class="bi-facebook"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Promoted Pin</h6>
                                        <p class="text-muted small mb-0 text-truncate">1200px x 900px</p>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/youtube"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/youtube-thumbnail.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Youtube Thumbnail</h6>
                                        <p class="text-muted small mb-0 text-truncate">1200px x 900px</p>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- PINTEREST --}}
    <div class="container">
        <div class="py-3">

        </div>
        <div class="pb-3">
            <h2 class="border-bottom border-2 fs-5 app-text-gray-700 pb-2">Pinterest</h2>
        </div>
        <div class="thumbnails-collection">
            <div class="row g-3">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="dashboard/templates/promoted-pin"
                            class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/pinterest/pinterest_promoted_new.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="lab la-pinterest-p"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Promoted Pin</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/pinterest/pinterest_promoted_app.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="lab la-pinterest-p"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Promoted App Pin</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/pinterest/pinterest_promoted_carousel_pin.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="lab la-pinterest-p"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Promoted Carousel Pins</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TWITTER --}}
    <div class="container">
        <div class="py-3">

        </div>
        <div class="pb-3">
            <h2 class="border-bottom border-2 fs-5 app-text-gray-700 pb-2">Twitter</h2>
        </div>
        <div class="thumbnails-collection">
            <div class="row g-3">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/twitter/twitter_image_app_card.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi bi-twitter"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Twitter Image App Card</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/twitter/single_image_tweet_mobile.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi bi-twitter"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Single Image Tweet Mobile</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/twitter/single_image_tweet_desktop.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi bi-twitter"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Single Image Tweet Desktop</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/twitter/multi_image_tweet.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi bi-twitter"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Multi Image Tweet Mobile</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/twitter/multi_image_tweet_desktop.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi bi-twitter"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Multi Image Tweet Desktop</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/twitter/twitter_conversational_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi bi-twitter"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Twitter Conversational Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/twitter/twitter_direct_message_card.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi bi-twitter"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Twitter Direct Message Card</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- INSTAGRAM --}}
    <div class="container">
        <div class="py-3">

        </div>
        <div class="pb-3">
            <h2 class="border-bottom border-2 fs-5 app-text-gray-700 pb-2">Instagram</h2>
        </div>
        <div class="thumbnails-collection">
            <div class="row g-3">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/instagram/instagram_landscape_horizontal.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="app-text-accent">
                                            <i class="bi-instagram"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Instagram Landscape Horizontal</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/instagram/instagram_square_image_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="app-text-accent">
                                            <i class="bi-instagram"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Instagram Square Image Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/instagram/instagram_vertical_image_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="app-text-accent">
                                            <i class="bi-instagram"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Instagram Vertical Image Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/instagram/instagram_story_ad.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="app-text-accent">
                                            <i class="bi-instagram"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Instagram Story Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/instagram/instagram_carousel.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="app-text-accent">
                                            <i class="bi-instagram"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Instagram Carousel</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- YOUTUBE --}}
    <div class="container">
        <div class="py-3">

        </div>
        <div class="pb-3">
            <h2 class="border-bottom border-2 fs-5 app-text-gray-700 pb-2">Youtube</h2>
        </div>
        <div class="thumbnails-collection">
            <div class="row g-3">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/youtube/display_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Display Ads</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/youtube/overlay_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Overlay Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/youtube/bumper_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Bumber Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/youtube/trueview_in_stream_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Trueview In Stream Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/youtube/banner_image.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Banner Image</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/youtube/youtube_thumbnail.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Youtube Thumbnail</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/youtube/youtube_channel_icon.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Youtube Channel Icon</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/youtube/youtube_display_ad_long.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-danger">
                                            <i class="bi-youtube"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Youtube Display Ads Long</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SNAPCHAT --}}
    <div class="container">
        <div class="py-3">

        </div>
        <div class="pb-3">
            <h2 class="border-bottom border-2 fs-5 app-text-gray-700 pb-2">Snapchat</h2>
        </div>
        <div class="thumbnails-collection">
            <div class="row g-3">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/snapchat/snapchat_collection_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-warning">
                                            <i class="lab la-snapchat"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Snapchat Collection Ads</h6>
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/snapchat/webview_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-warning">
                                            <i class="lab la-snapchat"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Webview Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/snapchat/snap_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-warning">
                                            <i class="lab la-snapchat"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Snap Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/snapchat/snapchat_app_install_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-warning">
                                            <i class="lab la-snapchat"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Snapchat App Install Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- LINKEDIN --}}
    <div class="container">
        <div class="py-3">

        </div>
        <div class="pb-3">
            <h2 class="border-bottom border-2 fs-5 app-text-gray-700 pb-2">LinkedIn</h2>
        </div>
        <div class="thumbnails-collection">
            <div class="row g-3">
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/linkedin/linkedin_sponsored_inmail.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi-linkedin"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">LinkedIn Sponsored Inmail</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/linkedin/linkedin_dynamic_ad.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi-linkedin"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">LinkedIn Dynamic Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img" src="{{ asset('assets/img/thumbnails/linkedin/spotlight_ad.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi-linkedin"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Spotlight Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/linkedin/spotlight_ad_custom_background_image.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi-linkedin"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">Spotlight Ad Custom Background Image</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/linkedin/linkedIn_text_ads.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi-linkedin"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">LinkedIn Text Ads</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/linkedin/linkedin_display_ad.jpg') }}" alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi-linkedin"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">LinkedIn Display Ads (Medium)</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6">
                    <div class="card border-0 bg-transparent creator-card">
                        <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                            <img class="card-img"
                                src="{{ asset('assets/img/thumbnails/linkedin/linkedin_display_ad_leaderboard.jpg') }}"
                                alt="title">
                        </a>
                        <div class="card-body px-0 pb-0 pt-2">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="#"
                                    class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                    <div class="">
                                        <h2 class="text-info">
                                            <i class="bi-linkedin"></i>
                                        </h2>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-1 text-truncate">LinkedIn Display Ads (Leaderboard)</h6>
                                        {{-- <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                    </div>
                                </a>
                                <div class="dropup">
                                    <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                        data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                        <li><a class="dropdown-item" href="#"><i class="bi-pencil pe-2"></i> Create</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-download pe-2"></i>
                                                Download</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('jquery-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@endsection