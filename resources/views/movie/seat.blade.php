@extends('layouts.main')
@section('container')
    <form method="POST" action="{{ route('booking.show', $data->id_film) }}">
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

                            <div>form 1:
                                <div class="totalchecked">0 selected</div>
                                <div>
                                  <input type="checkbox" class="class" name="1">
                                  <input type="checkbox" class="class" name="2">
                                  <input type="checkbox" class="class" name="3">
                                </div>
                              </div>

                              <div>

                                
                              </div>

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
                                            <p>haii</p>
                                        </div>
                                        <div class="col-6"> <b>
                                                <p>haii</p>
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
                
                                            <div class="pt-3" class="totalchecked">
                                                <input class="form-control" type="text" placeholder="Jumlah Kursi Yang Anda Pilih"
                                                name="jumlah_kursi" aria-label="Disabled input example" class="totalchecked"   id="count_seat">
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
                // alert("My favourite programming languages are: " + test);
            });
        });
        // $('document').ready(function() {
        //     $('.addToCartBtn').click(function(e) {
        //         e.preventDefault();
        //         var product_id = $(this).closest('.product_data').find('.prod_id').val();
        //         var product_qty = $(this).closest('.product_data').find('.qty-input').val();
        //         alert(product_id);
        //         alert(product_qty);
        //         $.ajax({
        //             method: "POST",
        //             url: "/AddToCart",
        //             data: {
        //                 'product_id': product_id,
        //                 'product_qty': product_qty,
        //             },
        //             success: function(response) {
        //             }
        //         })
        //     });
        // });
    </script>
@endsection
