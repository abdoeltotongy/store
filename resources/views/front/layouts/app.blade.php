<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title> Ecommerce Store</title>
    <title> @yield('title') </title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }} ">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }} ">

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    <!--

@yield('style')


-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    @extends('front.layouts.header')

    @yield('content')

    @extends('front.layouts.footer')


    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/accordions.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imgfix.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('js/custom.js') }}"></script>


    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
