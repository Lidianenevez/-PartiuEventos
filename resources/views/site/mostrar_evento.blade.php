@extends('layouts.site')

@section('content')

 <main id="main" class="main-page">

    <!--==========================
      Detalhes do evento
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>{{ $e->nome_evento }}</h2>
        </div>

        <div class="row">
          <div class="col-md-6">
             <img src="{{ asset('storage/posts/'.$e->fk_user_id.'/'.$e->imagem) }}" alt="banner evento" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h3>Descrição</h3>
             
              <p>{{ $e->descricao }}</p>
 
              <div class="social">
                      <i class="fa fa-map-marker" aria-hidden="true"></i> <span>local:</span><br>
                      <i class="fa fa-calendar" aria-hidden="true"></i> <span>Data:</span><br>
                      <i class="fa fa-clock-o" aria-hidden="true"></i> <span>horario:</span><br>
                      <i class="fa fa-money" aria-hidden="true"></i> <span>R$ {{ $e->preco }}</span>
                    </div>
              <center>
               <div class="social-links">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
              </center>
            </div>
          </div>
          
        </div>
      </div>

    </section>

  </main>
@endsection
