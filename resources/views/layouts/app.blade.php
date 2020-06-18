<!DOCTYPE html>
<html lang="@yield('lang')">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0" />
  <meta name="description" content="{{$cv->presentation}}" />
  <meta name="author" content="{{$cv->name}}" />

  <title>@yield('title')</title>

  <!-- CSS -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet" />
  <link href="public/css/owl.carousel.min.css" rel="stylesheet" />
  <link href="public/css/owl.theme.default.min.css" rel="stylesheet" />
  <link href="public/css/animate.min.css" rel="stylesheet" />
  <link href="public/css/jquery.pagepiling.css" rel="stylesheet" />
  <link href="public/css/jquery.fancybox.min.css" rel="stylesheet" />
  <link href="public/css/LineIcons.css" rel="stylesheet" />

  <!-- Main CSS -->
  <link href="public/css/style.css" rel="stylesheet" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="public/img/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="public/img/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="public/img/favicons/favicon-16x16.png" />

</head>

<body class="body-copyright-light">
  <div class="preloader">
    <div class="three-bounce">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
    </div>
  </div>
  @yield("wrapper")

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script>
    window.jQuery ||
        document.write('<script src="js/jquery.min.js"><\/script>');
  </script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="public/js/jquery.pagepiling.min.js"></script>
  <script src="public/js/jquery.fancybox.min.js"></script>
  <script src="public/js/jquery.validate.min.js"></script>
  <script src="public/js/script.js"></script>
</body>

</html>