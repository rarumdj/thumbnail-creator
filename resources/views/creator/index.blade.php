@extends('layouts.creator')
@section('content')
<style>
    #loading {
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0.7;
        background-color: #fff;
        z-index: 99;
    }

    #loading-image {
        z-index: 100;
    }
    </style>
    <div id="loading">
        <img id="loading-image" src="{{ asset('assets/img/thumbnails/test.gif') }}" alt="Loading..." />
  </div>
<div id="image-editor-container"></div>
@endsection
@section('modals')
{{-- TEMPLATE TAGS --}}
<div class="modal fade" id="templateTagModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="mb-0">Template Tags/Category</h6>
                <button type="button" class="app-btn-icon " data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi-x-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <form name="template_tags_form">
                    @csrf
                    <div class="row g-3">
                        <div class="form-group app-form-group mt-1">
                            <label class="mb-1" for="template_tags">Tags</label>
                            <input class="form-control" id="template_tags" name="template_tags" type="text" placeholder="Facebook,Fashion" required>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button id="save_template" class="btn app-btn-primary">
                            <i class="bi-spinner"></i> Save Template
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
