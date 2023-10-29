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

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <style>
        .buy-card:hover {
            background-color: #b3d3dd !important;
        }
    </style>
</head>

<body class="layout-3">
    <div id="app">

        {{-- Navbar/Header --}}
        @include('layouts.navbar-user')

        {{-- Content --}}
        @yield('content')

        {{-- Footer --}}
        <footer style="padding-bottom: 0">
            {{-- <div class="footer-left">
                Copyright © 2023 <div class="bullet"></div> Design By <a href="#">Rahmat Andyka</a>
            </div>
            <div class="footer-right">
                v1.0.0
            </div> --}}
            <div class="hero-bracket">
                <section class="hero-waves">
                    <div class="content-hero">
                        <h2>Welcome, Ujang!</h2>
                        <p>You almost arrived, complete the information about your account to complete registration.</p>
                        {{-- <div class="mt-4">
                            <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                                Setup Account</a>
                        </div> --}}
                    </div>
                    <div class="waves"></div>
                </section>
            </div>
        </footer>

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

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
