@extends('layouts.main')

@section('container')

{{-- 
<div class="container">
    <div class="row ">

        <div class="col-lg-6 col-md-8 col-sm-8">

            <ul class="navbar-nav ms-auto"> --}}
    @auth
<div class="container d-flex justify-content-center">
  <div class="row text-start">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <img src="img/profil.png" width="50%" alt="...">
    </div>
  
    <div class="col-lg-6 col-md-6 col-sm-6">
  
      <li class="nav-item dropdown" style="  list-style-type: none !important;">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
            </form>
          </li>
        </ul>
      </li>
  
    </div>
  </div>
</div>

    @else
    <h2 class="text-center">Waduh Kamu Belum Login !</h2>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded text-center">
      <li class="nav-item"  style="  list-style-type: none !important;">
        <a class="stretched-link text-danger text-decoration-none" href="/login" class="nav-link {{ ($title === "Login")? 'active' : '' }} "> <i class="fa-solid fa-right-to-bracket"></i> Login</a>
    </li>
    </div>
  
</ul>
@endauth

        </div>
    </div>

</div>

@endsection
