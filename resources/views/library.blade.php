@extends('layouts.app')
@section('title', 'Home')
@section('content')

  @include('partials.app.navbar')
  <section id="materiais" class="py-5">
    <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-8">
      <h5 class="text-primary">Materiais Didáticos</h5>
      <h2 class="my-3">Livros e Recursos Educacionais</h2>
      <p class="text-muted">Explore nossa biblioteca de apoio ao estudo com conteúdos cuidadosamente selecionados para
        facilitar sua jornada acadêmica.</p>
      </div>
    </div>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Livro 1">
        <div class="card-body">
        <span class="badge bg-primary mb-2">Livro</span>
        <h5 class="card-title">Matemática Essencial</h5>
        <p class="card-text">Conceitos fundamentais e exercícios resolvidos para o ensino médio e vestibulares.</p>
        <a href="#" class="btn btn-outline-primary">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Apostila 1">
        <div class="card-body">
        <span class="badge bg-success mb-2">Apostila</span>
        <h5 class="card-title">Biologia Enem</h5>
        <p class="card-text">Resumo completo dos temas de biologia mais cobrados no ENEM com mapas mentais.</p>
        <a href="#" class="btn btn-outline-success">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Material 1">
        <div class="card-body">
        <span class="badge bg-warning text-dark mb-2">Guia</span>
        <h5 class="card-title">Guia de Redação Nota 1000</h5>
        <p class="card-text">Estratégias e exemplos práticos para garantir uma excelente redação no ENEM.</p>
        <a href="#" class="btn btn-outline-warning">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Livro 1">
        <div class="card-body">
        <span class="badge bg-primary mb-2">Livro</span>
        <h5 class="card-title">Matemática Essencial</h5>
        <p class="card-text">Conceitos fundamentais e exercícios resolvidos para o ensino médio e vestibulares.</p>
        <a href="#" class="btn btn-outline-primary">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Apostila 1">
        <div class="card-body">
        <span class="badge bg-success mb-2">Apostila</span>
        <h5 class="card-title">Biologia Enem</h5>
        <p class="card-text">Resumo completo dos temas de biologia mais cobrados no ENEM com mapas mentais.</p>
        <a href="#" class="btn btn-outline-success">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Material 1">
        <div class="card-body">
        <span class="badge bg-warning text-dark mb-2">Guia</span>
        <h5 class="card-title">Guia de Redação Nota 1000</h5>
        <p class="card-text">Estratégias e exemplos práticos para garantir uma excelente redação no ENEM.</p>
        <a href="#" class="btn btn-outline-warning">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Livro 1">
        <div class="card-body">
        <span class="badge bg-primary mb-2">Livro</span>
        <h5 class="card-title">Matemática Essencial</h5>
        <p class="card-text">Conceitos fundamentais e exercícios resolvidos para o ensino médio e vestibulares.</p>
        <a href="#" class="btn btn-outline-primary">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Apostila 1">
        <div class="card-body">
        <span class="badge bg-success mb-2">Apostila</span>
        <h5 class="card-title">Biologia Enem</h5>
        <p class="card-text">Resumo completo dos temas de biologia mais cobrados no ENEM com mapas mentais.</p>
        <a href="#" class="btn btn-outline-success">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Material 1">
        <div class="card-body">
        <span class="badge bg-warning text-dark mb-2">Guia</span>
        <h5 class="card-title">Guia de Redação Nota 1000</h5>
        <p class="card-text">Estratégias e exemplos práticos para garantir uma excelente redação no ENEM.</p>
        <a href="#" class="btn btn-outline-warning">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Livro 1">
        <div class="card-body">
        <span class="badge bg-primary mb-2">Livro</span>
        <h5 class="card-title">Matemática Essencial</h5>
        <p class="card-text">Conceitos fundamentais e exercícios resolvidos para o ensino médio e vestibulares.</p>
        <a href="#" class="btn btn-outline-primary">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Apostila 1">
        <div class="card-body">
        <span class="badge bg-success mb-2">Apostila</span>
        <h5 class="card-title">Biologia Enem</h5>
        <p class="card-text">Resumo completo dos temas de biologia mais cobrados no ENEM com mapas mentais.</p>
        <a href="#" class="btn btn-outline-success">Baixar PDF</a>
        </div>
      </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="{{ asset('assets/images/book.png') }}" class="card-img-top" alt="Material 1">
        <div class="card-body">
        <span class="badge bg-warning text-dark mb-2">Guia</span>
        <h5 class="card-title">Guia de Redação Nota 1000</h5>
        <p class="card-text">Estratégias e exemplos práticos para garantir uma excelente redação no ENEM.</p>
        <a href="#" class="btn btn-outline-warning">Baixar PDF</a>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>

  @include('partials.app.footer')

@endsection