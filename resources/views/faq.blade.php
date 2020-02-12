@extends('layouts.base')

@section('header-menu')
  <header>
    <nav class="laptop">
      <div class="header-left">
        <a class="logo" href="{{ route('homepage') }}"><img src="https://www.boolean.careers/images/common/logo.png" alt=""></a>
      </div>

      <div class="header-right">
        <button type="button"><i class="fas fa-bars"></i></button>
        <ul>
          <li class="{{ Route::currentRouteName() === 'homepage' ? 'active':'' }}"><a href="{{ route('homepage') }}">Home</a></li>
          <li><a href="#">Corso</a></li>
          <li><a href="#">Dopo il corso</a></li>
          <li><a href="#">Lezione gratuita</a></li>
          <li><a href="#">Candidati ora</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <nav class="mobile">
    <div class="close">
      <i class="fas fa-times"></i>
    </div>
    <div class="menu-mobile">
      <ul>
        <li class="{{ Route::currentRouteName() === 'homepage' ? 'active-mobile':'' }}"><a href="{{ route('homepage') }}">Home</a></li>
        <li><a href="#">Corso</a></li>
        <li><a href="#">Dopo il corso</a></li>
        <li><a href="#">Lezione gratuita</a></li>
        <li><a href="#">Candidati ora</a></li>
      </ul>
    </div>
  </nav>
@endsection

@section('section1-faq')
  <section class="section1-faq">
    <div class="container-fluid">
      <h1>Domande frequenti</h1>
      <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? <a href="#">Contattaci</a> e saremo felici di darti una mano.</p>
    </div>
  </section>
@endsection

@section('section2-faq')
  <section class="section2-faq">
    <div class="container-flex">
      <div class="container-left">
        <h2>Prima del corso</h2>
        @foreach ($listaFaqSx as $value)
          <div class="container-faq">
            <h3>{{ $value['q'] }} <i class="fas fa-plus"></i><i class="fas fa-minus"></i></h3>
            <p>{{ $value['a'] }}</p>
          </div>
        @endforeach
      </div>

      <div class="container-right">
        <h2>Dopo il corso</h2>
        @foreach ($listaFaqDx as $value)
          <div class="container-faq">
            <h3>{{ $value['q'] }} <i class="fas fa-plus"></i><i class="fas fa-minus"></i></h3>
            <p>{{ $value['a'] }}</p>
          </div>
        @endforeach
      </div>

    </div>
  </section>
@endsection
