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
    <div class="container h-100">
        <div class="py-4 text-center w-80">
            <h1 class="fs-4">Remove backgrounds 100% automatically in 5 seconds with zero clicks</h1>
            <h1 class="fs-4"></h1>
        </div>

        <div class="card border-0 app-default-shadow-sm mb-5 h-100">
            <form action="/campaign/createCampaign" id="create-campaign" method="POST" enctype="multipart/form-data"
                class="bg-white">
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="">
                                <p class="text-muted mb-0">Upload an image from your computer or paste a link</p>
                                <hr width="80" height="8" class="app-bg-accent mt-0">
                            </div>
                            <div class="uploader">

                                <div class="my-3">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <div class="upload-mask">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center h-100">
                                                    <span
                                                        class="confirm-file h2 app-text-accent-light-50 d-block app-bg-white-50 mt-1 py-2 px-3 rounded rounded-4 ">
                                                        <i class="fas fa-upload"></i>
                                                    </span>
                                                    <span class="btn app-btn-accent btn-sm d-block text-center">
                                                        <i class="fas fa-plus"></i> Upload Image
                                                    </span>
                                                </div>
                                                <input type="file" name="file" accept="images/*" id="uploadInput"
                                                    onchange="readURL(this);">
                                            </div>

                                        </div>
                                        <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                            <span class="app-font-12px app-text-accent d-block text-center">
                                                or drag and drop a file, or paste a <a class="app-text-accent underline"
                                                    href="#" onclick="prompt('Image url :')"><u>URL</u></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 g-5">

                            <div class="div-area mx-auto">
                                <div class="image-area my-3 "><img id="imageResult" src="#" alt=""
                                        class="img-fluid rounded d-block"></div>

                                <div class="mx-auto">
                                    <button class="hidden-btn transcribe-smt-btn btn app-btn-primary" type="submit">
                                        Download <i class="bi-download"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
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