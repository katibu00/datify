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
    <title>@yield('PageTitle') - Datify</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="/mobile/img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="/mobile/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/mobile/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/mobile/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/mobile/img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/mobile/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mobile/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/mobile/css/tiny-slider.css">
    <link rel="stylesheet" href="/mobile/css/baguetteBox.min.css">
    <link rel="stylesheet" href="/mobile/css/rangeslider.css">
    <link rel="stylesheet" href="/mobile/css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="/mobile/css/apexcharts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
     <!-- Dark mode switching -->
     <div class="dark-mode-switching">
        <div class="d-flex w-100 h-100 align-items-center justify-content-center">
          <div class="dark-mode-text text-center">
            <svg class="bi bi-moon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"></path>
            </svg>
            <p class="mb-0">Switching to dark mode</p>
          </div>
          <div class="light-mode-text text-center">
            <svg class="bi bi-brightness-high" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
            </svg>
            <p class="mb-0">Switching to light mode</p>
          </div>
        </div>
      </div>
    <!-- Header Area -->
    @include('layouts.sidenav')

    <div class="page-content-wrapper py-3">
      @yield('content')
    </div>
    <!-- Footer Nav -->
    @include('layouts.footer')
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
