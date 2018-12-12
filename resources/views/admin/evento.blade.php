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
<button onclick="sl();">GERAR Token</button>

    <form method="GET" action="{{ route('boleto_action') }}">
        <input type="text" id="pagseguro_token" name="pagseguro_token"/>
        <button type="submit">GERAR</button>
    </form>
        <div class="card-body">
          @foreach($eventos as $e)

    <!--==========================
      Detalhes do evento
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container" style="border:1px solid #bfbdbd">
        <div class="section-header">
          <h2>{{ $e->nome_evento }}</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4">
       
          
   <a class="btn btn5 btn-lg btn-block" data-toggle="collapse" href="#avaliacao" role="button" aria-expanded="false" aria-controls="collapseExample">
              Avaliação do Evento
             </a>
            <div class="collapse" id="avaliacao">
  <div class="card card-body" style="border: 1px solid #f82249">
    
    <h5>Dados da Avaliação</h5>    
    
    @foreach ($av as $a)
      @if ($a->fk_evento_id == $e->id)
        @php
          $soma = $a->estrela + $soma;
          $contador++;
          $media = $soma/$contador;
        @endphp
      @endif
    @endforeach
    <p>Média de avaliações: <span style="color: #ffc107; font-size: 20px; font-weight: bolder;">{{ $media }} </span></p>
   
    <p>Total de avaliações: <span style="color: #ffc107; font-size: 20px; font-weight: bolder;"> {{ $contador }}</span></p>
    
  </div>
</div>
  
</div>
  
             

  <div class="col-lg-4 col-md-4">
  <a href="{{ route('evento.edit', $e->id) }}" class="btn btn5 btn-lg btn-block">Editar</a>
</div>
  <div class="col-lg-4 col-md-4">
  <form action="{{ route('evento.destroy', $e->id) }}" method="post" class="formbutton">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn5 btn-lg btn-block">Excluir</button>
              </form>
</div>
</div>


        <div class="row">
          <div class="col-md-6">
             <img src="{{ asset('storage/posts/'.$e->fk_user_id.'/'.$e->imagem) }}" alt="banner evento" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h3>Descrição</h3>

              <p>{!! $e->descricao !!}</p>

              <div class="social">
                      <i class="fa fa-map-marker" aria-hidden="true"></i> <span>Local: {{ $e->city['nome'] }}-{{ $e->city['uf'] }}</span><br>
                      <i class="fa fa-calendar" aria-hidden="true"></i> <span>Data: {{ date('d/m/Y', strtotime($e->datetime['data_inicio'])) }}</span><br>
                      <i class="fa fa-clock-o" aria-hidden="true"></i> <span>Horário: {{ date('H:i:s', strtotime($e->datetime['hora_inicio'])) }}</span><br>
                      <i class="fa fa-money" aria-hidden="true"></i> <span>R${{ $e->preco }}</span>
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




       @endforeach
    </div>
  </div>

    </section>

  </main>
  <script>
    function sl () {
      $('#pagseguro_token').val(PagSeguroDirectPayment.getSenderHash())
    }
  </script>
  <script type="text/javascript" src="{{ PagSeguro::getUrl()['javascript'] }}"></script>
@endsection