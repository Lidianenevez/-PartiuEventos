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
      @if (session('msg_danger'))
      <div class="alert alert-danger">
        {{ session('msg_danger') }}
      </div>
      @endif
      <form method='post' action="{{ route('evento.busca') }}">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-4">
            <label class="labelbranca">Nome</label>
            <input type="text" class="form-control" value="{{ old('nome_evento') }}" name='nome_evento' placeholder="Pesquisar">
            @if ($errors->has('nome_evento'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('nome_evento') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group col-md-2">
            <label class="labelbranca" for="uf">Estado</label>
            <select class="form-control" default="AP" id="uf"></select>
          </div>
          <div class="form-group col-md-4">
            <label class="labelbranca" for="cidade">Cidade</label>
            <select id="cidade" name="cidade" class="form-control"></select>
            @if ($errors->has('cidade'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('cidade') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group col-md-2">
            <button class="btn btn3" type="submit">Procurar <i class="fa fa-search" aria-hidden="true"></i></button>
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

        @foreach ($evento as $e)
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('storage/posts/'.$e->fk_user_id.'/'.$e->imagem) }}" alt="" class="img-fluid">
                <div class="details">
                  <center>
                    <h3><a class="nomeevento" href="{{ route('evento.mostrar', [$e->id,kebab_case($e->nome_evento)]) }}">{{ $e->nome_evento }}</a></h3>
                    <div class="social-links">
                      <form method="POST" action="processa.php" enctype="multipart/form-data">
      <div class="estrelas">
        <input type="radio" id="vazio" name="estrela" value="" checked>
        
        <label for="estrela_um"><i class="fa"></i></label>
        <input type="radio" id="estrela_um" name="estrela" value="1">
        
        <label for="estrela_dois"><i class="fa"></i></label>
        <input type="radio" id="estrela_dois" name="estrela" value="2">
        
        <label for="estrela_tres"><i class="fa"></i></label>
        <input type="radio" id="estrela_tres" name="estrela" value="3">
        
        <label for="estrela_quatro"><i class="fa"></i></label>
        <input type="radio" id="estrela_quatro" name="estrela" value="4">
        
        <label for="estrela_cinco"><i class="fa"></i></label>
        <input type="radio" id="estrela_cinco" name="estrela" value="5">
        
        <input type="submit" value="Avaliar" class="btn btn-outline-warning" style="margin-bottom: 7px;">
        
      </div>
    </form>
                    </div>
                    <div class="social">
                      <a  data-toggle="tooltip" data-placement="bottom" title="endereço"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                      <a  data-toggle="tooltip" data-placement="bottom" title="data-inicio"><i class="fa fa-calendar" aria-hidden="true"></i>
                       <a  data-toggle="tooltip" data-placement="bottom" title="data-fim"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                      <a href="{{ route('evento.mostrar', [$e->id,kebab_case($e->nome_evento)]) }}" class="btn4">Saiba mais</a>
                    </div>
                  </center>
                </div>
              </div>
            </div>
          @endforeach
        

      
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
           
          <div role="tabpanel" class="col-lg-6 tab-pane fade show active" id="day-1">

            @foreach ($evento as $e)
             <center>
              <div class="row schedule-item">
                <div class="col-md-4">
                  <div class="social">
                    <a  data-toggle="tooltip" data-placement="bottom" title="Av Prof"><i class="fa fa-map-marker"  style="color: #f82249" aria-hidden="true"></i></a>
                    <a  data-toggle="tooltip" data-placement="bottom" title="Av Prof"><i class="fa fa-calendar"  style="color: #f82249" aria-hidden="true"></i>
                    <a  data-toggle="tooltip" data-placement="bottom" title="Av Prof"><i class="fa fa-clock-o"  style="color: #f82249"aria-hidden="true"></i></a>
                </div>
              </div>
                <div class="col-md-8">
                  <h4> Evento: {{ $e->nome_evento }} </h4>
                   <a href="{{ route('evento.mostrar', [$e->id,kebab_case($e->nome_evento)]) }}" class="btn5">Saiba mais</a>
                </div>
              </div>
                 </center>
            @endforeach
         

          </div>

          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-6 tab-pane fade" id="day-2">

             @foreach ($evento as $e)
             <center>
              <div class="row schedule-item">
                <div class="col-md-4">
                  <div class="social">
                    <a  data-toggle="tooltip" data-placement="bottom" title="Av Prof"><i class="fa fa-map-marker"  style="color: #f82249" aria-hidden="true"></i></a>
                    <a  data-toggle="tooltip" data-placement="bottom" title="Av Prof"><i class="fa fa-calendar"  style="color: #f82249" aria-hidden="true"></i>
                    <a  data-toggle="tooltip" data-placement="bottom" title="Av Prof"><i class="fa fa-clock-o"  style="color: #f82249"aria-hidden="true"></i></a>
                </div>
              </div>
                <div class="col-md-8">
                  <h4> Evento: {{ $e->nome_evento }} </h4>
                   <a href="{{ route('evento.mostrar', [$e->id,kebab_case($e->nome_evento)]) }}" class="btn5">Saiba mais</a>
                </div>
              </div>
                 </center>
            @endforeach
                

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
    <section id="sponsors" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>categorias</h2>
        </div>

        <div class="row no-gutters sponsors-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <a href=""><img src="img/gallery/Eventos-Academicos.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <a href=""><img src="img/gallery/Eventos-Comunitarios.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <a href=""><img src="img/gallery/Eventos-Corporativos.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <a href=""><img src="img/gallery/Eventos-Culturais.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <a href=""><img src="img/gallery/Eventos-Educacionais.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <a href=""><img src="img/gallery/Eventos-Esportivos.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <a href=""><img src="img/gallery/Eventos-Politicos.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <a href=""><img src="img/gallery/Eventos-Sociais.png" class="img-fluid" alt=""></a>
            </div>
          </div>

        </div>

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
                <a data-toggle="collapse" class="collapsed" href="#faq1">O que é o #PartiuEventos? <i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    O #PartiuEventos é uma empresa que busca informar sobre os eventos que estão ocorrendo ou que irão
                    ocorrer, além de possibilitar a venda de ingressos e a participação dos usuários no processo de
                    feedback entre um produtor de eventos e quem participa do evento.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed"> Quais as vantagens de divulgar meu evento no
                  #PartiuEventos?<i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Aqui no #PartiuEventos é muito fácil as pessoas encontrarem  um evento de sua preferencia!
                    É cômodo e bem intuitivo. Contamos com as maiores tecnologias de marketing digital para
                    proporcionar a nossos clientes uma maior interação entre um produtor de eventos e seus 
                    participantes.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed"> Como funciona o sistema de feedback? <i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                    O feedback funciona de forma a informar a quem produz eventos o que os participantes do evento
                    acharam do mesmo, sendo essa informação fornecida de variadas formas, como, por exemplo, através de
                    votação, de relatórios pós eventos, dentre outras coisas.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">O que o #PartiuEventos visa para o futuro? <i
                    class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    Nossa meta é crescer cada vez mais, oferecendo aos nossos clientes ferramentas de marketing
                    atualizadas e que possibilitem que os mesmos possam divulgar seus eventos de forma eficiente. Para
                    isso, temos como objetivo manter o sistema sempre atualizado e pronto para atender as demandas de
                    nossos clientes.
                  </p>
                </div>
              </li>

              <li>

            </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Planos
      ============================-->

  </main>
  @endsection
