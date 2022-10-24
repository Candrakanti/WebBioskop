@extends('layouts.main')

@section('container')
    <div class="container">
        <section id="playing">
            <div class="container" style="margin-bottom: 5%">

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
                                    {{-- <a href="{{ route('movie.detkota', $dt->id_kota) }}" class="btn btn-dark"
                                        style="color: white">{{ $dt->kota }}</a> --}}
                                @endforeach

                            </ul>


                    </div>

                    <div class="col-3 col-lg-4 col-md-4 col-sm-4">
                        <li class="nav-item dropdown" style="  list-style-type: none !important;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pilih Kota
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
                            <h6 class="text-center">

                                {{ $film->judul_film }}
                            </h6>
                        </a>

                        <div class="card-body">
                            <a href="#" class="btn btn-primary">BOOK NOW</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection