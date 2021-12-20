$(document).ready(function () {

    $('.login_btn').on('click', function () {
        var btn = $(this);
        btn.attr('disabled', true).html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Please wait...`);
        $('form[name=login-form]').submit();
    })
})