/**
 * Canvas section management of editors background
 */
(function () {
    'use strict';
    var background = function () {
        const _self = this;
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
                $('#backgroundImgContainer').html('');
                data.map(function (item) {
                    let imageUrl = item.urls.full.split("?")[0] + `?auto=format&fit=crop&h=${_self.canvas.originalH}&w=${_self.canvas.originalW}`;
                    let newImages = `<div class="col-6">
                                        <a href="#" class="app-rounded-5 background-image-file overflow-hidden d-block" style="max-height: 120px;">
                                        <img class="w-100 app-img-cover app-rounded-5 overflow-hidden" style="max-height: 120px;" src="${imageUrl}">
                                    </a>
                                </div>`;
                    $('#backgroundImgContainer').append(newImages);
                });
            }).fail(function (e) {
                $('#backgroundImgContainer').html(errorResponse);
            });
        })();
        //
        $(`${this.containerSelector} .main-panel  .toolpanel-container`).append(`<div class="toolpanel" id="background-panel">
                                                                                    <div class="content">
                                                                                        <div class="d-flex justify-content-between align-items-center mb-2 border-bottom pb-2">
                                                                                            <p class="title mb-0 border-0 pb-0">Background</p>
                                                                                            <div class="flex-grow-1">
                                                                                                <button class="clear-background text-nowrap bg-white border" title="Remove background"><i class="bi-x"></i> Remove</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>`);
        $(`${this.containerSelector} .toolpanel#background-panel .content`).append(`<nav>
                <div class="nav nav-tabs nav-justified flex-nowrap" id="nav-media-tab" role="tablist">
                    <a href="#" class="nav-link px-1 py-1 app-link-dark active" id="nav-bgPhoto-tab" data-bs-toggle="tab" data-bs-target="#nav-bgPhoto" type="button" role="tab" aria-controls="nav-bgPhoto" aria-selected="false">Photo</a>
                    <a href="#" class="nav-link px-1 py-1 app-link-dark" id="nav-bgPattern-tab" data-bs-toggle="tab" data-bs-target="#nav-bgPattern" type="button" role="tab" aria-controls="nav-bgPattern" aria-selected="false">Patterns</a>
                    <a href="#" class="nav-link px-1 py-1 app-link-dark" id="nav-bgUploads-tab" data-bs-toggle="tab" data-bs-target="#nav-bgUploads" type="button" role="tab" aria-controls="nav-bgUploads" aria-selected="false">Uploads</a>
                    <a href="#" class="nav-link px-1 py-1 app-link-dark" id="nav-bgColor-tab" data-bs-toggle="tab" data-bs-target="#nav-bgColor" type="button" role="tab" aria-controls="nav-bgColor" aria-selected="false">Color</a>
                </div>
            </nav>`);
        // background panel tab-content
        $(`${this.containerSelector} .toolpanel#background-panel .content`).append(`
            <div class="tab-content pb-3" id="nav-background-tabContent">
                <div class="tab-pane fade active show" id="nav-bgPhoto" role="tabpanel" aria-labelledby="nav-bgPhoto-tab">
                    <form name="search_image_form" class="d-block my-2">
                        <div class="form-group app-form-group">
                            <input data-search-type="general" class="images_search form-control form-control-sm search-input-right bg-white" placeholder="search images">
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-bgPattern" role="tabpanel" aria-labelledby="nav-bgPattern-tab">
                    <form name="search_image_form" class="d-block my-2">
                        <div class="form-group app-form-group">
                            <input data-search-type="pattern" class="patterns_search form-control form-control-sm search-input-right bg-white" placeholder="search for pattern">
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-bgUploads" role="tabpanel" aria-labelledby="nav-bgUploads-tab">
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
                <div class="tab-pane fade" id="nav-bgColor" role="tabpanel" aria-labelledby="nav-bgColor-tab">
                </div>
            </div>
        `);
        //photo tab component content
        $(`${this.containerSelector} .toolpanel#background-panel .content .tab-content .tab-pane#nav-bgPhoto`).append(`<div class="row g-2" id="backgroundImgContainer">${searchPreloader}</div>`);
        //uploads tab component content
        $(`${this.containerSelector} .toolpanel#background-panel .content .tab-content .tab-pane#nav-bgPattern`).append(`<div class="row g-2" id="backgroundPatternContainer">${searchPreloader}</div>`);
        //pattern tab component content
        $(`${this.containerSelector} .toolpanel#background-panel .content .tab-content .tab-pane#nav-bgUploads`).append(`<div class="row g-2" id="patternImgContainer"></div>`);
        //pattern tab component content
        $(`${this.containerSelector} .toolpanel#background-panel .content .tab-content .tab-pane#nav-bgColor`).append(`<div class="row g-2" id="backgroundColorContainer"></div>`);

        // clear background image and color
        $(`${this.containerSelector} .clear-background`).on('click', function (e) {
            _self.canvas.setBackgroundImage(null);
            _self.canvas.setBackgroundColor('');
            _self.canvas.renderAll()
            _self.canvas.trigger('object:modified')
        });

        $(document).on('click', `${this.containerSelector} .background-image-file`, function (e) {
            let _this = $(this)
            let imgFileUrl = _this.children('img').attr('src');
            // remove canvas background image
            _self.canvas.setBackgroundColor('', _self.canvas.renderAll.bind(_self.canvas))
            _self.canvas.setBackgroundImage(0, _self.canvas.renderAll.bind(_self.canvas))
            // render template image as canvas background
            fabric.Image.fromURL(imgFileUrl, (img) => {
                _self.canvas.setBackgroundImage(img, _self.canvas.renderAll.bind(_self.canvas), {
                    scaleX: _self.canvas.width / img.width,
                    scaleY: _self.canvas.height / img.height

                }, {
                    crossOrigin: 'Anonymous'
                });
            }, {
                crossOrigin: 'Anonymous'
            })
        });

        // background color
        (() => {
            $(`${this.containerSelector} .toolpanel#background-panel .content .tab-content .tab-pane#nav-bgColor #backgroundColorContainer`).append(`
            <div class="color-settings">
            <div class="tab-container">
                <div class="tabs">
                <div class="tab-label" data-value="color-fill">Color Fill</div>
                <div class="tab-label" data-value="gradient-fill">Gradient Fill</div>
                </div>
                <div class="tab-content" data-value="color-fill">
                <input id="color-picker" value='black'/><br>
                </div>
                <div class="tab-content" data-value="gradient-fill">
                <div id="gradient-picker"></div>

                <div class="gradient-orientation-container">
                    <div class="input-container">
                    <label>Orientation</label>
                    <select id="select-orientation">
                        <option value="linear">Linear</option>
                        <option value="radial">Radial</option>
                    </select>
                    </div>
                    <div id="angle-input-container" class="input-container">
                    <label>Angle</label>
                    <div class="custom-number-input">
                        <button class="decrease">-</button>
                        <input type="number" min="0" max="360" value="0" id="input-angle">
                        <button class="increase">+</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        `)

            $(`${this.containerSelector} .toolpanel#background-panel .content .tab-label`).click(function () {
                $(`${_self.containerSelector} .toolpanel#background-panel .content .tab-label`).removeClass('active');
                $(this).addClass('active');
                let target = $(this).data('value');
                $(this).closest('.tab-container').find('.tab-content').hide();
                $(this).closest('.tab-container').find(`.tab-content[data-value=${target}]`).show();

                if (target === 'color-fill') {
                    let color = $(`${_self.containerSelector} .toolpanel#background-panel .content #color-picker`).val();
                    try {
                        _self.canvas.backgroundColor = color;
                        _self.canvas.renderAll();
                    } catch (_) {
                        console.log("can't update background color")
                    }
                } else {
                    updateGradientFill();
                }
            })

            $(`${this.containerSelector} .toolpanel#background-panel .content .tab-label[data-value=color-fill]`).click();

            $(`${this.containerSelector} .toolpanel#background-panel .content #color-picker`).spectrum({
                flat: true,
                showPalette: false,
                showButtons: false,
                type: "color",
                showInput: "true",
                allowEmpty: "false",
                move: function (color) {
                    let hex = 'transparent';
                    color && (hex = color.toRgbString()); // #ff0000
                    _self.canvas.backgroundColor = hex;
                    _self.canvas.renderAll();
                }
            });

            const gp = new Grapick({
                el: `${this.containerSelector} .toolpanel#background-panel .content #gradient-picker`,
                colorEl: '<input id="colorpicker"/>' // I'll use this for the custom color picker
            });

            gp.setColorPicker(handler => {
                const el = handler.getEl().querySelector('#colorpicker');
                $(el).spectrum({
                    showPalette: false,
                    showButtons: false,
                    type: "color",
                    showInput: "true",
                    allowEmpty: "false",
                    color: handler.getColor(),
                    showAlpha: true,
                    change(color) {
                        handler.setColor(color.toRgbString());
                    },
                    move(color) {
                        handler.setColor(color.toRgbString(), 0);
                    }
                });
            });

            gp.addHandler(0, 'red');
            gp.addHandler(100, 'blue');

            const updateGradientFill = () => {
                let stops = gp.getHandlers();
                let orientation = $(`${this.containerSelector} .toolpanel#background-panel .content .gradient-orientation-container #select-orientation`).val();
                let angle = parseInt($(`${this.containerSelector} .toolpanel#background-panel .content .gradient-orientation-container #input-angle`).val());

                let gradient = generateFabricGradientFromColorStops(stops, _self.canvas.width, _self.canvas.height, orientation, angle);
                _self.canvas.setBackgroundColor(gradient)
                _self.canvas.renderAll()
            }

            // Do stuff on change of the gradient
            gp.on('change', complete => {
                updateGradientFill();
            })

            $(`${this.containerSelector} .toolpanel#background-panel .content .gradient-orientation-container #select-orientation`).change(function () {
                let type = $(this).val();
                if (type === 'radial') {
                    $(this).closest('.gradient-orientation-container').find('#angle-input-container').hide();
                } else {
                    $(this).closest('.gradient-orientation-container').find('#angle-input-container').show();
                }
                updateGradientFill();
            })

            $(`${this.containerSelector} .toolpanel#background-panel .content .gradient-orientation-container #input-angle`).change(function () {
                updateGradientFill();
            })
        })();
    }

    window.ImageEditor.prototype.initializeBackground = background;
})();
