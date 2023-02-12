@extends('layouts.main')
@section('container')

<div class="container mb-4">
  <div class="row">

      <div class="col-6 col-xs-6 col-md-6 col-sm-6 col-lg-6">
          <a class="text-danger" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false" >
          <h3><b>Pesanan Saya</b></h3>
          </a>
      </div>

      <div class="col-6 col-xs-6 col-md-6 col-sm-6 col-lg-6">
          <div class="row d-flex justify-content-end">
              <div class="col-md-6 col-6 col-sm-6 col-lg-6">
                  <form action="/exp" method="GET">
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

<h4 class="text-center"> Pembatalan Pesanan </h4>


@foreach ($listproducts as $item)

    @if($item->status_bayar == 2)

    <div class="container">
        <div class="container d-flex" >

            <div class="card mb-3 border border-2" style="max-width: 600px;"   >
                <div class="row g-0">
                  <div class="col-md-4 ">
                    <img src="{{ asset('storage/' . $item->image) }}"  class="img-fluid rounded-start" >
                  </div>
                  <div class="col-md-8 " >
                    <div class="card-body">
                      <h5 class="card-title" >{{ $item->judul_film }}</h5>
                      <p class="card-text">Tanggal Tayang : {{ $item->tanggal_booking}}</p>
                    
                      <p class="card-text">Studio : {{ $item->jenis_studio }}</p>
                      <p class="card-text">Payment Code : {{ $item->id_payment }}</p>
                     
                      
                      {{-- <p class="card-text">Tempat Duduk : {{ $item->kursi }}</p> --}}
                      <p class="card-text"><small class="text-muted">NOTE: USAHAKAN SAMPAI DI BIOSKOP 10 MENIT SEBELUM FILM DITAYANGKAN !</small></p>
                    </div>
                  </div>
                </div>
              </div>

        </div>
    </div>

    @endif


   
@endforeach

@endsection