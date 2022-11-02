@extends('layouts.main')
@section('container')

    <form method="POST" action="{{ route('booking.show', $data->id_film) }}">
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


        @if ($data->jenis_studio === 'Regular')
            <div class="row product_data">

                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                    {{-- <input type="hidden" value="{{ $data->jenis_studio }}" class="prod_id"> --}}
                    @for ($i = 0; $i <= 1; $i++)
                        <input type="checkbox" class="qty-input" value="{{ $data->jenis_studio }}" class="prod_id">
                    @endfor


                    @for ($i = 0; $i < 4; $i++)
                        <div class="row">
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                @for ($j = 0; $j < 4; $j++)
                                    <input type="checkbox" class="qty-input" value="{{ $data->jenis_studio }}"
                                        class="prod_id">
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>


                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                    @for ($i = 0; $i <= 2; $i++)
                        <input type="checkbox">
                    @endfor


                    @for ($i = 0; $i < 3; $i++)
                        <div class="row">
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                @for ($j = 0; $j < 3; $j++)
                                    <input type="checkbox">
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>


                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                    @for ($i = 0; $i <= 1; $i++)
                        <input type="checkbox">
                    @endfor


                    @for ($i = 0; $i < 4; $i++)
                        <div class="row">
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                @for ($j = 0; $j < 4; $j++)
                                    <input type="checkbox">
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        @endif

        @if ($data->jenis_studio === 'Velvet')
            <h1>HALO INI VELVET</h1>
        @endif

        <div class="card-body">
            <button class="btn btn-primary addToCartBtn">BOOK NOW</button>
        </div>


    </form>

    <script>
        $('document').ready(function() {
            $('.addToCartBtn').click(function(e) {
                e.preventDefault();
                var product_id = $(this).closest('.product_data').find('.prod_id').val();
                var product_qty = $(this).closest('.product_data').find('.qty-input').val();
                alert(product_id);
                alert(product_qty);

                // $.ajax({
                //     method: "POST",
                //     url: "/AddToCart",
                //     data: {
                //         'product_id': product_id
                //     },
                //     success: function(response) {

                //     }
                // })
            });
        });
    </script>

@endsection
