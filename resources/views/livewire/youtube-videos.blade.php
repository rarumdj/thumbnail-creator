<div>
    {{-- Success is as dangerous as failure. --}}
    <section class="py-3">
        <div class="container">
            <div class="thumbnails-collection">
                <div class="row g-3">
                    @forelse ($videos as $video)
                        <div class="col-md-4 col-lg-3 col-sm-6">
                            <div class="card border-0 bg-transparent creator-card">
                                <a href="#" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                                    {{-- <img class="card-img" src="{{ $video->thumbnail }}" alt="title"> --}}
                                    <div class="card-img ratio ratio-16x9 bg-dark">
                                        <iframe src="http://www.youtube.com/embed/{{ $video['snippet']['resourceId']['videoId'] }}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </a>
                                <div class="card-body px-0 pb-0 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a title=">{{ $video['snippet']['title'] }}" href="https://youtu.be/{{ $video['snippet']['resourceId']['videoId'] }}" target="youtube" class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                            <div class="">
                                                <h2 class="text-danger mb-0">
                                                    <i class="bi-youtube"></i>
                                                </h2>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="mb-0 text-truncate" style="max-width: 180px">{{ ucwords($video['snippet']['title']) }}</h6>
                                            </div>
                                        </a>
                                        <div class="">
                                            <button wire:click.prevent="editYoutubeThumbnail('{{ $video['snippet']['resourceId']['videoId'] }}')" class="app-btn-icon app-btn-icon-accent" title="Edit Video Thumbnail">
                                                <i class="bi-pencil-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="py-3 text-center">
                            <div class="">
                                <div class="text-center" style="padding-top: 15%">
                                    <a style="width: 25%" href="#" id="connect-youtube" class="btn btn-danger">
                                        <span class="d-flex justify-content-start">
                                            <span class="pe-2 border-1 border-end border-light">
                                                <i class="bi-youtube"></i>
                                            </span>
                                            <span class="text-center flex-grow-1">
                                                Connect Youtube Account
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</div>
