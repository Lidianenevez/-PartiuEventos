@extends('layouts.site')

@section('content')
<main id="main" class="main-page">
  <section id="speakers-details" class="wow fadeIn">
    <div class="container">
      <div class="section-header">
        <h2>{{ $e->nome_evento }}</h2>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('storage/posts/'.$e->fk_user_id.'/'.$e->imagem) }}" alt="" class="img-fluid">
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2>Autor {{ $e->fk_user_id }}</h2>
            <p>Data</p>
            <p>{{ $e->cidade }}</p>
            <p>R$ {{ $e->preco }}</p>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
            <p>{{ $e->descricao }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
