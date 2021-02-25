<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/primer.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style type="text/css">
body {
    font-family: 'Open Sans', sans-serif;
}

    .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
        bottom: 0px;
        left: 0;
        width: 100%;
    }
    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #EF003C;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
      padding-bottom: 2em;
    }

    .swiper-slide {
      text-align: center;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    </style>

    @stack('header')
</head>
<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ mix('js/app.js') }}"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 20,
        loop: true,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 20
    },
    1092: {
      slidesPerView: 4,
      spaceBetween: 20
    }
  }
    });
  </script>

    @stack('scripts')
</body>
</html>
