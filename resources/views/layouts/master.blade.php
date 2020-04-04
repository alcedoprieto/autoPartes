<!DOCTYPE html>
<html lang="es">    
    <head>
        <base href="{{URL::asset('/')}}" target="_top">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Laravel Layout</title>

        <!-- Fontfaces CSS-->
        <link href="{{{ URL::asset('css/font-face.css') }}}" rel="stylesheet" media="all">
        <link href="{{{ URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}}" rel="stylesheet" media="all">
        <link href="{{{ URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}}" rel="stylesheet" media="all">
        <link href="{{{ URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{{ URL::asset('vendor/bootstrap-4.1/bootstrap.min.css')}}}" rel="stylesheet" media="all">

        <link href="{{{ URL::asset('vendor/animsition/animsition.min.css')}}}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{{ URL::asset('css/theme.css')}}}" rel="stylesheet" media="all">


    </head>

    <body class="">
        <div class="page-wrapper">
        	@include('layouts.headerMobile')
            
            @include('layouts.sidebar')
            <div class="page-container">
            	@include('layouts.header')
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                        @yield('content')
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>

        <!-- Excel a Json -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.2/jszip.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.2/xlsx.min.js"></script>
        <!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
</html>
<!-- end document-->