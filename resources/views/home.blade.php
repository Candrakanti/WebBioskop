@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-10 col-md-10 col-xs-10  ">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/carousel1.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/carousel2.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/carousel3.jpg" class="d-block w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </div>
</div>



<div class="container">



  <div class="container" style="margin-bottom: 5%">

      <div class="row pt-5">
          <div class="col-8">

      <div class="row text-end">
          <div class="col-4 col-lg-2 col-md-2 col-sm-2">
              <a class="nav-link {{ ($title === "Home")? 'active' : '' }}"  href="/">PLAYING</a>
          </div>
          <div class="col-4  col-lg-2 col-md-2 col-sm-2">UPCOMING</div>
      </div>

          </div>

          <div class="col-4 col-lg-4 col-md-4 col-sm-4">
              <li class="nav-item dropdown"  style="  list-style-type: none !important;">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>

                  </ul>
                </li>
          </div>
      </div>

  </div>



@endsection
