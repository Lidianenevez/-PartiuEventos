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
      <div class="form-group">
        <label for="preco">Preço do Evento</label>
        <input id="preco" type="number" step="0.01" placeholder="Digite o nome do evento" class="form-control" name="preco" value="{{ old('preco') }}">
        @if ($errors->has('preco'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('preco') }}</strong>
          </span>
        @endif
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
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" require>
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