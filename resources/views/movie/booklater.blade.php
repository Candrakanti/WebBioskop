@extends('layouts.main')

@section('container')
    {{-- <form method="POST" action="{{ route('movie.detail', $data->id_film) }}">
        @csrf --}}

<<<<<<< HEAD
        <div class="row" >
                
                <div class=" col-lg-8 col-md-7 col-sm-12 col-xs-12">
    
                    <div class="card border border-5">
                        <div class="card-body ">
                            <div class="img d-flex justify-content-center">
                                <img src="{{ asset('img/line.png') }}" width="80px"
                                    class="rounded d-flex justify-content-center">
                            </div>
    
                            <p class="card-text text-center pt-1"> SCREEN </p>
    
                            <div class="alert alert-danger" role="alert">
                                <p class="text-center"> {{ $data->jenis_studio }} : {{ $data->harga }}</p>
                            </div>

                            @if ($data->jenis_studio === 'Regular')

                                <div class="seats" id="seats" name="harga">
                                        
                                    <div class="row  g-0 mx-0 ">
                                        <div class="col-4 col-lg-4  col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="H1" {{  ($data->kursi == 1 ? 'disabled' : '') }}
                                                class="class"  name="kursi">
                                            </label>
    
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H2" 
                                                   name="kursi"></label> <br>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G1"
                                                    name="kursi"></label>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G2"
                                                    name="kursi"></label>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G3"
                                                    name="kursi"></label> <br>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F1"
                                                    name="kursi"></label>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F2"
                                                    name="kursi"></label>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F3"
                                                    name="kursi"></label> <br>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E1"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E2"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E3"
                                                    name="kursi"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D1"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D2"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D3"
                                                    name="kursi"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C1"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C2"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C3"
                                                    name="kursi"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B1"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B2"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B3"
                                                    name="kursi"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A1"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A2"
                                                    name="kursi"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A3"
                                                    name="kursi"></label>
    
                                        </div>
    
                                        <div class="col-4 col-lg-4 col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="H3"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H5"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A6"
                                                    name="kursi"></label>
    
    
                                        </div>
    
                                        <div class="col-4 col-lg-4 col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="H6"
                                                    name="kursi"> </label>
    
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H7"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A9"
                                                    name="kursi"></label>
                                        </div>
                                    </div>
                                </div>

                                @else
                @foreach(range('A',$data->jumlah_row) as $v)
                <div class="row">
                        <div class="col-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <nav class="nav flex-column">               
                                        <a class="nav-link text-dark" href="#">{{ $v }}</a>
                                      </nav>
                        </div>
                        <div class="col-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                @for($i = 0; $i<$data->jumlah_kursi_perrow; $i++)
                                <input type="checkbox" value="  ">
                                 @endfor
                        </div>
                </div>
                    @endforeach  
                            @endif
                        
                        </div>
                    </div>
    
                </div>
    
                <div class=" col-lg-4 col-md-5 col-sm-12 col-xs-12 pt-sm-2 pt-xs-2 pt-3">
    
                    <div class="card border border-5">
                        <div class="card-body">
    
                            <div class="row  g-0">
    
    
                                <div class="col-4 col-lg-4 col-sm-4 col-md-4">
                                    <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt=""
                                        width="auto" height="auto">
                                </div>
    
                                <div class="col-8">
    
                                    <p class="fw-bold">{{ $data->judul_film }}</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>haii</p>
                                        </div>
                                        <div class="col-6"> <b>
                                                <p>haii</p>
                                            </b></div>
                                    </div>
    
                                    <div class="row ">
                                        <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                            <p>Date & Month :</p>
                                        </div>
                                        <div class="col-6"> <b>
                                                <p>{{ \Carbon\Carbon::tomorrow()->format('d,M') }}</p>
                                            </b></div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                            <p>Studio : </p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-sm-6 col-md-6"> <b>
                                                <p class="text-center">{{ $data->jenis_studio }}</p>
                                            </b></div>
                                    </div>
    
    
                                </div>
    
                                <div class="book" id="gap_form">
                                        @csrf
                                        <div class="pt-3">
                                                <input class="form-control rounded-pill btn btn-secondary text-dark" type="text"
                                                    placeholder="harga Yang Anda Pilih" aria-label="Disabled input example" readonly
                                                 name="kursi" id="seat">
                                                {{-- <span class="badge rounded-pill text-bg-info" disabled>Info</span> --}}
                                            </div>
                
                                            <div class="pt-3" class="totalchecked">
                                                <input class="form-control rounded-pill text-bg-primary btn btn-lg"  type="text" placeholder="Jumlah Kursi Yang Anda Pilih"
                                                name="jumlah_kursi" aria-label="Disabled input example" class="totalchecked"  readonly id="count_seat">
                                            </div>

                                            <div class="pt-3">
                                                <input class="form-control" type="text" placeholder="harga Yang Anda Pilih" readonly
                                                name="harga" aria-label="Disabled input example"  id="price">
                                            </div>
                
                                            <div class="container text-center mt-3">
                                              
                                                    <button type="submit" class="btn btn-primary" id="book" disabled>BOOK
                                                        NOW</button>
                                             
                                            </div>
                                </div>
                             
=======
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
                            <h5 style="color: red"><b>{!! $data->judul_film !!}</b></h5>
                        </div>
                        <div class="col-6 text-end"> <span
                                class="badge rounded-pill text-bg-danger btn btn-lg">{!!  $data->jenis_film !!}</span>
                        </div>
                    </div>
>>>>>>> 6beb4f880b197e76b6072c2e8d818cdb1a95b043



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


                        <a href="{{ route('bookLaterSeat.show', $data->id_jadwal) }}" style="color:#0000FF;" class="border border-0 "
                            id="book">Book For Tommorrow </a>

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
<<<<<<< HEAD
   
    </form>

    <script>
        
        $(document).ready(function() {
            $('.seats').click(function() {
                var test = new Array();
                var book ="H1";
                $("input[name='kursi']:checked").each(function() {
                                test.push($(this).data('value'));          
                }); 
                var check =    $(":checkbox:checked").length;
           document.getElementById('seat').value = test ;
           document.getElementById('count_seat').value=  check;
  
                var input = document.getElementsByName("kursi");
                var total = 0;
                for (var i = 0; i < input.length; i++) {
                    if (input[i].checked) {
                        total += parseFloat(input[i].value);
                    }
                }
                document.getElementById("price").value =  total.toFixed(2).replace(/\.00/g, '');

                document.querySelector('#seats').addEventListener('change', () => {
                    var seat = document.getElementById("seats");
                    var checkeds = seat.getElementsByTagName("INPUT");
                    var counter = 0;
                    for (let i = 0; i < checkeds.length; i++) {
                        if (checkeds[i].checked) {
                            counter++;
                        }
                    }
                    if (counter >= 1) {
                        document.getElementById("book").disabled = false;
                        $('#gap_form').wrap(
                            '<form id="Form2" action="{{ route('cart.store', $data->id_film) }}" method="POST" ></form>'
                        );
                    } else {
                        document.getElementById("book").disabled = true;
                    }
                });
            });
        });
     
=======

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
                <a href="/BookNow/{{ $data->id_jadwal }}" class="link-dark">{{ \Carbon\Carbon::now()->format('l') }}</a>

                <div class="row ">
                    <div class="col-5 col-lg-5 col-sm-5 col-xs-5 mb-3">
                        <a href="/BookNow/{{ $data->id_jadwal }}" class="link-danger">{{ \Carbon\Carbon::now()->format('d,M') }}</a>

                    </div>
                </div>

            </div>

            <div class="col-2 col-lg-2 col-sm-2 col-xs-2 mb-3 ">
                <a href="/BookLater/{{ $data->id_jadwal }}" class="link-dark"  >{{ \Carbon\Carbon::tomorrow()->format('l') }}</a>

                <div class="row ">
                    <div class="col-2 col-lg-2 col-sm-2 col-xs-2 mb-3">
                        <a href="/BookLater/{{ $data->id_jadwal }}" class="link-danger">{{ \Carbon\Carbon::tomorrow()->format('d,M') }}</a>

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
                        <a href="{{ route('bookLaterSeat.show', $data->id_jadwal) }}" class="btn btn-outline-danger">
                            {{ $data->jam_tayang }}
                        </a>
                        {{-- <a href="/BookNow/{{ $data->id_jadwal }}" class="btn btn-outline-danger">
                            {{ $data->jam_tayang }}
                        </a> --}}
                     
                    </div>
                </div>
            </div>
        </div>

    {{-- </form> --}}

    <script>
          function check()
        {
            alert("Hello! I am an alert box!!");
        }

        $('#gap_form').wrap(
            '<form id="Form2" action="{{ route('booking.show', $data->id_film) }} " method="POST" ></form>'
        );
>>>>>>> 6beb4f880b197e76b6072c2e8d818cdb1a95b043
    </script>
@endsection