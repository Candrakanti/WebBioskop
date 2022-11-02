@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <hr class="border border-danger border-2 opacity-50 ">
        <div class="col-lg-10 col-md-10 col-xs-10  ">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
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
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
            </div>

        </div>
    </div>

    <section class="marketing">
        <div class="row align-items-center pt-5">
            <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                <h3 class="m-0">Saksikan Film Kesayangan Anda <br>Di Seenema Terdekat!</h3>
                <div class="col-lg-7 col-xl-6 p-0">
                    <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                        consectetuer turpis, suspendisse.</p>
                    <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                        consectetuer</p>
                </div>
            </div>
            <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                <img src="{{ asset('landingPage/images/corn.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                <img src="{{ asset('landingPage/images/mate.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                <h3 class="m-0"> Quality Time Bersama Teman Maupun Keluarga<br> Menjadi Berharga.</h3>
                <div class="col-lg-9 col-xl-8 p-0">
                    <p class="py-4 m-0 text-muted">Power-packed with impressive features and well-optimized, this template
                        is designed to provide the best performance in all circumstances.</p>
                    <p class="pb-2 font-weight-medium text-muted">Its smart features make it a powerful stand-alone website
                        building tool.</p>
                </div>
                <a href="/playing" class="btn btn-info"> Pesan Ticket Sekarang !</a>
            </div>
        </div>
    </section>

    <section id="playing">
        <div class="container" style="margin-bottom: 5%">

            <div class="row pt-5">
                <div class="col-8">

                    <div class="row text-end">
                        <div class="col-4 col-lg-2 col-md-2 col-sm-2">
                            <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">PLAYING</a>
                        </div>
                        <div class="col-4  col-lg-2 col-md-2 col-sm-2">
                            <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">UPCOMING</a>
                        </div>
                    </div>

                </div>

                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                    <li class="nav-item dropdown" style="  list-style-type: none !important;">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
    </section>




    <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright ©2021 <a href="https://www.instagram.com/penuh.rekayasa/?next=%2F"
                class="px-1" target="_blank"> SEENEMA </a> All rights reserved.</p>

        <p class="text-center text-muted pt-2">Dibuat Oleh: <a class="px-1" target="_blank"> 12 RPL 1 WEB BIOSKOP </a></p>
    </footer>
@endsection
