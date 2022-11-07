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
                        <div class="row">
                            <div class="col-6">
                                <h5 style="color: red"><b>{{ $data->judul_film }}</b></h5>
                            </div>
                            <div class="col-6 text-end"> <span
                                    class="badge rounded-pill text-bg-danger btn btn-lg">{{ $data->jenis_film }}</span>
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
                            <hr class="border border-danger border-2 opacity-100" width="40%" style="margin-left:">

                            <a style="color:#0000FF;" href="{{ $data->link_trailer }}">Wacth Trailer</a>&nbsp&nbsp&nbsp

                            {{-- <!-- Button trigger modal -->
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
                            </div> --}}


                            <a href="/booking/show/{{ $data->id_film }}" style="color:#0000FF;" class="border border-0 "
                                id="book">Book Now</a>

                            <hr class="border border-danger border-2 opacity-100" width="40%" style="margin-left:">
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

        <div class="container">
            <div class="row">
                <div class="col-2 col-lg-2 col-sm-2 col-xs-2 mb-3">
                    <span class="badge rounded-pill text-bg-danger btn btn-lg">Today</span>
                </div>
            </div>
            <div class="row ">

                <div class="col-4 col-lg-2 col-sm-2 col-xs-2 mb-3 ">
                    <a href="/BookNow" class="link-dark">{{ \Carbon\Carbon::now()->format('l') }}</a>

                    <div class="row ">
                        <div class="col-5 col-lg-5 col-sm-5 col-xs-5 mb-3">
                            <a href="/BookNow" class="link-danger">{{ \Carbon\Carbon::now()->format('d,M') }}</a>

                        </div>
                    </div>

                </div>

                <div class="col-2 col-lg-2 col-sm-2 col-xs-2 mb-3 ">
                    <a href="/BookLater" class="link-dark">{{ \Carbon\Carbon::tomorrow()->format('l') }}</a>

                    <div class="row ">
                        <div class="col-2 col-lg-2 col-sm-2 col-xs-2 mb-3">
                            <a href="/BookLater" class="link-danger">{{ \Carbon\Carbon::tomorrow()->format('d,M') }}</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>




        <div class="container pt-3" style="padding-bottom: 60%">
            <div class="accordion accordion-flush border border-5" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="col-4 col-lg-4 col-md-4 col-sm-6">
                                <img src="/img/logo.png" class="card-img-top" alt="" style="width: 30%">
                            </div>
                            <div class="col-8">
                                <p><b>KINGS PLAZA</b></p>
                            </div>
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

    <script>
        $('#gap_form').wrap(
            '<form id="Form2" action="{{ route('booking.show', $data->id_film) }} " method="POST" ></form>'
        );
    </script>
@endsection
