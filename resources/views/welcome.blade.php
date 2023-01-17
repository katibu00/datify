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
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Datify - Welcome</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/mobile/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mobile/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/mobile/css/tiny-slider.css">
    <link rel="stylesheet" href="/mobile/css/baguetteBox.min.css">
    <link rel="stylesheet" href="/mobile/css/rangeslider.css">
    <link rel="stylesheet" href="/mobile/css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="/mobile/css/apexcharts.css">
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
    <!-- Hero Block Wrapper -->
    <div class="hero-block-wrapper bg-primary">
      <!-- Styles -->
      <div class="hero-block-styles">
        <div class="hb-styles1" style="background-image: url('img/core-img/dot.png')"></div>
        <div class="hb-styles2"></div>
        <div class="hb-styles3"></div>
      </div>
      <div class="custom-container">
        <!-- Skip Page -->
        <div class="skip-page"><a href="{{ route('register') }}">Register an Account</a></div>
        <!-- Hero Block Content -->
        <div class="hero-block-content"><img class="mb-4" src="img/bg-img/19.png" alt="">
          <h2 class="display-4 text-white mb-3">Buy data at a subsidized price with ease</h2>
          <p class="text-white">Data is life and big things in life doesnt cost much, so should data.</p>
          <a class="btn btn-warning btn-lg w-100" href="{{ route('login') }}">Get Started</a>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files -->
    <script src="/mobile/js/bootstrap.bundle.min.js"></script>
    <script src="/mobile/js/slideToggle.min.js"></script>
    <script src="/mobile/js/internet-status.js"></script>
    <script src="/mobile/js/tiny-slider.js"></script>
    <script src="/mobile/js/baguetteBox.min.js"></script>
    <script src="/mobile/js/countdown.js"></script>
    <script src="/mobile/js/rangeslider.min.js"></script>
    <script src="/mobile/js/vanilla-dataTables.min.js"></script>
    <script src="/mobile/js/index.js"></script>
    <script src="/mobile/js/magic-grid.min.js"></script>
    <script src="/mobile/js/dark-rtl.js"></script>
    <script src="/mobile/js/active.js"></script>
    <!-- PWA -->
    <script src="/mobile/js/pwa.js"></script>
  </body>
</html>