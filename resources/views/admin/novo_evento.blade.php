@extends('layouts.site')

@section('content')
<section id="speakers-details" style="margin-top:100px" class="wow fadeInUp" >
	<div class="row justify-content-center">
		<div class="section-header">
			<h2>Insira as informações </h2>
		</div>
    <form method="POST" class="col-md-8" action="{{ route('evento.store') }}">
			@csrf
      <div class="form-row">
	      <div class="form-group col-md-6">
	        <label for="nome_evento">Nome do Evento</label>
          <input id="nome_evento" type="nome_evento" placeholder="Digite o nome do evento" class="form-control{{ $errors->has('nome_evento') ? ' is-invalid' : '' }}" name="nome_evento" value="{{ old('nome_evento') }}">
          @if ($errors->has('nome_evento'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('nome_evento') }}</strong>
            </span>
          @endif
	      </div>
	      <div class="form-group col-md-6">
	        <label for="nome_evento">Nome do Evento</label>
          <input id="nome_evento" type="nome_evento" placeholder="Digite o nome do evento" class="form-control{{ $errors->has('nome_evento') ? ' is-invalid' : '' }}" name="nome_evento" value="{{ old('nome_evento') }}">
          @if ($errors->has('nome_evento'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('nome_evento') }}</strong>
            </span>
          @endif
	      </div>
      </div>
      <div class="form-group mb-3">
        <div class="input-group input-group-alternative">
          <input id="nome_evento" type="nome_evento" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('nome_evento') ? ' is-invalid' : '' }}" name="nome_evento" value="{{ old('nome_evento') }}">
          @if ($errors->has('nome_evento'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('nome_evento') }}</strong>
            </span>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label for="nome_evento">Nome do Evento</label>
        <input id="nome_evento" type="nome_evento" placeholder="Digite o nome do evento" class="form-control{{ $errors->has('nome_evento') ? ' is-invalid' : '' }}" name="nome_evento" value="{{ old('nome_evento') }}">
        @if ($errors->has('nome_evento'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('nome_evento') }}</strong>
          </span>
        @endif
      </div>
      <div class="form-group">
        <label for="nome_evento">Nome do Evento</label>
        <input id="nome_evento" type="nome_evento" placeholder="Digite o nome do evento" class="form-control{{ $errors->has('nome_evento') ? ' is-invalid' : '' }}" name="nome_evento" value="{{ old('nome_evento') }}">
        @if ($errors->has('nome_evento'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('nome_evento') }}</strong>
          </span>
        @endif
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="uf">Estado</label>
          <select class="form-control" default="AP" id="uf"></select>
        </div>
        <div class="form-group col-md-7">
          <label for="cidade">Cidade</label>
          <select id="cidade" class="form-control"></select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputCEP">CEP</label>
          <input type="text" class="form-control" id="inputCEP">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
          Clique em mim
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn2">Divulgar</button>
    </form>
	</div>
</section>
@endsection
