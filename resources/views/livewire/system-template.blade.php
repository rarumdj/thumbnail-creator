<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <section class="pt-5">
        <div class="container">
            <div class="pb-3">
                <h2 class="border-bottom border-2 fs-5 app-text-gray-700 pb-2">SOCIAL MEDIA POSTS</h2>
            </div>
            <div class="thumbnails-collection">
                <div class="row g-3">
                    @forelse ($templates as $template)
                        <div class="col-md-4 col-lg-3 col-sm-6">
                            <div class="card border-0 bg-transparent creator-card">
                                <a href="/creator/{{ $template->id }}/{{ $temp }}" class="card-body p-0 position-relative border app-rounded-10 overflow-hidden">
                                    @production
                                        <img class="card-img" src=" <?= asset('public/'.$template->image_path) ?>" alt="title">
                                    @else
                                        <img class="card-img" src=" <?= asset($template->image_path) ?>" alt="title">
                                    @endproduction
                                </a>
                                <div class="card-body px-0 pb-0 pt-2">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <a href="#" class="app-link-dark flex-grow-1 d-flex justify-content-start align-items-center">
                                            <div class="">
                                                {{-- <h2 class="text-primary">
                                                    <i class="bi-facebook"></i>
                                                </h2> --}}
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                {{-- <h6 class="mb-1 text-truncate">Facebook Post</h6>
                                                <p class="text-muted small mb-0 text-truncate">1200px x 900px</p> --}}
                                            </div>
                                        </a>
                                        <div class="dropup">
                                            <button class="app-btn-icon app-btn-icon-accent dropdown-toggle caret-hidden" data-id="uniqueId" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="uniqueId">
                                                <li><a wire:click.prevent="setSelectedTemplate({{ $template->id }})" class="dropdown-item" href="#"><i class="bi-save pe-2"></i> Save Template</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</div>
