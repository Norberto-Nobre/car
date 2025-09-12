<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Car Rental || E-Learning HTML Template">

    <title>CHANA RENT-A-CAR</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/user/icone.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/smoothScorllbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/classic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/classic.date.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/timeline.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate-on-scroll.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
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
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/smooth-scrollbar.js')}}"></script>
    <script src="{{asset('assets/js/vendor/picker.js')}}"></script>
    <script src="{{asset('assets/js/vendor/picker.date.js')}}"></script>

    <script src="{{asset('assets/js/timeline.min.js')}}"></script>
     <script src="{{asset('assets/js/conteudo-extensivel.js')}}"></script>

    <script src="{{asset('assets/js/date.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>


    <script>
        // TIMELINE
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});

    </script>

</body>

</html>
