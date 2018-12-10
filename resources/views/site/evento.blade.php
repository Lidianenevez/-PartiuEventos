@extends('layouts.site')

@section('content')
  <section id="speakers" class="wow fadeInUp">
    <div class="row">
      @foreach($evento as $e)
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="{{ asset('storage/posts/'.$e->fk_user_id.'/'.$e->imagem) }}" alt="" class="img-fluid">
            <div class="details">
              <center>
                <h3><a class="nomeevento" href="{{ route('evento.mostrar', [$e->id,kebab_case($e->nome_evento)]) }}">{{ $e->nome_evento }}</a></h3>
                <div class="social">
                  <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-calendar" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i></a>
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