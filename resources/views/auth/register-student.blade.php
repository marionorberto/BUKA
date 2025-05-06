@extends('layouts.auth')
@section('title', 'registar estudante')
@section('content')

  <div class="auth-main">
    <div class="auth-wrapper v3">
    <div class="auth-form">
      <div class="auth-header">
      <a class="navbar-brand fs-3" href="#">
        <i class="fa fa-graduation-cap text-black"></i>

        BUKABEM
      </a>
      </div>
      <div class="card my-5">
      <form action="{{ route('users.store') }}" method="post" class="card-body">
        @csrf
        @if ($errors->any())
        <ul class="alert alert-danger ">
        @foreach ($errors->all() as $error)
      <li class="ps-1">{{ $error }}</li>
      @endforeach
        </ul>
      @endif
        <div class="d-flex justify-content-between align-items-end mb-4">
        <h3 class="mb-0"><b>Cadastar-se como estudante</b></h3>
        <a href="{{ route('auth.login.show') }}" class="link-primary">Já tem conta?</a>
        </div>

        <div class="row">
        <div class="col-md-6">
          <div class="form-group mb-3">
          <label class="form-label">Primeiro Nome*</label>
          <input type="text" name="firstname" class="form-control" placeholder=" Primeiro Nome" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group mb-3">
          <label class="form-label">Último Nome</label>
          <input type="text" name="lastname" class="form-control" placeholder="Último Nome" required>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
          <div class="form-group mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group mb-3">
          <label class="form-label">Email*</label>
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
        </div>
        </div>
        <input type="hidden" name="role" value="student">

        <div class="form-group mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="form-group mb-3">
        <label class="form-label">Confirmar Password</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Password"
          required>
        </div>
        <div class="d-grid mt-3">
        <button type="submit" class="btn btn-primary">Criar Conta</button>
        </div>



      </form>
      </div>
      <div class="auth-footer row">
      <div class="col my-1">
        <p class="m-0">Copyright © <a href="#">BUKABEM</a></p>
      </div>
      <div class="col-auto my-1">
        <ul class="list-inline footer-link mb-0">
        <li class="list-inline-item"><a href="/">Home</a></li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </div>


@endsection