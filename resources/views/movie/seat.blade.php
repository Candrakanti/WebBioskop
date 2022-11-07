@extends('layouts.main')
@section('container')
    <form method="POST" action="{{ route('booking.show', $data->id_film) }} " class="product_data">
        @csrf

        <div class="container" id="gap_form">
            @csrf

            <div class="row">

           
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
                                <div class="seats" id="seats">

                                    <div class="row  g-0 mx-0 ">
                                        <div class="col-4 col-lg-4  col-sm-4 col-md-4 px-0">
                                            <label>
                                                <input id="hi" type="checkbox" value="{{ $data->harga}}"
                                                    data-value="H1" class="harga" name="kursi"
                                                    @if($data->user_id === $data->kursi)
                                                   disabled
                                                @endif
                                                    >
                                            </label>

                                            <label>

                                                <input type="checkbox" value="{{ $data->harga }}" data-value="H2"
                                                    class="harga" name="kursi" @if($data->user_id === $data->kursi)
                                                    disabled
                                                 @endif></label> <br>

                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G1"
                                                    class="harga"></label>

                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G2"
                                                    class="harga"></label>

                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="G3"
                                                    class="harga"></label> <br>

                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F1"
                                                    class="harga"></label>

                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F2"
                                                    class="harga"></label>

                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="F3"
                                                    class="harga"></label> <br>

                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E1"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E2"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="E3"
                                                    class="harga"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D1"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D2"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="D3"
                                                    class="harga"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C1"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C2"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="C3"
                                                    class="harga"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B1"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B2"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="B3"
                                                    class="harga"></label><br>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A1"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A2"
                                                    class="harga"></label>
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A3"
                                                    class="harga"></label>

                                        </div>

                                        <div class="col-4 col-lg-4 col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="H3"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H4"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H5"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G4"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G5"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G6"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F4"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F5"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F6"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E4"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E5"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E6"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D4"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D5"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D6"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C4"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C5"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C6"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B4"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B5"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B6"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A4"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A5"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A6"
                                                    class="harga"></label>


                                        </div>

                                        <div class="col-4 col-lg-4 col-sm-4 col-md-4 px-0"name="harga">
                                            <label> <input type="checkbox" value="{{ $data->harga }}" data-value="H6"
                                                    class="harga" > </label>
                                          
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="H7"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G7"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G8"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="G9"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F7"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F8"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="F9"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E7"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E8"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="E9"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D7"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D8"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="D9"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C7"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C8"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="C9"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B7"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B8"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="B9"
                                                    class="harga"></label><br>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A7"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A8"
                                                    class="harga"></label>
                                            <label><input type="checkbox" value="{{ $data->harga }}" data-value="A9"
                                                    class="harga"></label>

                                        </div>
                                    </div>

                                </div>
                            @else
                                <div class="row">
                                    @foreach (range('A', $data->jumlah_row) as $d)
                                        <div class="col-2">

                                            <nav class="nav flex-column">
                                                <a class="nav-link" href="#">
                                                    {{ $d }}
                                                </a>
                                            </nav>

                                        </div>

                                        <div class="col-10">
                                            <div class="seats" id="seats">
                                                @foreach (range(1, $data->jumlah_kursi_perrow) as $col)
                                                    <input type="checkbox" class="harga" value="{{ $data->harga }}"
                                                        data-value="{{ $data->jumlah_kursi_perrow }}">
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
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
                                    <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top"
                                        alt="" width="auto" height="auto">
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
                                <div class="pt-3">
                                    <input class="form-control btn btn-secondary text-dark" type="text"
                                        placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" readonly
                                        name="kursi" id="seat">
                                    {{-- <span class="badge rounded-pill text-bg-info" disabled>Info</span> --}}
                                </div>

                                <div class="pt-3">
                                    <input class="form-control" type="text" placeholder="Kursi Yang Anda Pilih"
                                        aria-label="Disabled input example" name="harga" for="harga" readonly
                                        id="price">
                                </div>

                                <div class="container text-center mt-3">

                                    <button type="submit" class="btn btn-primary" id="book" disabled>BOOK
                                        NOW</button>
                                    {{-- </div> --}}

                                </div>
                            </div>

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

                $(".harga:checked").each(function() {
                    test.push($(this).data('value'))
                });



                document.getElementById('seat').value = test;

                var input = document.getElementsByClassName("harga");
                var total = 0;
                for (var i = 0; i < input.length; i++) {
                    if (input[i].checked) {
                        total += parseFloat(input[i].value);
                    }
                }
                document.getElementById("price").value = total.toFixed(2).replace(/\.00/g, '');

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