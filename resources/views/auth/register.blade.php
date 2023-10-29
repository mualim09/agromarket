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
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{ asset('assets/img/ilustrasi/b1.png') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>
                        <div class="card card-primary">
                            <form class="needs-validation" novalidate="" method="POST"
                                action="{{ url('reg-store') }}">
                                <div class="card-header">
                                    <h4>Register</h4>
                                </div>
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required="" 
                                            autofocus value="{{ old('nama') }}">
                                        <div class="invalid-feedback">
                                            Masukan nama anda!!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required="" value="{{ old('email') }}">
                                        <div class="invalid-feedback">
                                            Email tidak valid!!
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                                                required="">
                                            <div class="invalid-feedback">
                                                Masukan password anda!!
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Password</label>
                                            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password"
                                                required="" id="confirm_password">
                                            <div style="margin-top: 0.25rem; font-size: 80%;" id="check_password"></div>
                                            <div class="invalid-feedback">
                                                Password tidak valid!!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input"
                                                id="agree" required>
                                            <label class="custom-control-label" for="agree">I agree with the terms
                                                and conditions</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-inline: 1.5rem">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="simple-footer">
                    Agromarket 2023
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
    </script>
</body>

</html>
