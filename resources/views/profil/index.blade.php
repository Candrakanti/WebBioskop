@extends('layouts.main')

@section('container')

<h2 class="text-center">Waduh Kamu Belum Login !</h2>
<div class="container">
    <div class="row justify-content-center shadow p-3 mb-5 bg-body rounded text-center">

        <div class="col-lg-6 col-md-8 col-sm-8">

            <ul class="navbar-nav ms-auto">
    @auth
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    @else
    <li class="nav-item">
        <a href="/login" class="nav-link {{ ($title === "Login")? 'active' : '' }} "> <i class="fa-solid fa-right-to-bracket"></i> Login</a>
    </li>
</ul>
@endauth



        </div>

    </div>

</div>

@endsection
