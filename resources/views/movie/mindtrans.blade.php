@extends('layouts.main')
@section('container')

<button type="submit" class="btn btn-primary" id="pay-button" > Lanjut Bayar </button>

<form method="POST" action="" id="submit_book">
    @csrf
    <input type="hidden" name="json" id="json_callback">
</form>

<script>
    var payButton = document.getElementById('pay-button');
     payButton.addEventListener('click', function () {
       // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
       window.snap.pay('{{ $snapToken }}', {
         onSuccess: function(result){
           /* You may add your own implementation here */
           alert("payment success!"); console.log(result);
           send_response(result)
         },
         onPending: function(result){
           /* You may add your own implementation here */
           alert("wating your payment!"); console.log(result);
           send_response(result)
         },
         onError: function(result){
           /* You may add your own implementation here */
           alert("payment failed!"); console.log(result);
           send_response(result)
         },
         onClose: function(){
           /* You may add your own implementation here */
           alert('you closed the popup without finishing the payment');
           send_response(result)
         }
       })
     });

    function send_response(result){
    document.getElementById('json_callback').value = JSON.stringify(result);
    $('#submit_book').submit();
    }

</script>

<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-J2rfx6Vxst6_Ivc_"></script>

@endsection