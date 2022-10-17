@extends('layouts.main')


@section('container')
<form method="POST" action="{{ route('movie.detail', $data->id_film) }}">
    @csrf
    <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            @if ($data->image)
              <div style="max-height: 500px; overflow:hidden;">
                <img src="{{ asset('storage/' . $data->image) }}"
                class="img-fluid mt-3">  
              </div>      
            @endif
          </div>

          <div class="col-md-8">
            <div class="card-body">
                <h5 style="color: red"><b>{{ $data->judul_film }}</b></h5>
    
            
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-start">Jenis Film  <td>:</td></label>
                    <div class="col-md-6">
                        <span id="jenis_film">{{ $data->jenis_film }}</span></p>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-start">Producer  <td>:</td></label>
                    <div class="col-md-6">
                        <span id="produser"> {{$data->producer }}</span></p>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-start">Sutradara  <td>:</td></label>
                    <div class="col-md-6">
                        <span id="sutradara"> {{$data->sutradara  }}</span></p>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-start">Penulis  <td>:</td></label>
                    <div class="col-md-6">
                        <span id="penulis"> {{$data->penulis  }}</span></p>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-start">Cast  <td>:</td></label>
                    <div class="col-md-6">
                        <span id="cast"> {{$data->cast  }}</span></p>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-start">Link Trailer  <td>:</td></label>
                    <div class="col-md-6">
                        <span id="link_trailer"> {{$data->link_trailer  }}</span></p>
                    </div>
                </div>
    
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-start">Sinopsis  <td>:</td></label>
                    <div class="col-md-6">
                        <span id="sinopsis"> {{$data->sinopsis  }}</span></p>
                    </div>
                </div>
    
                <a class="btn btn-danger" href="/">BOOK NOW</a>
                
            </div>
          </div>
        </div>
      </div>
</form>
@endsection