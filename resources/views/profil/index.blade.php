@extends('layouts.main')

@section('container')

{{--
<div class="container">
    <div class="row ">

        <div class="col-lg-6 col-md-8 col-sm-8">

            <ul class="navbar-nav ms-auto"> --}}
    @auth
{{-- <div class="container "> --}}


  <div class="row g-0">

    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center" >
      <img src="img/profil.png" width="20%" alt="...">
    </div>


    <div class="col-lg-6 col-md-6 col-sm-6 col-6 me-auto" >
      <li class="nav-item dropdown" style="  list-style-type: none !important;">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="fa-regular fa-circle-xmark"></i> Logout</button>
            </form>
               </li>
        </ul>
      </li>
    </div>

  </div>
</div>

@if(auth()->user ()->is_admin =="user")

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
        <img src="img/dot.png" width="2%" alt="...">
        Pesanan Saya
    </div>
</div>


<div class="row text-center g-0 mt-3">
    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img src="img/wallet.png" width="5%" alt="...">

       <div class="row g-0">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
        <a href="/unpaid" class="text-decoration-none link-dark">Belum Bayar</a>
        </div>
       </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
        <img src="img/cekl.png" width="5%" alt="...">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mx-auto">
            <a href="/paydone" class="text-decoration-none link-dark">Selesai</a>
            </div>
           </div>
    </div>
</div>
@endif

@if(auth()->user ()->is_admin =="admin_film")
<div class="container pt-2">
  <div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-6 text-center ">
      <form action="/film" method="get">
        @csrf
        <button class="badge rounded-pill text-bg-info btn-lg" type="submit" class="dropdown-item" style="border: 0"><i class="bi bi-box-arrow-in-right"></i> Masuk Admin Film</button>
      </form>
    </div>
  </div>
  
</div>



@endif

    @else

    <h2 class="text-center"> Kamu Belum Login !</h2>
    <div class="container shadow-lg p-3 mb-5 bg-body rounded text-center">
      <li class="nav-item"  style="  list-style-type: none !important;">
        <a class="stretched-link text-danger text-decoration-none" href="/login" class="nav-link {{ ($title === "Login")? 'active' : '' }} "> <i class="fa-solid fa-right-to-bracket"></i> Login</a>
    </li>
    </div>

</ul>
@endauth

        </div>
    </div>

{{-- </div> --}}

@endsection
