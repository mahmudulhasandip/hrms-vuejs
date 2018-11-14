<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Website title --}}
        <title>Laravel</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.ico') }}">

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

        <!-- Icons css -->
        <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/dripicons/webfont/webfont.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <!-- build:css -->
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css" />
        <!-- endbuild -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body >


        {{-- main #app div --}}
        <div id="app">

            {{-- main component --}}
            <main-app/>

        </div>

        <!--This page JavaScript -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        {{-- <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script> --}}
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>


    </body>
</html>
