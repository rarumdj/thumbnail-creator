<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- favicon -->
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/logo/logo-icon-light.svg') }}" />
    <!-- Title -->
    <title>Thumbnails</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Icon Links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/creator/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- recommended -->
    {{-- <script src="https://www.WebRTC-Experiment.com/RecordRTC.js"></script> --}}

    <script src="https://www.WebRTC-Experiment.com/RecordRTC.js"></script>
    <script src="https://www.webrtc-experiment.com/screenshot.js"></script>
    <script src="https://www.webrtc-experiment.com/gif-recorder.js"></script>

    <script>
        jQuery.fn.outerHTML = function() {
            return jQuery('<div />').append(this.eq(0).clone()).html();
        };
        Number.prototype.countDecimals = function() {
            if (Math.floor(this.valueOf()) === this.valueOf()) return 0;
            return this.toString().split(".")[1].length || 0;
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.3/fabric.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.css">

    <script src="{{ asset('assets/creator/vendor/grapick.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/creator/vendor/grapick.min.css') }}">

    <script src="{{ asset('assets/creator/vendor/undo-redo-stack.js') }}"></script>

    <script src="{{ asset('assets/creator/lib/core.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/toolbar.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/canvas.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/shapes.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/media.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/background.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/animations.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/objectAnimation.js') }}"></script>

    <script src="{{ asset('assets/creator/lib/freeDrawSettings.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/canvasSettings.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/selectionSettings.js') }}"></script>

    <script src="{{ asset('assets/creator/lib/drawingLine.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/drawingPath.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/drawingText.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/tip.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/upload.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/copyPaste.js') }}"></script>

    <script src="{{ asset('assets/creator/lib/utils.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/zoom.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/saveInBrowser.js') }}"></script>
    <script src="{{ asset('assets/creator/lib/templates.js') }}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vanillatoasts.css') }}">
    @yield('styles')
    @livewireStyles
</head>

<body class="app-body bg-light">
    <div class="app-wrapper">
        <main class="app-main">
            <header class="app-header bg-white">
                <x-creator-header />
            </header>
            <article class="app-content">
                @yield('content')
            </article>
            @yield('creator-footer')
        </main>
    </div>
    @yield('toast')
    @yield('modals')
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    @yield('jquery-scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('assets/creator/script.js') }}"></script>
    <script src="{{ asset('assets/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/tinymce.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/creator.js') }}"></script>
    <script src="{{ asset('assets/js/vanillatoasts.js') }}"></script>
    <script>
        let toastrImageUrl = "{{ asset('assets/img/logo/icon.png') }}";
    </script>
    <script src="{{ asset('assets/js/toastr.js') }}"></script>
    @yield('scripts')
    @livewireScripts
</body>

</html>