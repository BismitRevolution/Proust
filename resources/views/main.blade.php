<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="Description of the page">

        <!-- Apple Devices -->
        <!-- <link rel="apple-touch-icon" href="/custom-icon.png"> -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="{{ asset('css/vendor/normalize.css') }}">
        <!-- Bootstrap -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-v4.0.min.css') }}"> -->
        <!-- Materialize -->
        <link rel="stylesheet" href="{{ asset('css/vendor/materialize.min.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Foundation ZURB -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/foundation.min.css') }}"> -->
        <!-- Lightbox -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/lightbox.css') }}"> -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/vendor/fontawesome-all.css') }}">
        <!-- Hamburger -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/hamburgers.min.css') }}"> -->
        <!-- FullPage Scrolling -->
        <link rel="stylesheet" href="{{ asset('css/vendor/fullpage.min.css') }}">
        <!-- Animate CSS -->
        <!-- <link rel="stylesheet" href="{{ asset('css/vendor/animate.min.css') }}"> -->
        <!-- Basic Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Navbar Style -->
        <link rel="stylesheet" href="{{ asset('css/_header.css') }}">
        <!-- Sidebar Style -->
        <link rel="stylesheet" href="{{ asset('css/_sidebar.css') }}">
        <!-- Footer Style -->
        <link rel="stylesheet" href="{{ asset('css/_footer.css') }}">
        <!-- Default Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @yield('extra-css')

        <!-- Google Open Sans -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->

        <title>@yield('title')</title>
    </head>
    <body>
        <!-- @include('_loading') -->
        @include('layouts._header')
        <div class="container">
            <div class="row" style="margin-top: 10px; padding-top: 20px;">
                <div class="col m8 s12">
                    @yield('content')
                </div>
                <div class="col m4 s12">
                    @include('layouts._sidebar')
                </div>
            </div>
        </div>

        <!-- JQuery -->
        <script type="application/javascript" src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->

        <!-- Bootstrap -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/bootstrap-v4.0.min.js') }}"></script> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

        <!-- Materialize -->
        <script type="application/javascript" src="{{ asset('js/vendor/materialize.min.js') }}"></script>

        <!-- PopperJS -->
        <!-- <script type="application/javascript" src="https://unpkg.com/popper.js"></script> -->

        <!-- TooltipJS -->
        <!-- <script type="application/javascript" src="https://unpkg.com/tooltip.js"></script> -->

        <!-- Foundation ZURB -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/what-input.js') }}"></script> -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/foundation.min.js') }}"></script> -->

        <!-- Font Awesome -->
        <script type="application/javascript" src="{{ asset('js/vendor/fontawesome-all.js') }}"></script>

        <!-- Fred Carousel -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/jquery.carouFredSel.js') }}"></script> -->

        <!-- GreenSock -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/utils/Draggable.min.js"></script>

        <!-- FullPage Scrolling -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/easings.min.js') }}"></script> -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/scrolloverflow.min.js') }}"></script> -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/fullpage.min.js') }}"></script> -->
        <!-- <script type="application/javascript" src="{{ asset('js/vendor/fullpage.extensions.min.js') }}"></script> -->

        <!-- Customization -->
        <script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="application/javascript" src="{{ asset('js/_header.js') }}"></script>
        <script type="application/javascript" src="{{ asset('js/_footer.js') }}"></script>
        @yield('extra-js')
        <!-- <script type="application/javascript" src="{{ asset('js/_finish.js') }}"></script> -->

        @include('layouts._footer')
    </body>
</html>
