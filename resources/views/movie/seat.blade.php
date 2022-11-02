@extends('layouts.main')
@section('container')
    <form method="POST" action="{{ route('booking.show', $data->id_film) }} " class="product_data">
        @csrf


        <div class="container ">
            <h1>{{ $data->judul_film }}</h1>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-6">
                    <h1> audiotori #{{ $data->audiotori }}</h1>
                </div>
                <div class="col-6 col-sm-6 col-lg-6">
                    <div class="container bg-danger">
                        <p>{{ $data->jenis_studio }}</p>
                        <p>{{ $data->jenis_studio }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="card border border-5">
                    <div class="card-body">
                     
                        <hr class="border border-primary border-3 opacity-75">
                        <div class="div" ></div>
                        <p class="card-text text-center"> SCREEN</p>

                        <div class="alert alert-danger" role="alert">
                            <p class="text-center"> reguler = 60.000</p>
                          </div>

                        @if ($data->jenis_studio === 'Regular')
                            <div class="seats" id="seats" name="harga">
                                <div class="row">
                                    <div class="col-3">
                                      <p class="text-center">H</p>
                                      <p class="text-center">G</p>
                                      <p class="text-center">F</p>
                                      <p class="text-center">E</p>
                                      <p class="text-center">D</p>
                                      <p class="text-center">C</p>
                                      <p class="text-center">B</p>
                                      <p class="text-center">A</p>
                                      


                                    </div>


                                    <div class="col-3">
                                         <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="H1" name="programming">
                                        </label>

                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="H2"
                                                name="programming"></label> <br>

                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="G1" name="programming"></label>

                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="G2" name="programming"></label>

                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="G3" name="programming"></label> <br>
                                        
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="F1" name="programming"></label>

                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="F2" name="programming"></label>

                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="F3" name="programming"></label> <br>

                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="E1" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="E2" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="E3" name="programming"></label><br>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="D1" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="D2" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="D3" name="programming"></label><br>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="C1" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="C2" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="C3" name="programming"></label><br>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="B1" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="B2" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="B3" name="programming"></label><br>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="A1" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="A2" name="programming"></label>
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="A3" name="programming"></label>
                                        
                                    </div>

                                    <div class="col-3"> 
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="H3" name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="H4"
                                                name="programming"></label>                                       
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="H5"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="G4"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="G5"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="G6"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="F4"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="F5"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="F6"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="E4"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="E5"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="E6"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="D4"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="D5"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="D6"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="C4"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="C5"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="C6"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="B4"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="B5"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="B6"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="A4"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="A5"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="A6"
                                                name="programming"></label>
                                        
                                        
                                    </div>

                                    <div class="col-3"> 
                                        <label> <input type="checkbox" value="{{ $data->harga }}"
                                                data-value="H6" name="programming"> </label>

                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="H7"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="G7"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="G8"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="G9"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="F7"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="F8"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="F9"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="E7"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="E8"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="E9"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="D7"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="D8"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="D9"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="C7"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="C8"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="C9"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="B7"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="B8"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="B9"
                                                name="programming"></label><br>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="A7"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="A8"
                                                name="programming"></label>
                                        <label><input type="checkbox" value="{{ $data->harga }}" data-value="A9"
                                                name="programming"></label>
                                        
                                    </div>
                                </div>

                            </div>


                            {{-- <a href="/Npayment" class="btn btn-danger">Click here to Get Values</a> --}}
                            
                        @endif
                    </div>
                </div>

            </div>

            <div class="col-4">

                <div class="card border border-5">
                    <div class="card-body">

                        <div class="row">


                            <div class="col-4">
                            <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="" width="auto" height="auto">
                            </div>

                            <div class="col-8">

                                <div class="row">
                                  <div class="col-6"> <p>haii</p></div>
                                  <div class="col-6"> <b><p>haii</p></b></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"> <p>haii</p></div>
                                    <div class="col-6"> <b><p>haii</p></b></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"> <p>haii</p></div>
                                    <div class="col-6"> <b><p>haii</p></b></div>
                                </div>


                            </div>
                            
                            <div class="pt-3">
                                <input class="form-control btn btn-secondary" type="text"
                                    placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" disabled
                                    id="seat">
                                {{-- <span class="badge rounded-pill text-bg-info" disabled>Info</span> --}}
                            </div>
    
                            <div class="pt-3">
                                <input class="form-control" type="text" placeholder="Kursi Yang Anda Pilih"
                                    aria-label="Disabled input example" disabled id="price">
                            </div>

                            <input type="hidden" class="qty-input" value="{{ $data->jenis_studio }}" class="prod_id">

                            <div class="container text-center mt-3">
                                <button class="btn btn-primary" id="book" disabled>BOOK NOW</button>
                            </div>
                            
                    </div>                       
                 </div>
         
            </div>



    <script>
        $(document).ready(function() {
            $('.seats').click(function() {
                var test = new Array();
                $("input[name='programming']:checked").each(function() {
                    test.push($(this).data('value'));
                });
                document.getElementById('seat').value = test;

                var input = document.getElementsByName("programming");
                var total = 0;
                for (var i = 0; i < input.length; i++) {
                    if (input[i].checked) {
                        total += parseFloat(input[i].value);
                    }
                }
                document.getElementById("price").value = "Rp." + total.toFixed(2).replace(/\.00/g, '');

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