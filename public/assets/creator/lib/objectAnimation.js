/**
 * Define animations for canvas objects
 */
(function () {
    'use strict';
    var defaultAnimations = [{
        name: "easeInQuad"
    }, {
        name: "easeOutQuad"
    }, {
        name: "easeInOutQuad"
    }, {
        name: "easeInCubic"
    }, {
        name: "easeOutCubic"
    }, {
        name: "easeInOutCubic"
    }, {
        name: "easeInQuart"
    }, {
        name: "easeOutQuart"
    }, {
        name: "easeInOutQuart"
    }, {
        name: "easeInQuint"
    }, {
        name: "easeOutQuint"
    }, {
        name: "easeInOutQuint"
    }, {
        name: "easeInSine"
    }, {
        name: "easeOutSine"
    }, {
        name: "easeInOutSine"
    }, {
        name: "easeInExpo"
    }, {
        name: "easeOutExpo"
    }, {
        name: "easeInOutExpo"
    }, {
        name: "easeInCirc"
    }, {
        name: "easeOutCirc"
    }, {
        name: "easeInOutCirc"
    }, {
        name: "easeInElastic"
    }, {
        name: "easeOutElastic"
    }, {
        name: "easeInOutElastic"
    }, {
        name: "easeInBack"
    }, {
        name: "easeOutBack"
    }, {
        name: "easeInOutBack"
    }, {
        name: "easeInBounce"
    }, {
        name: "easeOutBounce"
    }, {
        name: "easeInOutBounce"
    }
    ];
    var objectAnimation = function () {
        const _self = this;
        try {
            $(`${this.containerSelector} .main-panel  .toolpanel-container`).append(`<div class="toolpanel visible" id="objectAnimation-panel"><div class="content"><p class="title mb-2">Animations</p></div></div>`);
            $(`${this.containerSelector} .toolpanel#objectAnimation-panel .content`).append(`<div class="row g-2" id="animation-list"></div>`);
            $(`${this.containerSelector} #animation-list`).prepend(`<label for="duration">Duration</label><input id="duration" value="2" max="5" type="number"><br><br>`);
            // Animations options
            defaultAnimations.forEach(item => {
                $(`${this.containerSelector} #animation-list`).append(`<div class="col-4">
                        <a href="#" data-animate-type="${item.name}" class="card animate-option app-rounded-10 overflow-hidden border-0 app-link-dark">
                            <div class="card-body border border-1 app-rounded-10 p-2 text-center">
                                <h5 class="fs-2 fw-bold mb-0">Abc</h5>
                            </div>
                            <div class="card-body border-0 bg-transparent text-center p-0">
                                <p class="mb-0">${item.name}</p>
                            </div>
                        </a>
                    </div>
                `);
            });
            $(`${this.containerSelector} .toolpanel#objectAnimation-panel a.animate-option`).click(function () {
                let animationType = $(this).attr('data-animate-type');
                $('.animate-option').children('.card-body').addClass('border-1').removeClass('border-2 border-success')
                $(this).children('.card-body').addClass('border-2 border-success').removeClass('border-1');
                //
                _self.getAnimationOption(animationType);
            });
        } catch (_) {
            console.error("can't create Animation bar");
        }
    }
    window.ImageEditor.prototype.initializeObjectAnimation = objectAnimation;
})();
