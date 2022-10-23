@extends('film.layout.sidebar')


@section('container')

<h5>Id Film |{{ $film->id_film }}</h5>
<a href="/crudFilm" class="btn btn-danger"><span data-feather="arrow-left"></span>Back</a>
<a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>

<div class="card mb-3" >
    <div class="row g-0">

      <div class="col-md-4">
        @if ($film->image)
          <div style="max-height: 500px; overflow:hidden;">
            <img src="{{ asset('storage/' . $film->image) }}"
            class="img-fluid mt-3">  
          </div>      
        @endif
      </div>
      
      <div class="col-md-8">
        <div class="card-body">

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Judul Film :</label>
                <div class="col-md-6">
                    <span id="judul_film"> {!! $film->judul_film  !!}</span></p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Jenis Film :</label>
                <div class="col-md-6">
                    <span id="jenis_film"> {!! $film->jenis_film  !!}</span></p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Producer :</label>
                <div class="col-md-6">
                    <span id="produser"> {!! $film->producer  !!}</span></p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Sutradara :</label>
                <div class="col-md-6">
                    <span id="sutradara"> {!! $film->sutradara  !!}</span></p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Penulis :</label>
                <div class="col-md-6">
                    <span id="penulis"> {!! $film->penulis  !!}</span></p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Cast :</label>
                <div class="col-md-6">
                    <span id="cast"> {!! $film->cast  !!}</span></p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Link Trailer :</label>
                <div class="col-md-6">
                    <span id="link_trailer"> {!! $film->link_trailer  !!}</span></p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Sinopsis :</label>
                <div class="col-md-6">
                    <span id="sinopsis"> {!! $film->sinopsis  !!}</span></p>
                </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>

@endsection