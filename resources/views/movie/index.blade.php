@extends('layouts.main')

@section('container')

{{-- <h2>{{  \Carbon\Carbon::now()->timezone('asia/jakarta')->format('h:i:s') }}</h2> --}}

<section id="kota">
    <div class="container mb-4">

        <div class="row">

            <div class="col-6 col-xs-6 col-md-6 col-sm-6 col-lg-6">

                <a class="text-danger" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" >
                <h1>   Movies in Bandung</h1>
             
                </a>
 
            </div>

            <div class="col-6 col-xs-6 col-md-6 col-sm-6 col-lg-6">
                <div class="row d-flex justify-content-end">
                    <div class="col-md-6 col-6 col-sm-6 col-lg-6">
                        <form action="/movie" method="GET">
                            <input type="search" id="inputPassword2" name="search"  class="form-control"  placeholder="Masukan judul film"> 
                        </form>
                    </div>
                    <div class="col-md-1 col-1 col-sm-1 col-lg-1">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

</section>

        {{-- <div class="container">
            <ul>
            <div class="row">
              <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                <a class="nav-link {{ request()->is('*movie') ? ' active' : '' }}" href="/movie"><h1>PLAYING</h1></a>
              </div>
              <div class="col-lg-3 col-sm-3 col-md-3 col-3">
                <a class="nav-link {{ request()->is('*upcoming') ? ' active' : '' }}" href="/upcoming"><h1>UPCOMING</h1></a>
              </div>
            </div>
           </ul>
        </div> --}}

        <div class="navbar navbar-expand-lg pl-3 pl-sm-0 bg-white " style="position: sticky; box-shadow: none;" class="pb-5" >
            <div class="container">           
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('*movie') ? ' active' : '' }}" href="/movie"><h5><b>PLAYING</b></h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('*upcoming') ? ' active' : '' }}" href="/upcoming"><h5><b>UPCOMING</b></h5></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="container">
            <div class="row">
                <div class="col-4 text-danger"> <b>PLAYING</b></div>
                <div class="col-4"><b>UPCOMING</b></div>   
            </div>
        </div> --}}

        @if($exp == $exp)
      
<section id="movie">
    @if (session()->has('success'))
    <div class="alert alert-success " role="alert">
        {{ session('success') }}
    </div>
@endif
<div class="container">
    <div class="row">
      @foreach ($data as $film)
      @if($film->tgl_tayang_awal  <=  Carbon\Carbon::now()->format('Y-m-d'))
      <div class="col-6 col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <div class="card">
            @if ($film->image)
            <div class="rounded">
            <a href="/movie/detail/{{ $film->id_jadwal}}">
            <img src="{{ asset('storage/' . $film->image) }}" class="card-img-top rounded-3" alt="">
            </a>
          </div>
            @endif
            <br>
            {{-- <input type="hidden" value="{{ $film->judul_jadwal}}" class="prod_id"> --}}
            <a href="/movie/detail/{{ $film->id_jadwal}}">
                <h6 class="text-center" style="color: black">
                   <b> {{ $film->judul_film}}</b>
                </h6>
            </a>
            <div class="card-body text-center"> 
                <a href="/movie/detail/{{ $film->id_jadwal }}" class="btn btn-danger">BOOK NOW</a>
             
                {{-- <a href="/booking/show/{{ $film->id_jadwal}}" class="btn btn-danger">BOOK NOW</a> --}}
            </div>
          </div>
         
      </div>
      @endif
      @endforeach
    </div>
  </div>
</section>

@endif


        <script>
            $('document').ready(function() {
                $('.addToCartBtn').click(function(e) {
                    e.preventDefault();
                    var product_id = $(this).closest('.product_data').find('.prod_id').val();
                    $.ajax({
                        method: "POST",
                        url: "/AddToCart",
                        data: {
                            'product_id': product_id
                        },
                        success: function(response) {

                        }
                    })
                });
            });
        </script>
@endsection