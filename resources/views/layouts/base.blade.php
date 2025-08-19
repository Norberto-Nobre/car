<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Car Rental || E-Learning HTML Template">

    <title>Car rental</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/user/favicon.png">

    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/smoothScorllbar.css">
    <link rel="stylesheet" href="assets/css/vendor/classic.css">
    <link rel="stylesheet" href="assets/css/vendor/classic.date.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body class="x-hidden">

     <!-- PRELOADER START -->
    <div id="preloader">
        <div class="spinner"></div>

        <div id="content"></div>
    </div>

    <!-- PRELOADER END -->

    @include('layouts.header')

    <main class="flex-1 w-full">
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- Jquery Js -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/smooth-scrollbar.js"></script>
    <script src="assets/js/vendor/picker.js"></script>
    <script src="assets/js/vendor/picker.date.js"></script>
    <script src="assets/js/date.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
