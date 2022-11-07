@extends('layouts.main')

@section('container')
    <h4><b>Pesanan Saya</b></h4>
    <h4 class="text-center"> Selesai</h4>



    @foreach ($listproducts as $item)
        <div class="container">
            <hr class="border border-dark border-2 opacity-100" width="30%" style="margin-bottom: 50px; margin-left:35%">
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
        </div>
    @endforeach
@endsection