@extends('layouts.main')

@section('container')
    <div class="container">



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
                @endforeach
            </div>
        </div>
    @endsection
