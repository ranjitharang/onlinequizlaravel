<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>SB Admin 2 - Bootstrap Admin Theme</title>



    <!-- Bootstrap Core CSS -->

    <link href="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <link href="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">



</head>

<body>



    <div id="wrapper">



        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            @include('theme.header')

            @include('theme.sidebar')

        </nav>



        <div id="page-wrapper">

            @yield('content')

        </div>

        <!-- /#page-wrapper -->



    </div>

    <!-- /#wrapper -->



    <!-- jQuery -->

    <script src="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}"></script>



    <!-- Metis Menu Plugin JavaScript -->

    <script src="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}"></script>



    <!-- Morris Charts JavaScript -->

    <script src="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}"></script>

    <script src="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}"></script>

    <script src="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}"></script>



    <!-- Custom Theme JavaScript -->

    <script src="{{ asset('AdminLTE/vendor/fontawesome-free/css/all.min.css') }}"></script>



</body>



</html>