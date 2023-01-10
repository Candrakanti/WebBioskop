@extends('layouts.main')

@section('container')

    <h4><b>Pesanan Saya</b></h4>
    <h4 class="text-center"> Selesai</h4>

    @foreach ($listproducts as $item)

        @if($item->status_bayar === "1")
{{--         
        <div class="container">
            <hr class="border border-dark border-2 opacity-100" width="30%" style="margin-bottom: 50px; margin-left:35%">
            <h1>{{ $item->status_bayar }}</h1>
            <div class="row">
                <div class="col-6 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="" style="width: 60%">
                </div>

                <div class="col-3 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p class="text-center" style="padding-top:35%;"> {{ $item->judul_film }}</p>
                </div>

             

                <div class="col-3 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                    <p class="" style="padding-top:30%;"> Selesai</p>
                    <button class="btn btn-danger rounded  badge rounded-pill" type="button">Cetak Pdf</button>
                </div>
            </div>
        </div> --}}
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
                      <p class="card-text">kode booking : {{ $item->id_booking }}</p>
                      
                      {{-- <p class="card-text">Tempat Duduk : {{ $item->kursi }}</p> --}}
                      <p class="card-text"><small class="text-muted">NOTE: USAHAKAN SAMPAI DI BIOSKOP 10 MENIT SEBELUM FILM DITAYANGKAN !</small></p>
                    </div>
                  </div>
                </div>
              </div>

        </div>


        @else
        
        @endif

  
       
    @endforeach
@endsection