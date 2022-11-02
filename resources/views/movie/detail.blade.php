@extends('layouts.main')

@section('container')
    <form method="POST" action="{{ route('movie.detail', $data->id_film) }}">
        @csrf
        <div class="container d-flex justify-content-center">


            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    @if ($data->image)
                        <div style="max-height: 700px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $data->image) }}" width="600" height="500"
                                class="img-fluid mt-3">
                        </div>
                    @endif
                </div>

                <div class="col-8 ">
                    <div class="card-body">
                        <h5 style="color: red"><b>{{ $data->judul_film }}</b></h5>


                        <div class="row mb-3 ">
                            <label class="col-md-3 col-form-label text-md-start">Jenis Film <td>:</td></label>
                            <div class="col-md-6">
                                <span id="jenis_film">{{ $data->jenis_film }}</span></p>
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label class="col-md-3 col-form-label text-md-start">Producer <td>:</td></label>
                            <div class="col-md-6">
                                <span id="produser"> {{ $data->producer }}</span></p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-start">Sutradara <td>:</td></label>
                            <div class="col-md-6">
                                <span id="sutradara"> {{ $data->sutradara }}</span></p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-start">Penulis <td>:</td></label>
                            <div class="col-md-6">
                                <span id="penulis"> {{ $data->penulis }}</span></p>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-start">Cast <td>:</td> </label>
                            <div class="col-md-6">
                                <span id="cast"> {{ $data->cast }}</span></p>
                            </div>
                        </div>

                        <div class="row-mb-3" style="margin-left:5%">
                            <hr class="border border-danger border-2 opacity-50" width="40%" style="margin-left:">

                            <a style="color:#0000FF;" href="{{ $data->link_trailer }}">Wacth Trailer</a>&nbsp&nbsp&nbsp

                            <a href="/booking/show/{{ $data->id_film }}">BOOK NOW</a>
                            <hr class="border border-danger border-2 opacity-50" width="40%" style="margin-left:">
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-start">
                                <h5><b>Sinopsis</b></h5>
                            </label>
                            <span id="sinopsis">{!! $data->sinopsis !!}</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </form>
@endsection
