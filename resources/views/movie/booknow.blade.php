@extends('layouts.main')
@section('container')
    <form method="POST" action="{{ route('BookNow', $data->id_film) }} " class="product_data">
        @csrf
      <p>haii</p>

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