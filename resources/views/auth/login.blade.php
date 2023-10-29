<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register | Agromarket</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">

    <!-- Plugins -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('assets/img/ilustrasi/b1.png') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    {{ session('loginError') }}
                                </div>
                            </div>
                        @endif

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ url('login-store') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            tabindex="1" required="" autofocus value="{{ old('email') }}">
                                        <div class="invalid-feedback">
                                            Masukan Email Anda!!
                                        </div>

                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password" class="control-label">Password</label>
                                                <div class="float-right">
                                                    <a href="auth-forgot-password.html" class="text-small">
                                                        Forgot Password?
                                                    </a>
                                                </div>
                                            </div>
                                            <input id="password" type="password" class="form-control" name="password"
                                                tabindex="2" required="">
                                            <div class="invalid-feedback">
                                                Masukan password anda!!
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="showPw" class="custom-control-input"
                                                    id="agree" onclick="myFunction()">
                                                <label class="custom-control-label" for="agree">Show Password</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                tabindex="4">
                                                Login
                                            </button>
                                        </div>
                                </form>

                            </div>
                        </div>
                        <div class="simple-footer">
                            Agromarket 2023
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

    <script>
        $(document).ready(function() {
            $("#confirm_password").on('keyup', function() {
                var password = $("#password").val();
                var confirmPassword = $("#confirm_password").val();
                if (password != confirmPassword)
                    $("#check_password").html("Password tidak cocok!").css("color", "red");
                else
                    $("#check_password").html("Password cocok!").css("color", "green");
            });
        });

        function myFunction() {
            if (document.getElementById("password").type === "password") {
                document.getElementById("password").type = "text";
            } else {
                document.getElementById("password").type = "password";
            }
        }
    </script>
</body>

</html>
