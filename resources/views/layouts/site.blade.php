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
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ url('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet">

  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  {!! NoCaptcha::renderJs() !!}

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
        <a href="#intro" class="scrollto"><img src="{{ url('img/logo-mini.png') }}" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="linkmenu"><a href="{{ route('inicial') }}">Inicio</a></li>
          <li><a href="{{ route('evento') }}">Eventos</a></li>
          @if (Route::has('login'))
          @auth
            <li><a href="{{ route('evento.create') }}" class="linkmenu">Criar Evento</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o" aria-hidden="true" style="color: #f82249"></i> {{ auth::user()->name }}
            </a>
            <div class="dropdown-menu">
              <a href="{{ route('evento.index') }}" class="dropdown-item" >Meus Eventos</a>
              <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>

            </div>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          @else
          <li><a class="linkmenu" href="https://goo.gl/forms/hEhNt1CLiMjhdF692" target="blank">Ajude a melhorar</a></li>
          <li><a class="linkmenu" href="{{ route('login') }}">Login</a></li>
          @if (Route::has('register'))
          <li><a class="linkmenu" href="{{ route('register') }}">Cadastre-se</a></li>
          @endif
          <li><a href="{{ route('evento.create') }}" class="about-btn scrollto">Divulgar Evento</a></li>
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

  <!--==========================
    Footer
    ============================-->
  <footer id="footer">
    <div class="footer-top">

  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 footer-info">
        <center><img src="{{ url('img/logo.jpg') }}" alt="logo" class="rounded-circle img-center img-fluid shadow shadow-lg--hover"></center>
        <p>O <b>#PartiuEventos</b> é uma empresa que busca informar sobre os eventos que estão ocorrendo ou que irão ocorrer, além de possibilitar a venda de ingressos e a participação dos usuários no processo de feedback entre um produtor de eventos e quem participa do evento.</p>
      </div>

      <div class="col-lg-4 col-md-6 footer-links">
        <h4>Links</h4>
        <ul>
          <li><i class="fa fa-angle-right"></i> <a href="#">Inicio</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Sobre nós</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Termos de serviço</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Termos de serviço</a></li>
        </ul>
      </div>


      <div class="col-lg-4 col-md-6 footer-contact">
        <h4>Contato</h4>
          <strong>Telefone:</strong> (96) 0000-0000<br>
          <strong>E-mail:</strong> partiueventos@gmail.com<br>
        </p>

        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>#PartiuEventos </strong>2018.
      </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
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

  <script>
    $('#uf').ufs({
      onChange: function (uf) {
        $('#cidade').cidades({ uf: uf });
      }
    });
  </script>

  <!-- Contact Form JavaScript File -->
  <!-- <script src="{{ url('contactform/contactform.js') }}"></script> -->

  <!-- Template Main Javascript File -->
  <script src="{{ url('js/main.js') }}"></script>
</body>

</html>
