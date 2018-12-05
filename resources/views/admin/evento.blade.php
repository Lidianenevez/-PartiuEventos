@extends('layouts.site')

@section('content')
<div class="container" style="margin-top:100px">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Meus eventos</div>
				<div class="card-body">
					@foreach($eventos as $e)
						<h3>{{ $e->nome_evento }}</h3>
						<p>{{ $e->descricao }}</p>
						<div class="row justify-content-center">
							<div class="col-md-3">{{ $e->fk_categoria_id }}</div>
							<div class="col-md-3">{{ $e->preco }}</div>
							<div class="col-md-3">{{ $e->cidade }}</div>
							<div class="col-md-3"><img width="100%" src="{{ asset('storage/posts/'.$e->fk_user_id.'/'.$e->imagem) }}" alt="Imagem do evento: {{ $e->nome_evento }}"></div>
						</div>
						<div class="row justify-content-center">
							<a href="{{ route('evento.edit', $e->id) }}" class="btn btn2">Editar</a>
							<form action="{{ route('evento.destroy', $e->id) }}" method="post">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn2">Excluir</button>
							</form>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection