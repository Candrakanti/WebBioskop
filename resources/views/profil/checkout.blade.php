@extends('layouts.main')

@section('container')
   




<table class="table">
    <thead>
      <tr>
        <th scope="col">id Payment</th>
        <th scope="col">id_customer</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    
   <tbody>
     @foreach($booking as $d)
   
   <tr>
     <th scope="row">1</th>
     <td>{{ $d->id_payment }}</td>
     <td>Otto</td>
     <td>@mdo</td>
   </tr>
</tbody>

</table>


<form method="POST" action="{{ route('checkout.update', $d->id_payment) }}">
@csrf
@method('PUT')

<input type="hidden" name="status_bayar" value="1">
<input type="text" name="id_payment" value="{{ $d->id_payment }}">
<input type="text" name="id_booking" value="{{ $d->id_booking}}">
<input type="text" name="payment_type" value="{{ $d->payment_type}}">
<input type="text" name="tenggat_bayar" value="done">

@if($d->tenggat_bayar == 'done')
<button class="btn btn-info" type="submit" disabled > Telah Dibayar </button>
@else
<button class="btn btn-info" type="submit" > Bayar Sekarang </button>
@endif
</form>   
@endforeach


  <script>
   
</script>

@endsection
