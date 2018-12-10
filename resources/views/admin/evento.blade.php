@extends('layouts.site')

@section('content')

 <main id="main" class="main-page">

    <!--==========================
      Detalhes do evento
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        @if (session('msg_success'))
    <div class="alert alert-success">
      {{ session('msg_success') }}
    </div>
  @endif
  @if (session('msg_danger'))
    <div class="alert alert-danger">
      {{ session('msg_danger') }}
    </div>
  @endif
      </div>


    <div class="row justify-content-center" >
      <div class="section-header col-md-10">
      <h2>Painel de Eventos</h2>
    </div>
</div>
        <div class="card-body">
          @foreach($eventos as $e)

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
            <div class="row justify-content-center" >
            	<div class="col-md-10">

            		<div class="btn-group" role="group" aria-label="Basic example">
  <button class="btn btn5" type="button" data-toggle="collapse" data-target="#avaliacao" aria-expanded="false" aria-controls="collapseExample">
  	Avaliação do Evento
  </button>
  <button class="btn btn5" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  	Vizitantes
  </button>
  <form action="{{ route('evento.destroy', $e->id) }}" method="post" class="formbutton">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-lg btn5">Excluir</button>
              </form>	
   <a href="{{ route('evento.edit', $e->id) }}" class="btn btn-lg btn5">Editar</a>
              
</div>

<div class="collapse" id="avaliacao">
  <div class="card card-body">
    Dados da Avaliação
  </div>
</div>
  
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Dados de Vizitantes
  </div>
</div>
         
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

    </section>

  </main>
@endsection
