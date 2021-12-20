@extends('layouts.dashboard')
@section('content')
<style>
    .hidden {
        display: none;
    }

    .mce-height {
        min-height: 400px;
    }
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

            {{-- </div> --}}
        <div class="row py-3 my-3">
            <div class="col-lg-8 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <form class="" method="post" id="add-new-post" enctype="multipart/form-data">


                            <textarea id="mytextarea" class="mce-height"></textarea>
                            <input type="hidden" id="content" name="content" />
                            <input type="hidden" id="post_id" name="post_id" value="" />

                        </form>
                    </div>
                </div>
                <!-- / Add New Post Form -->
            </div>
            <div class="col-lg-4 col-md-12">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>

                    <div class='card-body'>
                        {{-- <form class=""> --}}
                            <div class="form-group app-form-group search-input-right  bg-white">
                                <label for="">Select Template</label>
                                <select class="form-control" name="" id="template">
                                    <option value="first">1. Blog ideas+titles</option>
                                    <option value="second">2. Blog introduction</option>
                                    <option value="third">3. Blog outline</option>
                                    <option value="fourth">4. Blog section completer</option>
                                    <option value="fifth">5. Blog conclusion paragraph</option>
                                    <option value="sixth">AIDA framework</option>
                                    <option value="seventh">Amazon product listing</option>
                                    <option value="eight">Befpre-After-Bridge</option>
                                </select>
                            </div>
                            {{--
                        </form> --}}

                        <form class="first hidden" id="form1">
                            <div class="form-group app-form-group bg-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Select Tone</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">Formal</option>
                                            <option value="">Informal</option>
                                            <option value="">Optimistic</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Output Language</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">US English</option>
                                            <option value="">ES Spanish</option>
                                            <option value="">US English</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for=""
                                            class="d-flex justify-content-between"><span>Topic</span><span>Count</span></label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form class="second hidden" id="form2">
                            <div class="form-group app-form-group bg-white">
                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="">Output Language</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">US English</option>
                                            <option value="">ES Spanish</option>
                                            <option value="">US English</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="d-flex justify-content-between"><span>Blog
                                                Topic</span><span>Count</span></label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form class="third hidden" id="form3">
                            <div class="form-group app-form-group bg-white">
                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="">Output Language</label>
                                        <select class="form-control" name="" id="">
                                            <option value="">US English</option>
                                            <option value="">ES Spanish</option>
                                            <option value="">US English</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="d-flex justify-content-between"><span>Blog
                                                Topic</span><span>Count</span></label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- / Post Overview -->
                <button type="button" class="form-control btn app-btn-accent mb-3">Generate</button>

                <div class="card card card-small mb-3">


                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="small">1 minutes ago</p>
                            <div class="dropup">
                                <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden"
                                    data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                    <li><a class="dropdown-item" href="/"><i class="bi-plus pe-2"></i> Add</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi-clipboard pe-2"></i> Copy</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi-trash pe-2"></i> Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <p>Conclusion: So, if you want to help a single mom, take some time to volunteer at your local
                            food bank or soup kitchen. You can also donate canned goods and other non-perishables at
                            these locations. But if you’re looking for something more hands on, try volunteering at the
                            children’s hospital or an after school program. These are great ways to help a single mother
                            with her kids and make a positive difference in their lives!</p>
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