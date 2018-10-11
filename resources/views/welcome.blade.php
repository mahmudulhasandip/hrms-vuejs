<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/vendors/css/base/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/css/base/elisyam-1.2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- main #app div --}}
            <div id="app">
                {{-- main component --}}
                <main-app/>
            </div>
        </div>
        <script src="{{ asset('assets/vendors/js/base/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/js/base/core.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/js/nicescroll/nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/js/app/app.min.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
