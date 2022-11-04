@extends('layouts.main')

@section('container')
   
        <section id="kota">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-8">
                        <li class="nav-item dropdown" style="list-style-type: none !important;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: none !important;">
                            Movies In
                           </a>
                            <ul class="dropdown-menu">
                                @foreach ($data as $dt)
                                    @foreach ($dt->detail_kota as $dt)
                                        <p>{{ $dt['value'] }}</p>
                                    @endforeach
                                @endforeach
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </section>

        <section id="movie">
            @if (session()->has('success'))
            <div class="alert alert-success " role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
              @foreach ($data as $film)
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
                       <b> {{ $film->judul_film }}</b>
                    </h6>
                </a>
                <div class="card-body text-center">
                    <a href="/booking/show/{{ $film->id_film }}" class="btn btn-danger">BOOK NOW</a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>

        {{-- <div class="container">
            <div class="row ">

                @foreach ($data as $film)
                    <div class="card product_data" style="width: 15rem;">
                        @if ($film->image)
                            <div class="shadow mb-5">
                                <a href="/movie/detail/{{ $film->id_film }}">
                                    <img src="{{ asset('storage/' . $film->image) }}" class="card-img-top" alt="">
                                </a>
                            </div>
                        @endif
                        <input type="hidden" value="{{ $film->judul_film }}" class="prod_id">
                        <a href="/movie/detail/{{ $film->id_film }}">
                            <h6 class="text-center ">
                                {{ $film->judul_film }}
                            </h6>
                        </a>
                        <div class="card-body">
                            <a href="/booking/show/{{ $film->id_film }}" class="btn btn-primary">BOOK NOW</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}

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
