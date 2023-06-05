<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/imports/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('/imports/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('/imports/assets/css/templatemo-cyborg-gaming.css')}}">
    <link rel="stylesheet" href="{{asset('/imports/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('/imports/assets/css/animate.css')}}">
    <link rel="stylesheet"href="{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}"/>
    <!--

    TemplateMo 579 Cyborg Gaming

    https://templatemo.com/tm-579-cyborg-gaming

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
@include('home.pre_loader')
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
@include('home.header')
<!-- ***** Header Area End ***** -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-content">

                <!-- ***** Banner Start ***** -->
                @include('home.banner')
                <!-- ***** Banner End ***** -->
            @yield('content')

            </div>
        </div>
    </div>
</div>
<!-- ***** footer ***** -->
@include('home.footer')
<!-- ***** footer end ***** -->

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('/imports/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/imports/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('/imports/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('/imports/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('/imports/assets/js/tabs.js')}}"></script>
<script src="{{asset('/imports/assets/js/popup.js')}}"></script>
<script src="{{asset('/imports/assets/js/custom.js')}}"></script>


</body>

</html>
