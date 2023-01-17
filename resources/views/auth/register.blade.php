<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Datify - Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="/mobile/img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="/mobile/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/mobile/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/mobile/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/mobile/img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/mobile/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mobile/css/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="/mobile/css/tiny-slider.css"> --}}
    {{-- <link rel="stylesheet" href="/mobile/css/baguetteBox.min.css"> --}}
    {{-- <link rel="stylesheet" href="/mobile/css/rangeslider.css"> --}}
    {{-- <link rel="stylesheet" href="/mobile/css/vanilla-dataTables.min.css"> --}}
    {{-- <link rel="stylesheet" href="/mobile/css/apexcharts.css"> --}}
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/mobile/style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="/mobile/manifest.json">
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="custom-container">
        {{-- <div class="text-center px-"><img class="login-intro-img" src="/mobile/img/bg-img/36.png" width="50" alt=""></div> --}}
        <!-- Register Form -->
        <div class="register-form mt-4">
          <h6 class="mb-3 text-center">Log in to continue to Datify.</h6>
          <ul id="error_list"></ul>
          <form action="" id="registerForm">
            <div class="form-group">
              <input class="form-control" type="text" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" id="phone" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group position-relative">
              <input class="form-control" id="password" name="password" type="password" placeholder="Enter Password">
              <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i class="bi bi-eye-slash"></i></div>
            </div>
            <button class="btn btn-info login_btn w-100 mt-1" id="submit_btn" type="submit">Register</button>
          </form>
        </div>
        <!-- Login Meta -->
        <div class="register-form mt-4">
            <h6 class="mb-3 text-center">Or Register with</h6>
            <div class="row">
              <div class="col-12">
                <a class="btn btn-primary btn-facebook mb-3 w-100" href="#"><i class="bi bi-facebook me-3"></i>Register with Facebook</a>
                <a class="btn btn-primary btn-google mb-3 w-100" href="#"><i class="bi bi-google me-3"></i>Register with Google</a></div>
            </div>
          </div>

          <p class="mb-0">Already have an account? <a class="stretched-link" href="{{ route('login') }}">Login Instead</a></p>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files -->
    <script src="/jquery.min.js"></script>
    <script src="/mobile/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="/mobile/js/slideToggle.min.js"></script> --}}
    {{-- <script src="/mobile/js/internet-status.js"></script> --}}
    {{-- <script src="/mobile/js/tiny-slider.js"></script> --}}
    {{-- <script src="/mobile/js/baguetteBox.min.js"></script> --}}
    {{-- <script src="/mobile/js/countdown.js"></script> --}}
    {{-- <script src="/mobile/js/rangeslider.min.js"></script> --}}
    {{-- <script src="/mobile/js/vanilla-dataTables.min.js"></script> --}}
    {{-- <script src="/mobile/js/index.js"></script> --}}
    {{-- <script src="/mobile/js/magic-grid.min.js"></script> --}}
    {{-- <script src="/mobile/js/dark-rtl.js"></script> --}}
    <script src="/mobile/js/active.js"></script>
    <!-- PWA -->
    <script src="/mobile/js/pwa.js"></script>

    <script>
        $(document).ready(function() {

            $(document).on('submit', '#registerForm', function(e) {
                e.preventDefault();

                let formData = new FormData($('#registerForm')[0]);

                spinner = '<div class="spinner-border" style="width: 15px; height: 15px" role="status"></div>';

                $('#submit_btn').html(spinner);
                $('#submit_btn').attr("disabled", true);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "{{ route('register') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {

                        if (response.status == 201) {
                           
                            $('#registerForm')[0].reset();

                            Command: toastr["success"](
                                response.message
                            );
                            toastr.options = {
                                closeButton: false,
                                debug: false,
                                newestOnTop: false,
                                progressBar: false,
                                positionClass: "toast-top-right",
                                preventDuplicates: false,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                timeOut: "5000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                            };

                            $('#submit_btn').text("Submit");
                            $('#submit_btn').attr("disabled", false);
                        }

                        if (response.status == 401) {
                            $("#error_list").html("");
                            $("#error_list").addClass("alert text-danger");
                            $.each(response.errors, function(key, err) {
                                $("#error_list").append("<li>" + err + "</li>");
                            });
                            $("#submit_btn").text("Submit");
                            $("#submit_btn").attr("disabled", false);
                        }

                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        if (xhr.status === 419) {
                            Command: toastr["error"](
                                "Session expired. please login again."
                            );
                            toastr.options = {
                                closeButton: false,
                                debug: false,
                                newestOnTop: false,
                                progressBar: false,
                                positionClass: "toast-top-right",
                                preventDuplicates: false,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                timeOut: "5000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                            };

                            setTimeout(() => {
                                window.location.replace('{{ route('login') }}');
                            }, 2000);
                        }
                    },
                });

            });

        });
    </script>
  </body>
</html>