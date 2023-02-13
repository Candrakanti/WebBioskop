@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
@section('container')

<h4><b>Pesanan Saya</b></h4>
<h4 class="text-center"> Pembatalan Pesanan </h4>

<h6 class="text-muted text-end">Total Pembatalan : {{ $cst }}</h6>

<div class="row 9-3 align-items-center mt-2">
  <div class="col-auto">
    <form action="/exp" method="GET">
    <input type="search"  name="search"  class="form-control"  placeholder="Masukan Judul Film">
  </form>
  </div>
</div>


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
                     
                      <p class="card-text fw-bold">Pembatalan Pesanan dilakukan otomatis oleh sistem</p>
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

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>

<script>
  $(document).ready( function () {
$('#myTable').DataTable();
} );
</script>

@endsection