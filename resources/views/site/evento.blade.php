@extends('layouts.site')

@section('content')
<main id="main" class="main-page">
  <section id="speakers" class="wow fadeInUp">
    <div class="container">
      @if (session('msg_danger'))
        <div class="alert alert-danger">
          {{ session('msg_danger') }}
        </div>
      @endif
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
                  <option value="">escolher</option>
                  @foreach ($categoria as $c)
                    <option value="{{ $c->id }}">{{ $c->nome_categoria }}</option>
                  @endforeach
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
                 <div class="social-links">
                    <form method="POST" action='{{ route('avalie', $e->id) }}'>
                        @csrf
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
                  <a  data-toggle="tooltip" data-placement="bottom" title="{{ $e->city['nome'] }}-{{ $e->city['uf'] }}"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                      <a  data-toggle="tooltip" data-placement="bottom" title="{{ date('d/m/Y', strtotime($e->datetime['data_inicio'])) }}"><i class="fa fa-calendar" aria-hidden="true"></i>
                       <a  data-toggle="tooltip" data-placement="bottom" title="{{ date('H:i:s', strtotime($e->datetime['hora_inicio'])) }}"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
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