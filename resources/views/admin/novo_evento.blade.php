@extends('layouts.site')

@section('content')
<section id="speakers-details" style="margin-top:100px" class="wow fadeInUp" >
	<div class="row justify-content-center">
		<div class="section-header col-md-12">
			<h2>Insira as informações</h2>
		</div>
    @if (session('msg_danger'))
			<div class="alert alert-danger col-md-8">
				{{ session('msg_danger') }}
		  </div>
		@endif
    <form method="POST" class="col-md-8" action="{{ route('evento.store') }}" enctype="multipart/form-data">
			@csrf
      <div class="form-group">
        <label for="descricao">Descrição do Evento</label>
        <textarea name="descricao" placeholder="Digite a descrição do evento" id="descricao" cols="30" rows="10" class="form-control">{{ old('descricao') }}</textarea>
        @if ($errors->has('descricao'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('descricao') }}</strong>
          </span>
        @endif
      </div>
      <div class="form-row">
	      <div class="form-group col-md-7">
	        <label for="nome_evento">Nome do Evento</label>
          <input id="nome_evento" type="text" placeholder="Digite o nome do evento" class="form-control" name="nome_evento" value="{{ old('nome_evento') }}">
          @if ($errors->has('nome_evento'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('nome_evento') }}</strong>
            </span>
          @endif
	      </div>
        <div class="form-group col-md-5">
	        <label for="categoria">Categoria do Evento</label>
          <select class="form-control" id="categoria" name="categoria">
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
        <div class="form-group col-md-6">
          <label for="preco">Preço do Evento (Se o evento for gratís deixe em branco)</label>
          <input id="preco" type="number" step="0.01" placeholder="Digite o nome do evento" class="form-control" name="preco" value="{{ old('preco') }}">
          @if ($errors->has('preco'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('preco') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group col-md-6">
          <label for="carga_horaria">Carga horaria(opcional)</label>
          <input id="carga_horaria" type="number" class="form-control" name="carga_horaria" value="{{ old('carga_horaria') }}">
          @if ($errors->has('carga_horaria'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('carga_horaria') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="uf">Estado</label>
          <select class="form-control" default="AP" id="uf"></select>
        </div>
        <div class="form-group col-md-5">
          <label for="cidade">Cidade</label>
          <select id="cidade" name="cidade" class="form-control"></select>
          @if ($errors->has('cidade'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('cidade') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group col-md-4">
	        <label for="imagem">Arte do Evento</label>
          <input id="imagem" type="file" placeholder="Digite o nome do evento" class="form-control" name="imagem">
          @if ($errors->has('imagem'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('imagem') }}</strong>
            </span>
          @endif
	      </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="data">Data</label>
          <input id="data" type="date" class="form-control" name="data" value="{{ old('data') }}">
          @if ($errors->has('data'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('data') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group col-md-3">
          <label for="data_final">Data de término(opcional)</label>
          <input id="data_final" type="date" class="form-control" name="data_final" value="{{ old('data_final') }}">
          @if ($errors->has('data_final'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('data_final') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group col-md-3">
          <label for="hora">Hora</label>
          <input id="hora" type="time" class="form-control" name="hora" value="{{ old('hora') }}">
          @if ($errors->has('hora'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('hora') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group col-md-3">
          <label for="hora_final">Hora de término(opcional)</label>
          <input id="hora_final" type="time" class="form-control" name="hora_final" value="{{ old('hora_final') }}">
          @if ($errors->has('hora_final'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('hora_final') }}</strong>
          </span>
          @endif
        </div>
      <div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" require>
          <label class="form-check-label" for="gridCheck">
            Concordo com os termos...
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn2">Divulgar</button>
    </form>
	</div>
</section>
@endsection