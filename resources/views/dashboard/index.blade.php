@extends('layouts.dashboard')
@section('content')
{{-- <section class="nav-section app-bg-denim-500 border-bottom py-3">
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
</section> --}}
{{-- START HERE --}}

<section class="">
    <div class="container">
        <div class="mt-3">
            <p class="m-0">Hi Abeng, Let get Started</p>
            <h5>Do more with less using VisualGenie</h5>
        </div>

        <div class="col-md-12 my-4">
            <div class="card ds-card">
                <div class="card-body d-flex flex-column align-content-center justify-content-center">
                    <div class="text-center pb-3">
                        <h2 class="text-white font-weight-bold">What Would you Like to Do?</h2>
                    </div>

                    <div class="row ">

                        <div class="col-lg col-md-6 col-sm-6 my-2">
                            <a href="http://">
                                <div class="stats-small stats-small--1 card card-small scale-card">
                                    <div class="card-body p-0 d-flex">
                                        <div class="d-flex flex-column m-auto">
                                            <div class="text-center mx-2 text-dark">
                                                <i class="bi-paragraph pe-2"></i>
                                                <h6>AI Content Writing</h6>
                                                <p class="small mt-0"><small>Let AI
                                                        create stunting content for
                                                        you.</small>
                                                </p>
                                            </div>

                                        </div>
                                        <!-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg col-md-6 col-sm-6 my-2">
                            <a href="http://">
                                <div class="stats-small stats-small--1 card card-small scale-card">
                                    <div class="card-body p-0 d-flex">
                                        <div class="d-flex flex-column m-auto">
                                            <div class="text-center mx-2 text-dark">
                                                <i class="bi-brush-fill pe-2"></i>
                                                <h6>Design Templates</h6>
                                                <p class="small mt-0"><small>Take your
                                                        designs to the next level.</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg col-md-6 col-sm-6 my-2">
                            <a href="http://">
                                <div class="stats-small stats-small--1 card card-small scale-card">
                                    <div class="card-body p-0 d-flex">
                                        <div class="d-flex flex-column m-auto">
                                            <div class="text-center mx-2 text-dark">
                                                <i class="bi-camera-video-fill pe-2"></i>
                                                <h6>Video Templates</h6>
                                                <p class="small mt-0 "><small>create or convert image into stunting
                                                        videos</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg col-md-6 col-sm-6 my-2">
                            <a href="http://">
                                <div class="stats-small stats-small--1 card card-small scale-card">
                                    <div class="card-body p-0 d-flex">
                                        <div class="d-flex flex-column m-auto">
                                            <div class="text-center mx-2 text-dark">
                                                <i class="bi-back pe-2"></i>
                                                <h6>Background Remover</h6>
                                                <p class="small mt-0"><small>Remove image background with one
                                                        click</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> -->
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg col-md-6 col-sm-6 my-2">
                            <a href="http://">
                                <div class="stats-small stats-small--1 card card-small scale-card">
                                    <div class="card-body p-0 d-flex">
                                        <div class="d-flex flex-column m-auto">
                                            <div class="text-center mx-2 text-dark">
                                                <i class="bi-camera-fill pe-2"></i>
                                                <h6>Image Explorer</h6>
                                                <p class="small mt-0"><small>Get access to millions of stock
                                                        images</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="section">

            <div class="heading">
                <div class="d-flex flex-wrap align-items-end">
                    <div class="flex-grow-1">
                        <p class="mb-0">Take your design to the next level</p>
                        <h4>Explore Template Collection</h4>
                    </div>
                    <a href="songs.html" class="btn btn-sm btn-pill shadow-sm btn-primary">View All</a>
                </div>
                <hr>
            </div>
        </div>

        <div class="carousel-item-5 arrow-pos-3 mb-5">
            <div class="col-sm-5 pb-4">
                <div class="card-holder">
                    <a href="#">
                        <div class="h-100 event-v bg-img bg-img-radius-lg"
                            style="background-image: url('https://templates.simplified.co/thumb/cf1703d3-4257-4155-9e2d-55f8119d1860.jpg'); background-size: cover">
                        </div>
                        <div class="middle-link">
                            <div class="d-flex flex-column m-auto">
                                <div class="text-center fs-3">
                                    <i class="bi-plus-lg pe-2"></i>
                                    <h6>Use Template</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-5 pb-4">
                <div class="card-holder">
                    <a href="#">
                        <div class="h-100 event-v bg-img bg-img-radius-lg"
                            style="background-image: url('https://templates.simplified.co/thumb/b14ad301-9294-4566-a5a1-fc6ce746e092.jpg'); background-size: cover; background-repeat: no-repeat">
                        </div>
                        <div class="middle-link">
                            <div class="d-flex flex-column m-auto">
                                <div class="text-center fs-3">
                                    <i class="bi-plus-lg pe-2"></i>
                                    <h6>Use Template</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-5 pb-4">
                <div class="card-holder">
                    <a href="#">
                        <div class="h-100 event-v bg-img bg-img-radius-lg"
                            style="background-image: url('https://templates.simplified.co/thumb/c35d007f-212b-498a-99a4-1f1b5882f91b.jpg'); background-size: cover; background-repeat: no-repeat">
                        </div>
                        <div class="middle-link">
                            <div class="d-flex flex-column m-auto">
                                <div class="text-center fs-3">
                                    <i class="bi-plus-lg pe-2"></i>
                                    <h6>Use Template</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-5 pb-4">
                <div class="card-holder">
                    <a href="#">
                        <div class="h-100 event-v bg-img bg-img-radius-lg"
                            style="background-image: url('https://templates.simplified.co/thumb/c194c921-a392-481d-b632-b12e2f86c91d.jpg'); background-size: cover; background-repeat: no-repeat">
                        </div>
                        <div class="middle-link">
                            <div class="d-flex flex-column m-auto">
                                <div class="text-center fs-3">
                                    <i class="bi-plus-lg pe-2"></i>
                                    <h6>Use Template</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-5 pb-4">
                <div class="card-holder">
                    <a href="#">
                        <div class="h-100 event-v bg-img bg-img-radius-lg"
                            style="background-image: url('https://templates.simplified.co/thumb/cf1703d3-4257-4155-9e2d-55f8119d1860.jpg'); background-size: cover">
                        </div>
                        <div class="middle-link">
                            <div class="d-flex flex-column m-auto">
                                <div class="text-center fs-3">
                                    <i class="bi-plus-lg pe-2"></i>
                                    <h6>Use Template</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-5 pb-4">
                <div class="card-holder">
                    <a href="#">
                        <div class="h-100 event-v bg-img bg-img-radius-lg"
                            style="background-image: url('https://templates.simplified.co/thumb/bf9424c1-c93d-46e4-852f-1a9481b8fc9e.jpg'); background-size: cover; background-repeat: no-repeat">
                        </div>
                        <div class="middle-link">
                            <div class="d-flex flex-column m-auto">
                                <div class="text-center fs-3">
                                    <i class="bi-plus-lg pe-2"></i>
                                    <h6>Use Template</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-5 pb-4">
                <div class="card-holder">
                    <a href="#">
                        <div class="h-100 event-v bg-img bg-img-radius-lg"
                            style="background-image: url('https://templates.simplified.co/thumb/b14ad301-9294-4566-a5a1-fc6ce746e092.jpg'); background-size: cover; background-repeat: no-repeat">
                        </div>
                        <div class="middle-link">
                            <div class="d-flex flex-column m-auto">
                                <div class="text-center fs-3">
                                    <i class="bi-plus-lg pe-2"></i>
                                    <h6>Use Template</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
        {{-- <div class="section mb-5">

            <div class="heading">
                <div class="d-flex flex-wrap align-items-end">
                    <div class="flex-grow-1">
                        <p class="mb-0">Learn how to use VisualGenie like a pro</p>
                        <h4>VisualGenie Tutorials</h4>
                    </div>
                    <a href="genres.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                </div>
                <hr>
            </div>

            <div class="arrow-pos-1 row">
                <div class="col-md-2 col-4 my-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/ipmNNaYWTnY?rel=0" title="YouTube video"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4 my-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/ipmNNaYWTnY?rel=0" title="YouTube video"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4 my-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/ipmNNaYWTnY?rel=0" title="YouTube video"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-4 my-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/ipmNNaYWTnY?rel=0" title="YouTube video"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        <!-- End | Section -->

    </div>


</section>
@endsection
@section('jquery-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@endsection