<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>#PartiuEventos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
  <link rel="manifest" href="img/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

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
    <li class="menu-active"><a href="index.blade.php">Home</a></li>
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
        <li><a class="linkmenu" data-toggle="modal" data-target="#cadastro">Home</a></li>
      @else
      <li><a class="linkmenu" href="{{ route('login') }}">Login</a></li>
        @if (Route::has('register'))
          <li><a class="linkmenu" data-toggle="modal" data-target="#cadastro">Cadastre-se</a></li>
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
<main id="main" class="main-page">
  <!--==========================
    logo central
    ============================-->
    <section id="intro">
    <div class="intro-container wow fadeIn">
	 <!--<div class="social-links">
		<a href="#" class="twitter"><i class=" btn fa fa-twitter"></i></a>
		<a href="#" class="facebook"><i class="btn fa fa-facebook"></i></a>
		<a href="#" class="instagram"><i class="btn fa fa-instagram"></i></a>
		<a href="#" class="google-plus"><i class="btn fa fa-google-plus"></i></a>
	</div> -->

	<img src="img/logo.jpg" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 300px; ">

  <form>
    <div class="form-row">
     <div class="form-group col-md-5">
      <label class="labelbranca">Nome</label>
      <input type="text" class="form-control" placeholder="Pesquisar por nome" >
    </div>
    <div class="form-group col-md-5">
      <label for="inputCity" class="labelbranca">Cidade</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Pesquisar por cidade" >
    </div>
    <div class="form-group col-md-2">
      <button class="btn btn3" type="submit" >Procurar <i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
  </div>
  
</form>
</div>
    </section>

    <main id="main">
    <!--==========================
      Eventos em Destaques
      ============================-->
      <section id="speakers" class="wow fadeInUp">
      <div class="container">
  <div class="section-header">
    <h2>Eventos em Destaque</h2>
  </div>

  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="speaker">
        <img src="img/speakers/5.jpg" alt="Speaker 1" class="img-fluid">
        <div class="details">
          <center>
            <h3><a class="nomeevento" href="speaker-details.html">Hubert Hirthe</a></h3>
            <div class="social">
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
              <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>
              <a href="" class="btn4">Saiba mais</a>
            </div>
          </center>
        </div>
    </div>
  </div>
    <div class="col-lg-4 col-md-6">
      <div class="speaker">
        <img src="img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
        <div class="details">
          <center>
            <h3><a class="nomeevento" href="speaker-details.html">Hubert Hirthe</a></h3>
            <div class="social">
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
              <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>
              <a href="" class="btn4">Saiba mais</a>
            </div>
          </center>
        </div>
    </div>
  </div>
    <div class="col-lg-4 col-md-6">
      <div class="speaker">
        <img src="img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
       <div class="details">
          <center>
            <h3><a class="nomeevento" href="speaker-details.html">Hubert Hirthe</a></h3>
            <div class="social">
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
              <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>
              <a href="" class="btn4">Saiba mais</a>
            </div>
          </center>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="speaker">
        <img src="img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
        <div class="details">
          <center>
            <h3><a class="nomeevento" href="speaker-details.html">Hubert Hirthe</a></h3>
            <div class="social">
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
              <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>
              <a href="" class="btn4">Saiba mais</a>
            </div>
          </center>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="speaker">
        <img src="img/speakers/1.jpg" alt="Speaker 5" class="img-fluid">
        <div class="details">
          <center>
            <h3><a class="nomeevento" href="speaker-details.html">Hubert Hirthe</a></h3>
            <div class="social">
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
              <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>
              <a href="" class="btn4">Saiba mais</a>
            </div>
          </center>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="speaker">
        <img src="img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
        <div class="details">
          <center>
            <h3><a class="nomeevento" href="speaker-details.html">Hubert Hirthe</a></h3>
            <div class="social">
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>
              <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>
              <a href="" class="btn4">Saiba mais</a>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>

      </section>

    <!--==========================
      Eventos do Dia
      ============================-->
      <section id="schedule" class="section-with-bg">

        <div class="container wow fadeInUp">
  <div class="section-header">
    <h2>Eventos mais Recentes</h2>
  </div>

  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Hoje</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Amanhã</a>
    </li>
  </ul>

  

  <div class="tab-content row justify-content-center">

    <!-- Schdule Day 1 -->
    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

      <div class="row schedule-item">
        <div class="col-md-2"><time>10:00 AM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/1.jpg" alt="Brenden Legros">
          </div>
          <h4>Keynote <span>Brenden Legros</span></h4>
          <p>Facere provident incidunt quos voluptas.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>11:00 AM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
          </div>
          <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
          <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>12:00 AM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/3.jpg" alt="Cole Emmerich">
          </div>
          <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
          <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>02:00 PM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/4.jpg" alt="Jack Christiansen">
          </div>
          <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
          <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>03:00 PM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
          </div>
          <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
          <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>04:00 PM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/6.jpg" alt="Willow Trantow">
          </div>
          <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
          <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
        </div>
      </div>

    </div>
    <!-- End Schdule Day 1 -->

    <!-- Schdule Day 2 -->
    <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

      <div class="row schedule-item">
        <div class="col-md-2"><time>10:00 AM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/1.jpg" alt="Brenden Legros">
          </div>
          <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
          <p>Facere provident incidunt quos voluptas.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>11:00 AM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
          </div>
          <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
          <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>12:00 AM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/3.jpg" alt="Cole Emmerich">
          </div>
          <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
          <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>02:00 PM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/4.jpg" alt="Jack Christiansen">
          </div>
          <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
          <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>03:00 PM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
          </div>
          <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
          <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
        </div>
      </div>

      <div class="row schedule-item">
        <div class="col-md-2"><time>04:00 PM</time></div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="img/speakers/6.jpg" alt="Willow Trantow">
          </div>
          <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
          <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
        </div>
      </div>

    </div>
    <!-- End Schdule Day 2 -->

    

  </div>

</div>
      </section>
      
    <!--==========================
      icones de estrelas to guardando
    
    
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
             
              ============================-->
    <!--==========================
      Categorias
      ============================-->
      <section id="gallery" class="wow fadeInUp">

       <div class="container">
	<div class="section-header">
		<h2>Categorias</h2>
		<p>Check our gallery from the recent events</p>
	</div>
</div>

<div class="owl-carousel gallery-carousel"  id="carouselExampleControls">
	<a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
	<a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
	<a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
	<a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
	<a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
	<a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
	<a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
	<a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
	 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    
  </a>
</div>

     </section>
     
    <!--==========================
      Perguntas
      ============================-->
      <section id="faq" class="wow fadeInUp">

        <div class="container">
          <div class="section-header">
            <h2>F.A.Q </h2>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>

        </div>

      </section>

    <!--==========================
      Planos
      ============================-->
      <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">
          <div class="section-header">
            <h2>F.A.Q </h2>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                  </div>
                </li>
                
                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>

        </div>

     </section>
</main>
     

  <!--==========================
    Footer
    ============================-->
    <footer id="footer">
    <div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-info">
        <center><img src="img/logo.jpg" alt="logo" class="rounded-circle img-center img-fluid shadow shadow-lg--hover"></center>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris   </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong>#PartiuEventos </strong>2018. 
  </div>
  
</div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--==========================
    Modal login
    ============================-->
    <div class="col-md-4">
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                      <div class="card-header bg-white pb-2">
                        <div class="text-muted text-center mb-3">
                        </div>
                        <div class="btn-wrapper text-center">
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                              <img src="img/icon/google.svg">
                            </span>
                            <span class="btn-inner--text">Google</span>
                          </a>
                        </div>
                      </div>
                      <div class="card-body px-lg-5 py-lg-5 cardmodal">
                        <div class="text-center text-muted mb-4">
                          <small class="logintext">Faça seu login</small>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                          @csrf
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
                              </div>
                              <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                              </div>
                              <input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                            </div>
                          </div>
                          <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                            <label class="custom-control-label" for="customCheckLogin">
                              <span>Lembre-me</span>
                            </label>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn2 my-4">Entrar</button>
                            <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<!--==========================
    Modal Cadastro
    ============================-->

    <div class="col-md-4">
            <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                      <div class="card-header bg-white pb-2">
                        <div class="text-muted text-center mb-3">
                        </div>
                        <div class="btn-wrapper text-center">
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                              <img src="img/icon/google.svg">
                            </span>
                            <span class="btn-inner--text">Google</span>
                          </a>
                        </div>
                      </div>
                      <div class="card-body px-lg-5 py-lg-5 cardmodal">
                        <div class="text-center text-muted mb-4">
                          <small class="logintext">Faça seu Cadastro</small>
                        </div>
                        <form role="form">
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control" placeholder="Nome" type="text">
                            </div>
                          </div>
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control" placeholder="Email" type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control" placeholder="Senha" type="password">
                            </div>
                          </div>
                          <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                            <label class="custom-control-label" for="customCheckRegister">
                              <span>Eu concordo com a <a href="#" style="color: blue">política de privacidade</a> </span>
                            </label>
                          </div>
                          <div class="text-center">
                            <button type="button" class="btn btn2 my-4">Entrar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <!-- <script src="contactform/contactform.js"></script> -->

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>

  </html>