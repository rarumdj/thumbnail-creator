@extends('layouts.dashboard')
@section('content')
<style>
    
</style>
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
        {{-- <div class="thumbnails-collection"> --}}
            <div class="py-4 text-center">
                <h1 class="fs-4">What would you like to do?</h1>
                <h6>Select a category to continue</h6>
            </div>
            <div class="row justify-content-center align-items-center" style="min-height: 400px">

                <div class="col-md-4 col-lg-4 col-12 mb-5">
                    <div class="card cs_card">
                        <div class="header_cs_card">
                            <img class="card-img-top"
                                src="https://images.pexels.com/photos/2529973/pexels-photo-2529973.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="Card image cap">
                        </div>

                        <div class="card-body body_cs_card my-0 py-0">
                            <div class="cs_card_content">
                                <h1>Youtube Video</h1>
                                <p>Change your video thumbnails</p>

                                <div class="container_infos">
                                    <button type="button" class="btn btn-primary form-control">Launch Youtube</button>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-12 mb-5">
                    <div class="card cs_card">
                        <div class="header_cs_card">
                            <img class="card-img-top"
                                src="https://images.pexels.com/photos/2529973/pexels-photo-2529973.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="Card image cap">
                        </div>

                        <div class="card-body body_cs_card my-0 py-0">
                            <div class="cs_card_content">
                                <h1>Vemo Video</h1>
                                <p>Change your video thumbnails</p>

                                <div class="container_infos">
                                    <button type="button" class="btn btn-primary form-control">Launch Youtube</button>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            {{--
        </div> --}}
    </div>
    </div>

</section>
@endsection
@section('jquery-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@endsection