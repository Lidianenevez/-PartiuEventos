@extends('layouts.site')

@section('content')
<main id="main" class="main-page">
<section id="speakers-details"  class="wow fadeInUp" >
	<div class="row justify-content-center">
		<div class="section-header col-md-12">
			<h2>Insira as informações</h2>
		</div>
    @if (session('msg_danger'))
			<div class="alert alert-danger col-md-8">
				{{ session('msg_danger') }}
		  </div>
		@endif

    <form method="POST" class="col-md-10" action="{{ route('evento.store') }}" enctype="multipart/form-data" style="padding: 20px">
      @csrf
      <div class="form-row">
	      <div class="form-group col-md-6">
	        <label for="nome_evento">Nome do Evento</label>
          <input id="nome_evento" type="text" placeholder="Digite o nome do evento" class="form-control" name="nome_evento" value="{{ old('nome_evento') }}">
          @if ($errors->has('nome_evento'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('nome_evento') }}</strong>
            </span>
          @endif
	      </div>
        <div class="form-group col-md-6">
	        <label for="categoria">Categoria do Evento</label>
          <select class="form-control" id="categoria" name="categoria">
            <option>escolher</option>
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
        <div class="form-group col-md-5">
          <label for="carga_horaria">Carga horaria</label>
          <input id="carga_horaria" type="number" class="form-control" name="carga_horaria" value="{{ old('carga_horaria') }}">
          @if ($errors->has('carga_horaria'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('carga_horaria') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group col-md-2">
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
      </div>

        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="exampleFormControlFile1">Arte do Evento</label>
          <input  type="file" class="form-control-file" id="imagem" name="imagem">
          @if ($errors->has('imagem'))
            <span class="text-danger" role="alert">
              <strong>{{ $errors->first('imagem') }}</strong>
            </span>
          @endif
        </div>
        
        <div class="form-group col-md-6">
          Tipo de evento: 
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
             Gratuito
           </label>
          </div>


        <div class="form-check"> 
          <label class="form-check-label" for="exampleRadios2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">Pago</label>
          </div>
          <div class="collapse" id="collapseExample">
           <div class="card card-body">
   
          <label for="preco">Preço do Evento</label>
           <input id="preco" type="number" step="0.01" placeholder="Valor" class="form-control" name="preco" value="{{ old('preco') }}">
          @if ($errors->has('preco'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('preco') }}</strong>
          </span>
          @endif
    
          </div>
        </div>
    </div>
  </div>
    <div class="form-row justify-content-center">
        <div class="form-group col-md-10">
        <label for="descricao">Descrição do Evento</label>
        <textarea name="descricao" placeholder="Digite a descrição do evento" id="descricao"  class="form-control" cols="30" rows="10"  >{{ old('descricao') }}</textarea>
        @if ($errors->has('descricao'))
          <span class="text-danger" role="alert">
            <strong>{{ $errors->first('descricao') }}</strong>
          </span>
        @endif
      </div>
    </div>




      <div class="form-row">
        <div class="form-group col-md-10">
        
      <button type="submit" class="btn btn5">Divulgar</button>
    
  </div>
</div>

        

         

</form>
 @csrf
</div>
</section>
</main>
@endsection