
window.toastrs = {
    success: (title, message) => {
        $('.modal').modal('hide');
        VanillaToasts.create({

            // notification title
            title: title,

            // notification message
            text: message,

            // success, info, warning, error   / optional parameter
            type: 'success',

            // path to notification icon
            icon: toastrImageUrl,

            // topRight, topLeft, topCenter, bottomRight, bottomLeft, bottomCenter
            positionClass: 'topRight',

            // auto dismiss after 5000ms
            timeout: 4000,

            // executed when toast is clicked
            callback: function () { }

        });
    },
    error: (title, message) => {
        $('.modal').modal('hide');
        VanillaToasts.create({

            // notification title
            title: title,

            // notification message
            text: message,

            // success, info, warning, error   / optional parameter
            type: 'error',

            // path to notification icon
            icon: toastrImageUrl,

            // topRight, topLeft, topCenter, bottomRight, bottomLeft, bottomCenter
            positionClass: 'topRight',

            // auto dismiss after 5000ms
            timeout: 4000,

            // executed when toast is clicked
            callback: function () { }

        });
    }
}