@extends('layouts.main')

@section('container')
    <div class="container">
        <section id="playing">
            <div class="container" style="margin-bottom: 5%">


<div class="container-fluid text-center" style="margin-top: 70px;">
 {{-- <img src="{{asset('img/movie.png')}} "class="d-block" width="1250" height="500">
 <h5 class="">ppppp</h5> --}}
 <div class="container text-center" style="background-image: url({{asset('img/movie.png')}}); height: 200%;" width="1250%" height="500%">
  <h2 style="color: #fff;">Alamat</h2>

  
</div>
</div>



<div class="container">

    <div class="row pt-5">
        <div class="col-8">
  
    <div class="row text-end">
        <div class="col-4 col-lg-2 col-md-2 col-sm-2">
            <a class="nav-link {{ ($title === "Home")? 'active' : '' }}"  href="/"><b>PLAYING</b></a>
        </div>
        <div class="col-4  col-lg-2 col-md-2 col-sm-2">
          <a class="nav-link {{ ($title === "Home")? 'active' : '' }}"  href="/"><b>UPCOMING</b></a>
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

  <div class="container">
    <div class="row">
      @foreach ($data as $film)
      <div class="card" style="width: 15rem;">
        @if ($film->image)
        <div class="shadow mb-5">
        <a href="/movie/detail/{{ $film->id_film }}">
        <img src="{{ asset('storage/' . $film->image) }}" class="card-img-top" alt="">
        </a>
      </div>
        @endif
        <div class="card-body" style="padding: 43px;">
          <a href="#" class="btn btn-primary">BOOK NOW</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

{{-- <div class="container ">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="/assets/img/setan.jpg" class="card-img-top" alt="" width="" height="" style="margin-left:5px; ">
        <div class="card-body">
        <a href="/detail" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="/assets/img/bk8.jpg" class="card-img-top" alt="" width="" height="" style="margin-left: ">
        <div class="card-body">
        <a href="/detail" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="/assets/img/bk8.jpg" class="card-img-top" alt="" width="" height="" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
    <div class="card" >
           <img src="/assets/img/bk8.jpg" class="card-img-top" alt="" width="" height="" style="margin-left: ">
        <div class="card-body">
        <a href="#" class="btn btn-outline-dark">BOOK NOW</a>
       </div>
     </div>
    </div>




  </div>
</div> --}}

@endsection
                <div class="row pt-5">
                    <div class="col-8">

                        <div class="row text-end">
                            <div class="col-3 col-lg-2 col-md-2 col-sm-2 ">
                                <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">PLAYING</a>
                            </div>
                            <div class="col-3  col-lg-2 col-md-2 col-sm-2">
                                <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">UPCOMING</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-3 col-lg-4 col-md-4 col-sm-4">
                        <li class="nav-item dropdown" style="  list-style-type: none !important;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pilih Kota
                            </a>

                            <ul class="dropdown-menu">
                                @foreach ($data as $dt)
                                    <p>{{ $dt->kota }}</p>
                                @endforeach

                            </ul>
                        </li>

                    </div>

                    <div class="col-3 col-lg-4 col-md-4 col-sm-4">
                        <li class="nav-item dropdown" style="  list-style-type: none !important;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pilih Kota
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($data as $dt)
                                    {{-- <p>{{ $dt->detail_kota }}</p> --}}
                                    @foreach ($dt->detail_kota as $dt)
                                        <p>{{ $dt['value'] }}</p>
                                    @endforeach
                                @endforeach
                            </ul>
                        </li>

                    </div>


                </div>
        </section>

        <div class="container">
            <div class="row">
                @foreach ($data as $film)
                    <div class="card" style="width: 15rem;">
                        @if ($film->image)
                            <div class="shadow mb-5">
                                <a href="/movie/detail/{{ $film->id_film }}">
                                    <img src="{{ asset('storage/' . $film->image) }}" class="card-img-top" alt="">
                                </a>
                            </div>
                        @endif
                        <a href="/movie/detail/{{ $film->id_film }}">
                            <h6 class="text-center">{{ $film->judul_film }}</h6>
                        </a>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">BOOK NOW</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
