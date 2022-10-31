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

        <input type="hidden" class="qty-input" value="{{ $data->jenis_studio }}" class="prod_id">

        @if ($data->jenis_studio === 'Regular')
            <div class="seats" id="seats" name="harga">
                <label> <input type="checkbox" value="{{ $data->harga }}" data-value="A1" name="programming">
                    PHP</label>
                <label><input type="checkbox" value="{{ $data->harga }}" data-value="A2" name="programming"> Java</label>

            </div>


            {{-- <a href="/Npayment" class="btn btn-danger">Click here to Get Values</a> --}}
            <div class="pt-3">

                <input class="form-control btn btn-secondary" type="text" placeholder="Kursi Yang Anda Pilih"
                    aria-label="Disabled input example" disabled id="seat">
                {{-- <span class="badge rounded-pill text-bg-info" disabled>Info</span> --}}
            </div>

            <div class="pt-3">
                <input class="form-control" type="text" placeholder="Kursi Yang Anda Pilih"
                    aria-label="Disabled input example" disabled id="price">
            </div>
        @endif


        <div class="card-body">
            <button class="btn btn-primary" id="book" disabled>BOOK NOW</button>
        </div>

    </form>



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
