/**
 * Define utils to save/load templates from database
 */
window.templates = {
    save: (name, jsonValue, canvasImage, dimensions) => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let currentUrl = window.location.href;
        let urlPath = new URL(currentUrl).pathname;

        let explodedPath = urlPath.split('/');
        let templateId = explodedPath.pop().replace('#', '');

        $.ajax({
            type: 'POST',
            url: '/creator/save',
            data: {
                dimensions: dimensions,
                templateId: templateId,
                templateName: name,
                canvasString: jsonValue,
                canvasImage: canvasImage,
            },
            success: function (data) {
                parseInt(data.status) == 201 ? toastrs.success('Template Created', data.message) : toastrs.error('Error Occurred', data.error);
                setTimeout(function () {
                    window.location.reload();
                }, 2000)
            },
            error: function () {
                alert('An error occurred trying to save template');
            }
        });
    },
    saveAsTemplate: (tags, jsonValue, canvasImage, dimensions) => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: '/creator/saveTemplate',
            data: {
                dimensions: dimensions,
                templateTags: tags,
                canvasString: jsonValue,
                canvasImage: canvasImage,
            },
            success: function (data) {
                parseInt(data.status) == 201 ? toastrs.success('Template Created', data.message) : toastrs.error('Error Occurred', data.error);
                setTimeout(function () {
                    window.location.reload();
                }, 2000)
            },
            error: function () {
                alert('An error occurred trying to save template');
            }
        });
    },
    load: (templateId, userTemplateId) => {
        return $.ajax({
            type: 'GET',
            url: '/creator/getdetails/' + templateId + '/' + userTemplateId,
            success: function (data) {
                // let templateRawJson = data.data;
                // let imageJson = JSON.parse(templateRawJson);
                // return imageJson;
            },
            error: function () {
                alert('An error occurred trying to save template');
            }
        });
    },
    remove: (name) => {
        localStorage.removeItem(name);
    },
    removeBackground: (imageData) => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        return $.ajax({
            type: 'POST',
            url: '/creator/removeBackground',
            data: {
                imageData: imageData,
            },
            success: function (data) {


            },
            error: function (error) {
                console.log(error);
                alert('An error occurred trying to save template');
            }
        });
    }
}