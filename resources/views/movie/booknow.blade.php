@extends('layouts.main')
@section('container')
    <form method="POST" action="{{ route('booknow.show', $data->id_film) }}">
        @csrf
        <h2>{{ $data->user_id }}</h2>

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
                                                  name="kursi" >
                                            </label>
    
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H2"  {{  ($data->kursi == 1 ? 'disabled' : '') }}
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
                                            <p> </p>
                                        </div>
                                        <div class="col-6"> <b>
                                                <p></p>
                                            </b></div>
                                    </div>
    
                                    <div class="row ">
                                        <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                            <p class="">Date & Month :</p>
                                        </div>
                                        <div class="col-6"> <b>
                                                <p>{{ \Carbon\Carbon::now()->format('l,d,M') }}</p>
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
                                                <input class="form-control btn btn-secondary text-dark" type="text"
                                                    placeholder="harga Yang Anda Pilih" aria-label="Disabled input example" readonly
                                                 name="kursi" id="seat">
                                                {{-- <span class="badge rounded-pill text-bg-info" disabled>Info</span> --}}
                                            </div>
                
                                            <div class="pt-3">
                                                <input class="form-control" type="text" placeholder="harga Yang Anda Pilih"
                                                name="harga" aria-label="Disabled input example"  id="price">
                                            </div>
                
                                            <div class="container text-center mt-3">
                                              
                                                    <button type="submit" class="btn btn-primary" id="book" disabled>BOOK
                                                        NOW</button>
                                             
                                            </div>
                                </div>
                             

                                {{-- </form> --}}
                            </div>
    
                        </div>
                    </div>
    
                </div>
            </div>
   
    
   
    </form>

   
@endsection