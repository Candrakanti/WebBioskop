@extends('layouts.main')

@section('container')

<div class="container">

    <div class="row">

     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
     <a href="#" class="text-warning stretched-link text-decoration-none"> stretched link   </a>
     </div>

     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6"> 
     <a href="#" class="text-warning stretched-link text-decoration-none">stretched link</a>
     </div>

     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
        
     <ul class="navbar-nav ms-auto">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle text-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             BANDUNG
           </a>
           <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Action</a></li>
             <li><a class="dropdown-item" href="#">Another action</a></li>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
           </ul>
         </li>
       </ul>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BANDUNG
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>

  </div>
  </div>
</nav>

<div class="container ">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="card" >
           <img src="img/bk10.jpg" class="card-img-top" alt="" width="" height="" style="margin-left:5px; ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="card" >
           <img src="img/bk7.jpg" class="card-img-top" alt="" width="" height="" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="card" >
           <img src="img/bk8.jpg" class="card-img-top" alt="" width="" height="" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6">
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