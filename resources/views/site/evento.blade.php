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
          <input type="text" class="form-control" value="{{ old('nome_evento') }}" name='nome_evento' placeholder="Pesquisar por nome" >
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
          <button class="btn btn3" type="submit" >Procurar <i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
      </form>
    </div>
  </section>
  <section id="speakers" class="wow fadeInUp">
    <div class="row">
      @foreach($evento as $e)
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="{{ asset('storage/posts/'.$e->fk_user_id.'/'.$e->imagem) }}" alt="" class="img-fluid">
            <div class="details">
              <center>
                <h3><a class="nomeevento" href="speaker-details.html">{{ $e->nome_evento }}</a></h3>
                <div class="social">
                  <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $e->cidade }}</a>
                  <a href=""><i class="fa fa-calendar" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                  <a href="" class="btn4">Saiba mais</a>
                </div>
              </center>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
</main>
@endsection