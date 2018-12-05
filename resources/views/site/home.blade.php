@extends('layouts.site')

@section('content')

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

  <form method='post'>
    <div class="form-row">
     <div class="form-group col-md-5">
      <label class="labelbranca">Nome</label>
      <input type="text" class="form-control" name='nome' placeholder="Pesquisar por nome" >
    </div>
    <div class="form-group col-md-5">
      <label for="inputCity" class="labelbranca">Cidade</label>
      <input type="text" class="form-control" name='cidade' id="inputCity" placeholder="Pesquisar por cidade" >
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
@endsection