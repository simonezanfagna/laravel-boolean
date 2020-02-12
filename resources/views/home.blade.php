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

@section('section1-home')
  <section class="section1-home">
    <div class="container">
      <div class="container-flex">
        <div class="container-left">
          <h1>DIVENTA <br>
            <span>SVILUPPATORE WEB</span>
          </h1>
          <img src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="">
          <p><span>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</span></p>
          <ul>
            <li><span>6 mesi</span> di corso intensivo online in diretta</li>
            <li><span>Nessuna competenza</span> di programmazione richiesta</li>
            <li>Siamo certi del tuo successo, altrimenti <span>ti rimborsiamo</span></li>
          </ul>
        </div>

        <div class="container-right">
          <img src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection

@section('section2-home')
  <section class="section2-home">
    <div class="container">
        <div class="container-flex">
          <div class="container-data">
            <h3>98%</h3>
            <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
          </div>
          <div class="container-data">
            <h3>€ 23.000</h3>
            <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
          </div>
          <div class="container-data">
            <h3>#1</h3>
            <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
          </div>
        </div>
    </div>
  </section>
@endsection

@section('section3-home')
  <section class="section3-home">
    <div class="container">
      <h4>I nostri studenti sono stati assunti da:</h4>
      <div class="companies companies-top container-flex">
        <div class="companies-image">
          <img src="https://www.boolean.careers/images/companies/facileit.png" alt="">
        </div>
        <div class="companies-image">
          <img src="https://www.boolean.careers/images/companies/oneday.png" alt="">
        </div>
        <div class="companies-image">
          <img src="https://www.boolean.careers/images/companies/prima.png" alt="">
        </div>
      </div>
      <div class="companies companies-bottom container-flex">
        <div class="companies-image">
          <img src="https://www.boolean.careers/images/companies/fabbrica-digitale-big.png" alt="">
        </div>
        <div class="companies-image">
          <img src="https://www.boolean.careers/images/companies/nephila.png" alt="">
        </div>
        <div class="companies-image">
          <img src="https://www.boolean.careers/images/companies/rds.png" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection
