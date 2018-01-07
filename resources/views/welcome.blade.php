<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YDi - Core v9.0</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,700|Passion+One:700" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}"  />

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/images/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/images/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/images/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/images/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/images/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/images/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/images/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/images/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/images/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/images/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('/images/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#5f7801">
        <meta name="msapplication-TileImage" content="{{ asset('/images/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#5f7801">
    </head>
    <body>
        <div class="position-ref full-height">
          <div class="banner flex-center">
            <div class="overlay">
              <div class="first"></div>
              <div class="second"></div>
            </div>
            <div class="header">
              <img src="{{ asset('/images/YD1.png') }}" class="logo"/>
              <ul>
                <li><i class="fa fa-bars"></i></li>
                <li><a href=''>About YDi</a></li>
                <li><a href=''>Soul Food</a></li>
                <li><a href=''>Lifestyle/Fashion</a></li>
                <li><a href=''>Art</a></li>
                <li><a href=''>YDi TV</a></li>
                <li><a href=''>Business/Career</a></li>
                <li><a href=''>Academics</a></li>
              </ul>
            </div>
            <div class="content">
              <div class="details">
                <div class="title"><a href="prayers">Annual YDI 21 Days Prayer & Fasting<br/>Program</a></div>
                <div class="preamble"></div>
                <div class="date">Monday, Jan 8th 2018</div>
              </div>
              <div class="cover"></div>
            </div>
          </div>
        </div>
    </body>
</html>
