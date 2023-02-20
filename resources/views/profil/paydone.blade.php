@extends('layouts.main')

@section('container')

    <h4><b>Pesanan Saya</b></h4>
    <h4 class="text-center"> Selesai</h4>

    @foreach ($listproducts as $item)

        @if($item->status_bayar === "1")
        <div class="container d-flex" >

            <div class="card mb-3 border border-2" style="max-width: 600px;"   >
                <div class="row g-0">
                  <div class="col-md-4 ">
                    <img src="{{ asset('storage/' . $item->image) }}"  class="img-fluid rounded-start" >
                  </div>
                  <div class="col-md-8 " >
                    <div class="card-body">
                      <h5 class="card-title" >{{ $item->judul_film }}</h5>
                      <p class="card-text "> <b>Tanggal Tayang :</b> {{ $item->tanggal_booking}}</p>
                      <p class="card-text"><b>Cinema :</b> {{ $item->nama_bioskop}} , {{ $item->alamat }}</p>
                      <p class="card-text"><b>Studio & Teater :</b> {{ $item->jenis_studio }} & {{ $item->audiotori }}</p>
                      <p class="card-text"><b>Kursi :</b> {{ $item->kursi}}</p>
                      <p class="card-text"><b>Jam Booking :</b> {{ $item->jam_booking}}</p>
                      <p class="card-text"><b>kode booking :</b> {{ $item->id_booking }}</p>
                      
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