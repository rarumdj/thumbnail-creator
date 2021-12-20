/**
 * Define action for media components
 */
(function () {
    'use strict';
    var media = function () {
        let count = 20;
        let pageNum = 1;
        // load image from resource
        const client_id = "QUW5ZeGIBqTFLc63OyOEbiKQpwcysfx6TEVtKJZw0QQ";
        // let imgHeight = canvas.height;
        let imgHeight = 400;
        let imgWidth = 400;
        // let imgWidth = canvas.width
        let imageSearchInput = document.getElementById('searchImages')
        let randomCollections = "1103088,2022043,494263,2411320,2569191";

        let errorResponse = `<div class="col-12 card h-100 border-0 rounded-3">
                    <div class="d-flex flex-column justify-content-center align-items-center p-3">
                        <div class="spinner-border bg-danger" role="status">
                            <span class="visually-hidden">Error...</span>
                        </div>
                        <span class="d-block mt-2 small text-muted">There was an issue getting your images</span>
                    </div>
                </div>`;

        let searchPreloader = `<div class="col-12 card h-100 border-0 rounded-3">
                                    <div class="d-flex flex-column justify-content-center align-items-center p-3">
                                        <span class="app-text-gray-300 d-block display-3">
                                            <i class="bi-search"></i>
                                        </span>
                                        <span class="d-block mt-3 small text-muted">Getting result</span>
                                    </div>
                                </div>`;
        (() => {
            $.get(`https://api.unsplash.com/photos/random?page=${pageNum}&client_id=${client_id}&count=${count}&collections=${randomCollections}`, function (data) {
                $('#mediaImgContainer').html('');
                data.map(function (item) {
                    let imageUrl = item.urls.full.split("?")[0] + `?auto=format&fit=crop&h=${_self.canvas.originalH}&w=${_self.canvas.originalW}`;
                    let newImages = `<div class="col-6">
                                        <a href="#" class="app-rounded-5 media-image-file overflow-hidden d-block" style="max-height: 120px;">
                                        <img class="w-100 app-img-cover app-rounded-5 overflow-hidden" style="max-height: 120px;" src="${imageUrl}">
                                    </a>
                                </div>`;
                    $('#mediaImgContainer').append(newImages);
                });
            }).fail(function (e) {
                $('#mediaImgContainer').html(errorResponse);
            });
        })();
        const _self = this;
        $(`${this.containerSelector} .main-panel  .toolpanel-container`).append(`<div class="toolpanel visible" id="media-panel"><div class="content"><p class="title mb-2">Media</p></div></div>`);
        $(`${this.containerSelector} .toolpanel#media-panel .content`).append(`<nav>
                <div class="nav nav-tabs nav-justified flex-nowrap" id="nav-media-tab" role="tablist">
                    <a href="#" class="nav-link px-1 py-1 app-link-dark active" id="nav-photo-tab" data-bs-toggle="tab" data-bs-target="#nav-photo" type="button" role="tab" aria-controls="nav-photo" aria-selected="false">Photo</a>
                    <a href="#" class="nav-link px-1 py-1 app-link-dark" id="nav-uploads-tab" data-bs-toggle="tab" data-bs-target="#nav-uploads" type="button" role="tab" aria-controls="nav-uploads" aria-selected="false">Uploads</a>
                </div>
            </nav>
        `);
        // media panel tab-content
        $(`${this.containerSelector} .toolpanel#media-panel .content`).append(`
            <div class="tab-content pb-3" id="nav-media-tabContent">
                <div class="tab-pane fade active show" id="nav-photo" role="tabpanel" aria-labelledby="nav-photo-tab">
                    <form name="search_image_form" class="d-block my-2">
                        <div class="form-group app-form-group">
                            <input data-search-type="general" class="images_search form-control form-control-sm search-input-right bg-white" placeholder="search images">
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-uploads" role="tabpanel" aria-labelledby="nav-uploads-tab">
                    <div class="my-2">
                        <button class="btn-sm w-100 border" id="uploadImgMedia">
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="">
                                    <i class="bi-cloud-arrow-up"></i>
                                </span>
                                <span class="flex-grow-1"> Upload Image</span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        `);
        //photo tab component content
        $(`${this.containerSelector} .toolpanel#media-panel .content .tab-content .tab-pane#nav-photo`).append(`<div class="row g-2" id="mediaImgContainer">${searchPreloader}</div>`);
        //uploads tab component content
        $(`${this.containerSelector} .toolpanel#media-panel .content .tab-content .tab-pane#nav-uploads`).append(`<div class="row g-2" id="uploadedImgContainer"></div>`);

        // upload btn event
        $(`${this.containerSelector} .toolpanel#media-panel #uploadImgMedia`).click(function () {
            let id = $(this).attr('id');
            _self.openDragDropPanel();
        });

        $('form[name=search_image_form]').on('submit', function (e) {
            e.preventDefault();
            let searchValue = $('.images_search').val();
            $.get(`https://api.unsplash.com/search/photos?query=${searchValue}&page=${pageNum}&client_id=${client_id}&per_page=60`, function (data) {
                $('#mediaImgContainer').html('')
                data.results.map(function (item) {
                    let imageUrl = item.urls.full.split("?")[0] + `?auto=format&fit=crop&h=${_self.canvas.originalH}&w=${_self.canvas.originalW}`;
                    let newImages = `<div class="col-6">
                                        <a href="#" class="app-rounded-5 media-image-file overflow-hidden" style="max-height: 120px;">
                                        <img class="w-100 app-img-cover app-rounded-5 overflow-hidden" style="max-height: 120px;" src="${imageUrl}">
                                    </a>
                                </div>`;
                    $('#mediaImgContainer').append(newImages)
                })
            }).fail(function (e) {
                $('#mediaImgContainer').html(errorResponse);
            });
        });

        //
        // $('#nav-pattern-tab, #nav-background-tab').on('click', function (e) {
        //     alert('yest');
        // });

        $(document).on('click', `${this.containerSelector} .media-image-file`, function (e) {
            let _this = $(this)
            let imgFileUrl = _this.children('img').attr('src');
            useMediaImgFile(imgFileUrl)
        });

        const useMediaImgFile = (url) => {
            console.log(url);
            var mediaFile = new fabric.Image.fromURL(url, (img) => {
                img.set({
                    left: 0,
                    top: 0
                })
                img.scaleToHeight(300)
                img.scaleToWidth(300)
                _self.canvas.add(img)


                _self.canvas.renderAll()
                _self.canvas.trigger('object:modified')
            }, { crossOrigin: 'Anonymous' });
            // _self.centerSelectedObject(mediaFile);
        }
    }

    window.ImageEditor.prototype.initializeMedia = media;
})();
