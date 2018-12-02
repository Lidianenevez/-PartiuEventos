<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>#PartiuEventos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('mg/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ url('img/favicon-96x96.png') }}">
  <link rel="manifest" href="img/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ url('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
    ============================-->
    <header id="header">
      <div class="container">
      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.jpg" alt="" title=""></a>
      </div>

<nav id="nav-menu-container">
  <ul class="nav-menu">
    <li class="linkmenu"><a href="{{ route('inicial') }}">Inicial</a></li>
    <li><a href="eventos.blade.php">Eventos</a></li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categorias
      </a>
      <div class="dropdown-menu" >
        <a class="dropdown-item" href="#">Show</a>
        <a class="dropdown-item" href="#">Palestras</a>
        <a class="dropdown-item" href="#">Workshops</a>
      </div>
    </li>
    @if (Route::has('login'))
      @auth
        <li><a class="linkmenu" href="{{ route('home') }}">Home</a></li>
      @else
      <li><a class="linkmenu" href="{{ route('login') }}">Login</a></li>
        @if (Route::has('register'))
          <li><a class="linkmenu" href="{{ route('register') }}">Cadastre-se</a></li>
        @endif
      @endauth
    @endif
    <!-- <li><a class="linkmenu" data-toggle="modal" data-target="#cadastro">Cadastre-se</a></li>
    <li><a class="linkmenu" data-toggle="modal" href="{{ route('login') }}" data-target="#login">Login</a></li>
    <li><a href="novo-evento.blade.php" class="about-btn scrollto">Divulgar Evento</a></li> -->
  </ul>

</nav><!-- #nav-menu-container -->
</div>
      </header><!-- #header -->
      @yield('content')
          
    <!-- JavaScript Libraries -->
    <script src="{{ url('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ url('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ url('lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ url('lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ url('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('vendor/artesaos/cidades/js/scripts.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <!-- <script src="{{ url('contactform/contactform.js') }}"></script> -->

    <!-- Template Main Javascript File -->
    <script src="{{ url('js/main.js') }}"></script>
  </body>

  </html>