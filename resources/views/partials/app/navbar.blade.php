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
        @if (Auth::user())
      <li class="dropdown pc-h-item header-user-profile">
        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
        <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar rounded-circle"
          style="width: 30px; height: 30px;">
        <span>{{ Auth::user()->username }}</span>
        </a>
        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
          <div class="flex-shrink-0">
            <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar wid-35">
          </div>
          <div class="flex-grow-1 ms-3">
            <h6 class="mb-1">{{ Auth::user()->username }}</h6>
            <span>{{ Auth::user()->role }}</span>
          </div>
          <a href="{{ route('auth.logout') }}" class="pc-head-link bg-transparent"><i
            class="ti ti-power text-danger"></i></a>
          </div>
        </div>
        <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
          <li class="nav-item" role="presentation">
          <button class="nav-link " id="drp-t1" data-bs-toggle="tab" data-bs-target="#drp-tab-1" type="button"
            role="tab" aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i>
            Perfil</button>
          </li>
          <li class="nav-item" role="presentation">

        </ul>
        <div class="tab-content" id="mysrpTabContent">
          <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1"
          tabindex="0">
          <a href="{{ route('student.dashboard.index') }}" class="dropdown-item">
            <i class="ti ti-edit-circle"></i>
            <span>Dashboard</span>
          </a>

          <a href="{{ route('auth.logout') }}" class="dropdown-item">
            <i class="ti ti-power"></i>
            <span>Sair</span>
          </a>
          </div>

        </div>
        </div>
      </li>
    @else
      <li class="nav-item me-2">
        <a class="btn btn-primary" href="{{ route('auth.register-student') }}">Registar</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-primary" href="{{ route('auth.login.show') }}">Login</a>
      </li>
    @endif

      </ul>
    </div>
  </div>
</nav>