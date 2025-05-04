@extends('layouts.app')

@section('title', 'Choose Role')

@section('content')

  @include('partials.app.navbar')
  <section id="role-selection" class="pt-10">
    <div class="container title pt-10 pb-5">
    <div class="row justify-content-center text-center wow fadeInUp" data-wow-delay="0.2s">
      <div class="col-md-10 col-xl-6">
      <h5 class="text-primary mb-0">Comece Agora</h5>
      <h2 class="my-3">Escolha seu papel na plataforma</h2>
      <p class="mb-5">Participe da nossa comunidade educacional como mentor ou estudante e aproveite todos os recursos
        e apoios disponíveis.</p>
      </div>
    </div>
    </div>

    <div class="container">
    <div class="row align-items-center justify-content-center">
      <!-- Card Estudante -->
      <div class="col-sm-6 col-lg-5">
      <div class="card wow fadeInUp" data-wow-delay="0.4s">
        <div class="card-body">
        <h3 class="mb-3">Quero ser Estudante</h3>
        <ul class="mb-4 text-muted">
          <li>Acesso a mentores experientes</li>
          <li>Materiais acadêmicos exclusivos</li>
          <li>Suporte e orientação personalizada</li>
        </ul>
        <a href="{{ route('auth.register-student') }}" class="btn btn-outline-primary">Entrar como Estudante</a>
        </div>
      </div>
      </div>

      <!-- Card Mentor -->
      <div class="col-sm-6 col-lg-5">
      <div class="card wow fadeInUp" data-wow-delay="0.6s">
        <div class="card-body bg-light-primary">
        <h3 class="mb-3">Quero ser Mentor</h3>
        <ul class="mb-4 text-muted">
          <li>Compartilhe seu conhecimento</li>
          <li>Contribua com a formação de estudantes</li>
          <li>Faça parte de uma comunidade ativa</li>
        </ul>
        <a href="{{ route('auth.register-mentor') }}" class="btn btn-primary">Entrar como Mentor</a>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>


  @include('partials.app.footer')

@endsection