@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-10 col-md-10 col-xs-10 ">

      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
</div>


<section class="marketing">
  
  <div class="row align-items-center pt-5">
    <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
      <h3 class="m-0">Saksikan Film Kesayangan Anda <br>Di Seenema Terdekat!</h3>
      <div class="col-lg-7 col-xl-6 p-0">
        <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
        <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer</p>
      </div>    
    </div>
    <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
      <img src="{{asset('landingPage/images/corn.jpg')}}" alt="" class="img-fluid">
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
      <img src="{{asset('landingPage/images/mate.jpg')}}" alt="" class="img-fluid">
    </div>
    <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
      <h3 class="m-0"> Quality Time Bersama Teman Maupun Keluarga<br> Menjadi Berharga.</h3>
      <div class="col-lg-9 col-xl-8 p-0">
        <p class="py-4 m-0 text-muted">Power-packed with impressive features and well-optimized, this template is designed to provide the best performance in all circumstances.</p>
        <p class="pb-2 font-weight-medium text-muted">Its smart features make it a powerful stand-alone website building tool.</p>
      </div>
      <a href="/movie" class="btn btn-danger" > Pesan Ticket Sekarang !</a>
    </div>
  </div>
</section>    

<section id="kota">
  <div class="container mb-4">
      <div class="row">
          <div class="col-8">
              <li class="nav-item dropdown" style="list-style-type: none !important;">
                  <h1  style="color: red"><b>
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false" style="padding: none !important;">
                      Movies in 
                  </a>
                  {{-- <ul class="dropdown-menu">
                      @foreach ($data as $dt)
                              <p>{{ $dt->id_studio }}</p>
                      @endforeach
                  </ul> --}}
                  </b></h1>
                
              </li>
          </div>
      </div>
  </div>
</section>

<section id="upcoming">
  <div class="container">
    <div class="row">
      @foreach ($data as $film)
      <div class="col-6 col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="card" style="width: 17rem;">
          @if ($film->image)
          <div class="rounded">
          <a href="/movie/detail/{{ $film->id_film }}">
          <img src="{{ asset('storage/' . $film->image) }}" class="card-img-top rounded-3" alt="">
          </a>
        </div>
          @endif
          <br>
          {{-- <input type="hidden" value="{{ $film->judul_film }}" class="prod_id"> --}}
          <a href="/movie/detail/{{ $film->id_film }}">
              <h6 class="text-center" style="color: black">
                  <b>{{ $film->judul_film }}</b>
              </h6>
          </a>
          <div class="card-body text-center">
              <a href="/booking/show/{{ $film->id_film }}" class="btn btn-danger">BOOK NOW</a>
          </div>
        </div>
      </div>

      
      @endforeach
    </div>
  </div>
  </section>
@endsection
