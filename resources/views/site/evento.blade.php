@extends('layouts.site')

@section('content')
<main id="main" class="main-page">
  <section id="speakers" class="wow fadeInUp">
      <div class="container">

          <p>
  <button class="btn5" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Filtrar
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
   <center>
    <form method='post' action="{{ route('evento.busca') }}" >
        @csrf
        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="nome_evento">Nome do Evento</label>
          <input id="nome_evento" type="text" placeholder="Digite nome" class="form-control" name="nome_evento" value="{{ old('nome_evento') }}">
          @if ($errors->has('nome_evento'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('nome_evento') }}</strong>
            </span>
          @endif
        </div>
          <div class="form-group col-md-4">
          <label for="categoria">Categoria</label>
          <select class="form-control" id="categoria" name="categoria">
            <option value='1'>s</option>
            <option value='1'>s</option>
          </select>
          @if ($errors->has('categoria'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('categoria') }}</strong>
            </span>
          @endif
        </div>
      </div>
           <div class="form-row">
        <div class="form-group col-md-2">
          <label for="uf">Estado</label>
          <select class="form-control" default="AP" id="uf"></select>
        </div>
        <div class="form-group col-md-4">
          <label for="cidade">Cidade</label>
          <select id="cidade" name="cidade" class="form-control"></select>
          @if ($errors->has('cidade'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('cidade') }}</strong>
            </span>
          @endif
        </div>
          <div class="form-row">
        <div class="form-group col-md-6">
          <label for="data">Data</label>
          <input id="data" type="date" class="form-control" name="data" value="{{ old('data') }}">
          @if ($errors->has('data'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('data') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group col-md-4">
          <label for="hora">Hora</label>
          <input id="hora" type="time" class="form-control" name="hora" value="{{ old('hora') }}">
          @if ($errors->has('hora'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('hora') }}</strong>
          </span>
          @endif
        </div>

          <div class="form-group col-md-2">
            <button class="btn btn3" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </div>
      </form>
      </center>
  </div>
</div>

        
        <div class="row">
          @foreach ($evento as $e)
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="{{ asset('storage/posts/'.$e->fk_user_id.'/'.$e->imagem) }}" alt="" class="img-fluid">
                <div class="details">
                  <center>
                    <h3><a class="nomeevento" href="{{ route('evento.mostrar', [$e->id,kebab_case($e->nome_evento)]) }}">{{ $e->nome_evento }}</a></h3>
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
</main>
@endsection