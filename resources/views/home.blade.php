@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-10 col-md-10 col-xs-10  d-none d-md-block d-sm-block">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mb-3">

        <li class="nav-item ">
          <a class="nav-link" href="#">PLAYING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">UPCOMING</a>
        </li>

      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link " href="/login">BANDUNG</a>
      </li>
      </ul>
  </div>
  </div>
</nav>

  {{-- <div class="container"> 
    <div class="row">
      <div class="col lg-4 col-sm-4">PLAYING</div>
      <div class="col lg-4 col-sm-4 text-start">UPCOMING</div>
      <div class="col lg-4 col-sm-4 text-end">
        <li class="nav-item dropdown" style="  list-style-type: none !important;">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> BANDUNG
          </a>
          <ul class="dropdown-menu" style="  list-style-type: none !important;">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </div>
    </div>
  </div> --}}

  {{-- <ul class="navbar-nav text-end">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Dropdown link
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </li>
   </ul> --}}




@endsection