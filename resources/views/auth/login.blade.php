@extends('layouts.auth')

@section('title', 'Login')

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
      <form action="{{ route('auth.login') }}" method="post" class="card-body">
        @csrf
        <div class="d-flex justify-content-between align-items-end mb-4">
        <h3 class="mb-0"><b>Login</b></h3>
        <a href="{{ route('auth.choose-role') }}" class="link-primary">Criar Conta?</a>
        </div>

        @if ($errorMessage = session('error'))
      <div class="alert alert-danger" role="alert"> {{ $errorMessage }}</div>
      @endif

        <div class="form-group mb-3">
        <label class="form-label">Email </label>
        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="d-flex mt-1 justify-content-end">

        <a href="{{ route('auth.forgot') }}" class="text-secondary f-w-400">Esqueceu a senha?</a>
        </div>
        <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary">Login</button>
        </div>


      </form>
      </div>
      <div class="auth-footer row">
      <!-- <div class=""> -->
      <div class="col my-1">
        <p class="m-0">Copyright © <a href="#">BUKABEM</a></p>
      </div>
      <div class="col-auto my-1">
        <ul class="list-inline footer-link mb-0">
        <li class="list-inline-item"><a href="/">Home</a></li>
        </ul>
      </div>
      <!-- </div> -->
      </div>
    </div>
    </div>
  </div>
@endsection