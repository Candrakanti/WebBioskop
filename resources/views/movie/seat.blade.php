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


        <ul id="list" class="list-unstyled" onclick="seat();">


            @if ($data->jenis_studio === 'Regular')
                <div class="row ">

                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                        <h1>A</h1>
                        <li class="border border-5" data-value="A1">
                            <h1 class="text-center pt-5">DIV 1</h1>
                        </li>

                    </div>

                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                        <h1>B</h1>
                        <li class="border border-5 " data-value="B1">
                            <h1 class="text-center pt-5">DIV 2A</h1>
                        </li>

                    </div>
                </div>

                <div class="pt-3">

                    <input class="form-control" type="text" placeholder="Kursi Yang Anda Pilih"
                        aria-label="Disabled input example" disabled id="seat">
                </div>
            @endif



        </ul>



        <div class="card-body">
            <a class="btn btn-primary ">BOOK NOW</a>
        </div>



    </form>



    <script>
        function seat() {
            $('li').click(function(e) {
                e.preventDefault();
                var value = $(this).closest('li').data('value');
                document.getElementById('seat').value = value;
                // console.log(value);
            });
        }

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
