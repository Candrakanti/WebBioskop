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

        <div class="col-4  col-lg-2 col-md-2 col-sm-2">
          <a class="nav-link {{ ($title === "Home")? 'active' : '' }}"  href="/">UPCOMING</a>
        </div>
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

  <div class="container">
    <div class="row">
      @foreach ($data as $data)

      <div class="card" style="width: 18rem;">
        @if ($data->image)
        <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $data->judul_film }}</h5>
        </div>
        <div class="card-body">
          <a href="#" class="btn btn-primary">BOOK NOW</a>
        </div>
      </div>


{{-- 
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                @if ($fl->image)
                  <img src="{{ asset('storage/' . $fl->image) }}"
                  class="img-fluid">  
              @endif
              
                <div class="card-body">
                  <h5 class="card-title">{{ $fl->judul_fl }}</h5>
                  <a href="" class="btn btn-success">Read more</a>
                </div>
              </div>
        </div>
    </div> --}}
    @endforeach
</div>
  </div>

{{-- <div class="container ">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/ivanna.jpg" class="card-img-top" alt="img" width="100" height="350" style="margin-left:5px; ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/ps2.jpeg" class="card-img-top" alt="img" width="100" height="350" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/the doll3.jpg" class="card-img-top" alt="img" width="100" height="350" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/pamali.jpg" class="card-img-top" alt="img" width="100" height="350" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/danur3.jpg" class="card-img-top" alt="img" width="100" height="350" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/jail.jpg" class="card-img-top" alt="img" width="100" height="350" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/medium.jpg" class="card-img-top" alt="img" width="100" height="350" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="img/kafir.jpeg" class="card-img-top" alt="img" width="100" height="350" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>




  </div>
</div> --}}

@endsection