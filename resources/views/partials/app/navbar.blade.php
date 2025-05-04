<nav class="navbar navbar-expand-md navbar-dark top-nav-collapse default">
  <div class="container">
    <a class="navbar-brand" href="#">
      <i class="fa fa-graduation-cap text-white"></i>

      BUKABEM
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item pe-1">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item pe-1">
          <a class="nav-link" href="{{ route('home') }}">Solicitar Mentoria</a>
        </li>
        <li class="nav-item pe-1">
          <a class="nav-link" href="{{ route('auth.register-mentor') }}">Ser Mentor</a>
        </li>
        <li class="nav-item pe-1">
          <a class="nav-link" href="{{ route('library') }}">Biblioteca Grátis</a>
        </li>
        <li class="nav-item pe-1">
          <a class="nav-link" href="#services">Serviços</a>
        </li>
        <li class="nav-item pe-1">
          <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
        </li>
        <li class="nav-item pe-1">
          <a class="nav-link me-2" href="#contacts">Contactos</a>
        </li>
        <li class="nav-item me-2">
          <a class="btn btn-primary" href="{{ route('auth.register-student') }}">Registar</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-primary" href="{{ route('auth.login.show') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>