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

<section>
    <div class="container">
        <!-- ============================ Hero Banner Starts ================================== -->
        <div class="rounded mt-2 hero-banner bg-cover"
            style="background:#93d4f0 url('https://themezhub.net/live-pecozo/pecozo/assets/img/banner-2.jpg') no-repeat;"
            data-overlay="5">
            <div class="container text-center">
                <h1 class="small">Stunning & royalty free stock</h1>
                <p class="lead">World Best Place For Graphics & Designs Availabel on Pecozo</p>
                <form class="mt-4">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-7 col-md-9 col-sm-12">
                            <div class="banner-search style-1">
                                <div class="input-group">
                                    <input type="text" class="form-control radiup"
                                        placeholder="e.g. responsive WordPress">
                                    <div class="input-group-append b-l">
                                        <button type="button" class="btn bt-round trans"><i
                                                class="bi-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-category">
                                <ul>
                                    <li>Trending:</li>
                                    <li><a href="#">Flower</a></li>
                                    <li><a href="#">Wallpapers</a></li>
                                    <li><a href="#">Animals</a></li>
                                    <li><a href="#">Food & Drink</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- ============================ Hero Banner End ================================== -->

        <!-- ============================ All Images List Start ================================== -->
        <section class="ex_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <div class="urip_column_wrap">

                            <div class="urip_column_single">
                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-1.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-11.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-3.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="urip_column_single">
                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-3.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-4.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-12.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="urip_column_single">
                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-5.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-5.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Image Product -->
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="item-detail.html" class="urip_link download"><i
                                                class="bi bi-download"></i></a>
                                        <a href="premium-stock-detail.html" class="item-img">
                                            <img src="https://themezhub.net/live-pecozo/pecozo/assets/img/i-13.jpg"
                                                class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater">
                                                        <a href="author-detail.html.html" class="author-img">
                                                            <img src="assets/img/author.png" class="img-fluid" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="author-detail.html.html">Adam
                                                                vilson</a></h3>
                                                        <span>Liverpool, London</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <a href="#" class="ure09w">Browse More</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- ============================ All Images List End ================================== -->

    </div>
</section>
@endsection
@section('jquery-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@endsection