@extends('layouts.main')
@section('container')
    <form method="POST" action="{{ route('booking.show', $data->id_film) }}">
        @csrf


        <div class="row" >
                
                <div class=" col-lg-8 col-md-7 col-sm-12 col-xs-12">
    
                    <div class="card border border-5">
                        <div class="card-body ">
                            <div class="img d-flex justify-content-center">
                                <img src="{{ asset('img/line.png') }}" width="80px"
                                    class="rounded d-flex justify-content-center">
                            </div>
    
                            <p class="card-text text-center pt-1"> SCREEN</p>
    
                            <div class="alert alert-danger" role="alert">
                                <p class="text-center"> {{ $data->jenis_studio }} : {{ $data->harga }}</p>
                            </div>
    
    
                            @if ($data->jenis_studio === 'Regular')
                                <div class="seats" id="seats" name="harga">
                                    <div class="row  g-0 mx-0 ">
    
                                            <input type="checkbox" class="seat" name="selected[]" value="H1"><p>A26</p>
                                            <input type="checkbox" class="seat" name="selected[]" value="H2"><p>A27</p>
                                            <input type="checkbox" class="seat" name="selected[]" value="H3"><p>A28</p>
                                            <input type="checkbox" class="seat" name="selected[]" value="h4"><p>A29</p>
    
                                        <div class="col-4 col-lg-4  col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="H1"
                                                  name="harga">
                                            </label>
    
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H2"
                                                   name="harga"></label> <br>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G1"
                                                    name="harga"></label>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G2"
                                                    name="harga"></label>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G3"
                                                    name="harga"></label> <br>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F1"
                                                    name="harga"></label>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F2"
                                                    name="harga"></label>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F3"
                                                    name="harga"></label> <br>
    
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E1"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E2"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E3"
                                                    name="harga"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D1"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D2"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D3"
                                                    name="harga"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C1"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C2"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C3"
                                                    name="harga"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B1"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B2"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B3"
                                                    name="harga"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A1"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A2"
                                                    name="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A3"
                                                    name="harga"></label>
    
                                        </div>
    
                                        <div class="col-4 col-lg-4 col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="H3"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H4"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H5"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G4"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G5"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G6"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F4"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F5"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F6"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E4"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E5"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E6"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D4"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D5"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D6"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C4"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C5"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C6"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B4"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B5"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B6"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A4"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A5"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A6"
                                                    name="harga"></label>
    
    
                                        </div>
    
                                        <div class="col-4 col-lg-4 col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="H6"
                                                    name="harga"> </label>
    
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H7"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G7"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G8"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G9"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F7"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F8"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F9"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E7"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E8"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E9"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D7"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D8"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D9"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C7"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C8"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C9"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B7"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B8"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B9"
                                                    name="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A7"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A8"
                                                    name="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A9"
                                                    name="harga"></label>
    
                                        </div>
                                    </div>
    
                                </div>
    
    
                                {{-- <a href="/Npayment" class="btn btn-danger">Click here to Get Values</a> --}}
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
                
                                            <div class="pt-3">
                                                <input class="form-control" type="text" placeholder="harga Yang Anda Pilih"
                                                name="harga" aria-label="Disabled input example" readonly id="price">
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
                $(function() {
        var reserved = [<?php $data->harga ?>] ;
        var seats = document.getElementsByClassName('seat');
        for (var i = 0; i < seats.length; i++) {
        reserved.map(function(v) {
        if (seats[i].value === v) {
                seats[i].setAttribute("disabled", "true");
                seats[i].setAttribute("checked", "true");
        }
        });
        }
        }); 


        $(document).ready(function() {

            $('.seats').click(function() {
                var test = new Array();
                var book ="H1";
                $("input[name='harga']:checked").each(function() {
                       
                                test.push($(this).data('value'));
                        
                }); 
                
                document.getElementById('seat').value = test;
                var input = document.getElementsByName("harga");
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
