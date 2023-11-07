<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Agromarket</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">

    <!-- Plugins -->
    {{-- Datatables --}}
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css') }}">

    {{-- CSS Libraries --}}
    <link rel="stylesheet" href="{{ asset('assets/css/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/selectric.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    {{-- Start GA --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>

    <style>
        .buy-card:hover {
            background-color: #b3d3dd !important;
        }
    </style>
</head>

<body class="layout-1">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            {{-- Navbar/Header --}}
            @include('layouts.navbar-seller')

            @include('sweetalert::alert')

            {{-- sidebar --}}
            <div class="main-sidebar sidebar-style-2">
                @include('layouts.sidebar-seller')
            </div>

            {{-- Content --}}
            @yield('content')

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/js/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/js/modules/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modules/nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/modules/moment.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- Plugins -->

    <!-- JS Libraies -->
    <script src="{{ asset('assets/js/modules/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/js/modules/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/modules/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modules/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/js/modules/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/js/modules/selectric.min.js') }}"></script>
    <script src="{{ asset('assets/js/modules/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/modules/index-0.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    {{-- Datatables --}}
    {{-- <script src="{{ url('https://code.jquery.com/jquery-3.7.0.js') }}"></script> --}}
    <script src="{{ url('https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var table = $('#tabel1').DataTable({
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#tabel1_wrapper .col-md-6:eq(0)');
        });
    </script>

</body>

</html>
