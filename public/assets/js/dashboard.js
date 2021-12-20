$(document).ready(function () {
    // EVENTLISTENERS
    // DISPLAY SUCCESS MODAL
    window.addEventListener("showSuccessModal", function (params) {
        let data = params.detail;
        toastrs.success(data.title, data.message);
    });

    window.addEventListener("showFailureModal", function (params) {
        // $('.modal').modal('hide');
        let data = params.detail;
        toastrs.error(data.title, data.message);
    });

    window.addEventListener("deleteWorkspaceModal_Show", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("deleteWorkspaceModal"),
            {}
        );
        var modalToggle = document.getElementById("deleteWorkspaceModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("deleteUserModal_Show", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("deleteUserModal"),
            {}
        );
        var modalToggle = document.getElementById("deleteUserModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("changePasswordModal_show", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("changePasswordModal"),
            {}
        );
        var modalToggle = document.getElementById("changePasswordModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("mySavedThumbnail", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("thumbnailListModal"),
            {}
        );
        var modalToggle = document.getElementById("thumbnailListModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("showDuplicateTemplateModal", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("duplicateDesignModal"),
            {}
        );
        var modalToggle = document.getElementById("duplicateDesignModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("showConfirmCopyModal", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("confirmCopyModal"),
            {}
        );
        var modalToggle = document.getElementById("confirmCopyModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("showDeleteTemplateModal", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("deleteTemplateModal"),
            {}
        );
        var modalToggle = document.getElementById("deleteTemplateModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("showSaveSystemTemplateNameModal", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("saveSystemTemplateNameModal"),
            {}
        );
        var modalToggle = document.getElementById(
            "saveSystemTemplateNameModal"
        ); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("showShareTemplateModal", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("shareTemplateModal"),
            {}
        );
        var modalToggle = document.getElementById("shareTemplateModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    window.addEventListener("showSelectPageModal", function (params) {
        let data = params.detail;
        let selectTag = document.getElementById("share_pages");
        data.forEach((page) => {
            let option = document.createElement("option");
            option.text = page["name"];
            option.value = page["id"];
            selectTag.appendChild(option);
        });
        var myModal = new bootstrap.Modal(
            document.getElementById("facebookSharePagesModal"),
            {}
        );
        var modalToggle = document.getElementById("facebookSharePagesModal"); // relatedTarget
        myModal.show(modalToggle);
    });

    let saveSystemTemplateNameForm = document.querySelector(
        "form[name=save-system-template]"
    );
    if (saveSystemTemplateNameForm) {
        saveSystemTemplateNameForm.addEventListener("submit", function (e) {
            e.preventDefault();
            let templateName = document.querySelector(
                "input[name=template-name]"
            ).value;
            Livewire.emit("saveSystemTemplate", templateName);
        });
    }

    let duplicateForm = document.querySelector("form[name=duplicate-template]");
    if (duplicateForm) {
        duplicateForm.addEventListener("submit", function (e) {
            e.preventDefault();
            let templateName = document.querySelector(
                "input[name=duplicate-template-name]"
            ).value;
            Livewire.emit("duplicateTemplate", templateName);
        });
    }

    let facebookPagesForm = document.querySelector("form[name=pages_to_share]");
    if (facebookPagesForm) {
        facebookPagesForm.addEventListener("submit", function (e) {
            e.preventDefault();
            let selectedPages =
                document.querySelector("select[name=pages]").value;
            Livewire.emit("shareToFacebook", selectedPages);
        });
    }

    let passwordForm = document.querySelector("form[name=password_form]");
    if (passwordForm) {
        passwordForm.addEventListener("submit", function (e) {
            e.preventDefault();
            let password = document.querySelector(
                "input[name=edit_password]"
            ).value;
            let confirmPassword = document.querySelector(
                "input[name=edit_password_confirmation]"
            ).value;
            Livewire.emit("changePassword", password, confirmPassword);
        });
    }

    let vimeoButton = document.getElementById("connect-vimeo");
    if (vimeoButton) {
        vimeoButton.addEventListener("click", function (e) {
            e.preventDefault();
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == XMLHttpRequest.DONE) {
                    if (xmlhttp.status == 200) {
                        let authResponse = xmlhttp.response;
                        let jsonResponse = JSON.parse(authResponse);
                        let authUrl = jsonResponse.url;
                        let windowRef;
                        windowRef = window.open(authUrl, "_blank");
                        if (window.focus) {
                            windowRef.focus();
                        }
                        var timer = setInterval(function () {
                            if (windowRef.closed) {
                                clearInterval(timer);
                                window.location.reload();
                            }
                        }, 1000);
                    } else {
                        console.log("An error occurred trying to fetch data");
                    }
                } else if (xmlhttp.readyState == XMLHttpRequest.LOADING) {
                    console.log("Loading");
                }
            };

            xmlhttp.open(
                "GET",
                "https://visualgenie.io/social/getVimeoAuthUrl",
                true
            );
            xmlhttp.send();
        });
    }

    let connectYoutube = document.getElementById("connect-youtube");
    if (connectYoutube) {
        connectYoutube.addEventListener("click", function (e) {
            e.preventDefault();
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == XMLHttpRequest.DONE) {
                    if (xmlhttp.status == 200) {
                        let authResponse = xmlhttp.response;
                        let jsonResponse = JSON.parse(authResponse);
                        let authUrl = jsonResponse.url;
                        let windowRef;
                        windowRef = window.open(authUrl, "_blank");
                        if (window.focus) {
                            windowRef.focus();
                        }
                        var timer = setInterval(function () {
                            if (windowRef.closed) {
                                clearInterval(timer);
                                window.location.reload();
                            }
                        }, 1000);
                    } else {
                        console.log("An error occurred trying to fetch data");
                    }
                } else if (xmlhttp.readyState == XMLHttpRequest.LOADING) {
                    console.log("Loading");
                }
            };

            xmlhttp.open(
                "GET",
                "https://visualgenie.io/social/getYoutubeAuthUrl",
                true
            );
            xmlhttp.send();
        });
    }

    let thumbnailSelector = document.getElementsByClassName(
        "thumbnail-selectable"
    );

    if (thumbnailSelector) {
        for (let i = 0; i < thumbnailSelector.length; i++) {
            thumbnailSelector[i].addEventListener("click", function () {
                // e.preventDefault
                let clickedBtn = thumbnailSelector[i];
                let thumbnailId = clickedBtn.getAttribute("data-thumbnail-id");
                Livewire.emit("selectThumbnail", thumbnailId);
            });
        }
    }

    window.addEventListener("confirmThumbnailChange", function () {
        var myModal = new bootstrap.Modal(
            document.getElementById("confirmThumbnailChangeModal"),
            {}
        );
        var modalToggle = document.getElementById(
            "confirmThumbnailChangeModal"
        ); // relatedTarget
        myModal.show(modalToggle);
    });

    $(".logout-link").on("click", function (e) {
        e.preventDefault();
        $("form[name=logout-form]").submit();
    });

    let editWorkspaceBtns = document.getElementsByClassName("edit-workspace");

    for (let i = 0; i < editWorkspaceBtns.length; i++) {
        editWorkspaceBtns[i].addEventListener("click", function (e) {
            e.preventDefault();
            clickedBtn = editWorkspaceBtns[i];
            document.getElementById("workspace_id").value = clickedBtn
                .closest("tr")
                .getAttribute("data-workspace");
            document.getElementById("edit-workspace-name").value =
                clickedBtn.offsetParent.parentNode.children[1].textContent;
        });
    }

    // document.getElementById('edit-workspace-btn').addEventListener('click', function (e) {
    //     e.preventDefault();
    //     this.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Please wait...`;
    //     document.querySelector('form[name=edit-workspace]').submit();
    // })

    $(".update_user_save_btn").on("click", function (e) {
        e.preventDefault();
        var btn = $(this);
        btn.attr("disabled", true).html(
            "<i class='fa fa-spinner fa-spin'></i> Please wait..."
        );
        $("form[name=edit_user]").submit();
    });

    $(".create_workspace_btn").on("click", function (e) {
        e.preventDefault();
        let btn = $(this);
        btn.attr("disabled", true).html(
            "<i class='fa fa-spinner fa-spin'></i> Please wait..."
        );
        $("form[name=create_workspace]").submit();
    });

    $(".create_workspace_user_btn").on("click", function (e) {
        e.preventDefault();
        let btn = $(this);
        btn.attr("disabled", true).html(
            "<i class='fa fa-spinner fa-spin'></i> Creating User..."
        );
        $("form[name=workspace_new_user]").submit();
    });

    $(".delete_workspace_user").on("click", function () {
        let user_id = $("input#edit_reseller_user_id").val();
        $("input#delete_user_input").val(user_id);
        $("form[name=delete_user_form]").submit();
    });
});

// Background Remover

//upload script...
$("#uploadInput").on("click", function (event) {
    if (
        !$("#uploadInput")[0].files[0] ||
        $("#uploadInput")[0].files[0].length === 0
    ) {
        $(".confirm-file").html('<i class="las la-exclamation-circle"></i>');
        $(".video-container").removeClass("active");
    }
});
//
$("#uploadInput").on("change", function (event) {
    var imgFile = $("#uploadInput")[0].files[0];
    console.log(imgFile);
    if (!imgFile || imgFile.length === 0) {
        $(".confirm-file").html('<i class="las la-exclamation-circle"></i>');
        $(".image-container").removeClass("active");
    }
    var _size = imgFile.size;
    var fSExt = new Array("Bytes", "KB", "MB", "GB"),
        i = 0;
    while (_size > 900) {
        _size /= 1024;
        i++;
    }
    var exactSize = Math.round(_size * 100) / 100 + " " + fSExt[i];

    $(".file-name").html(imgFile.name);
    $(".file-size").html(exactSize);
    $(".file-type").html(imgFile.type);
    $(".confirm-file").html('<i class="las la-check-circle"></i>');
});
//

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".image-area img").css({
                background:
                    'url("https://toppng.com/uploads/preview/clear-11550721271xzehwonrlp.png")',
                "box-shadow": "1px 1px 6px rgb(180, 180, 180)",
            });
            $(".hidden-btn").css({
                visibility: "visible",
            });
            $("#imageResult").attr("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $("#uploadInput").on("change", function () {
        readURL(input);
    });
});
// Background Remover Ends
//

// Copywriter

$(document).ready(function () {
    $("#template")
        .change(function () {
            $(this)
                .find("option:selected")
                .each(function () {
                    var optionValue = $(this).attr("value");
                    console.log(optionValue);
                    if (optionValue) {
                        $(".hidden")
                            .not("." + optionValue)
                            .hide();
                        $("." + optionValue).show();
                    } else {
                        $(".hidden").hide();
                    }
                });
        })
        .change();
});

// Slick Init
("use strict");

//=> Class Definition
var AppConfig = AppConfig || {};

$(function () {
    AppConfig = {
        //=> Initialize function to call all functions of the class
        init: function () {
            AppConfig.reInitFunction();
        },

        //=> Reinitialize powerful functions of app
        reInitFunction: function () {
            AppConfig.initSlickCarousel();
        },

        //=> Slick carousel
        slickCarousel: function (carousel, itemXl, itemLg, itemMd, itemSm) {
            var $carousel = $(carousel);
            var prev =
                '<button class="btn-prev btn btn-pill btn-air btn-default btn-icon-only"><i class="la la-angle-left"></i></button>';
            var next =
                '<button class="btn-next btn btn-pill btn-air btn-default btn-icon-only"><i class="la la-angle-right"></i></button>';

            // Set slick carousel
            $carousel.slick({
                arrows: true,
                dots: false,
                infinite: false,
                slidesToShow: itemXl,
                slidesToScroll: 1,
                speed: 1000,
                prevArrow: prev,
                nextArrow: next,
                autoplay: false,

                // Breakpoints
                responsive: [
                    {
                        breakpoint: 1440,
                        settings: {
                            slidesToShow: itemLg,
                        },
                    },

                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: itemMd,
                        },
                    },

                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: itemSm,
                        },
                    },

                    {
                        breakpoint: 380,
                        settings: {
                            slidesToShow: 2,
                            arrows: false,
                        },
                    },
                ],
            });
        },

        //=> Initialize app slick carousel
        initSlickCarousel: function () {
            AppConfig.slickCarousel(".carousel-item-4", 5, 4, 3, 2, 1);

            AppConfig.slickCarousel(".carousel-item-5", 6, 5, 4, 3, 2);

            AppConfig.slickCarousel(".carousel-item-6", 7, 6, 5, 4, 2);
        },
    };

    //=> Call class at document ready
    $(document).ready(AppConfig.init);
});

// End Slick
