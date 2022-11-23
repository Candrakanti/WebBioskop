@extends('layouts.main')

@section('container')

@foreach($play as $p) 

@if($p <= \Carbon\Carbon::now())

<section id="upcoming">
    <div class="container">
      <div class="row">
        @foreach ($data as $film)
        <div class="col-6 col-lg-3 col-md-3 col-sm-6 col-xs-6">
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
                    <b>{{ $film->judul_film }}</b>
                </h6>
            </a>
            <div class="card-body text-center">
                <a href="/booking/show/{{ $film->id_film }}" class="btn btn-danger">BOOK NOW</a>
            </div>
          </div>
        </div>
  
        
        @endforeach
      </div>
    </div>
    </section>
    @endif

@endforeach

@endsection