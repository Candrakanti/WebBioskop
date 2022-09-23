@extends('layouts.main')

@section('container')

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

<div class="container ">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/bk10.jpg" class="card-img-top" alt="" width="" height="" style="margin-left:5px; ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/bk7.jpg" class="card-img-top" alt="" width="" height="" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/bk8.jpg" class="card-img-top" alt="" width="" height="" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/bk9.jpg" class="card-img-top" alt="" width="" height="" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>




  </div>
</div>

@endsection