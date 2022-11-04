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

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe width="100%" height="100%"
                                                src="https://www.youtube.com/watch?v=wlp9yv33nWA&feature=youtu.be"
                                                frameborder="0" allowfullscreen></iframe>
                                        </div>

                                    </div>
                                </div>
                            </div>



                            <form action="/AddProduct" method="post">
                                @csrf
                                {{-- <input type="hidden" name="id_film" value="{{ $data->id_film }}"> --}}
                                <button type="submit"> BOOK NOW</button>
                                {{-- <a href="/booking/show/{{ $data->id_film }}">BOOK NOW</a> --}}
                            </form>

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

        <div class="container" style="padding-bottom: 60%">

            <a href="#" class="link-warning">{{ \Carbon\Carbon::now()->format('l') }}</a>
            <a href="#" class="link-warning">{{ \Carbon\Carbon::now()->format('d') }}</a>
            <a href="#" class="link-warning">{{ \Carbon\Carbon::now()->format('M') }}</a>
            <br>

            {{-- Carbon::now()->toDayDateTimeString(); --}}

            <a href="#" class="link-warning">{{ \Carbon\Carbon::tomorrow()->format('l') }}</a>
            <a href="#" class="link-warning">{{ \Carbon\Carbon::tomorrow()->format('d') }}</a>
            <a href="#" class="link-warning">{{ \Carbon\Carbon::tomorrow()->format('M') }}</a>
            <br>

            <div class="accordion accordion-flush border border-5" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            {{ $data->kota }}
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <span class="badge rounded-pill bg-light text-dark">
                                {{ $data->jam_tayang }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

    </form>
@endsection
