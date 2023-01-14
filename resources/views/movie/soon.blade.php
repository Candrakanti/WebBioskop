@extends('layouts.main')

@section('container')

{{-- <h2>{{  \Carbon\Carbon::now()->timezone('asia/jakarta')->format('h:i:s') }}</h2> --}}

        <section id="kota">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-4 col-lg-8 col-sm-8 col-md-8">
                        <li class="nav-item dropdown" style="list-style-type: none !important;">
                            <H5  style="color: red"><b>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="padding: none !important;">
                                Movies in Bandung
                            </a>
                            <ul class="dropdown-menu">
                                {{-- @foreach ($data as $dt)
                                    @foreach ($dt->detail_kota as $dt)
                                        <p>{{ $dt['value'] }}</p>
                                    @endforeach
                                @endforeach --}}
                            </ul>
                            </b></H5>
                          
                        </li>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                <a class="text-decoration-none link-danger" href="/movie"><h1>PLAYING</h1></a>
              </div>
              <div class="col-lg-3 col-sm-3 col-md-3 col-3">
                <a class="text-decoration-none link-danger" href="/upcoming"><h1>UPCOMING</h1></a>
              </div>
            </div>
          </div>

          <h1>INI DI UPCOMING</h1>
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
      @if($film->tgl_tayang_awal >=  Carbon\Carbon::now()->format('Y-m-d'))
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