@extends('layouts.main')

@section('container')
{{-- 
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

  </table> --}}


  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      @foreach($booking as $d)
    
      <div class="col-md-4">
        <img src="{{ asset('storage/' . $d->image) }}"  class="img-fluid rounded-start" >
      </div>
      <div class="col-md-8">
        <div class="card-body">
         <p class="fw-semibold">Pemesanan Tiket Bioskop Seenema</p> 

         <div class="row">
          <div class="col-6">
           
              <h6  class="card-title">Nama Film : </h6> 
          </div>
          <div class="col-4">
          <p>{{ $d->judul_film }}</p>
          </div>
        </div>

        <div class="row">
          <div class="col-7">
           
              <h6  class="card-title">Nama Pembeli : </h6> 
          </div>
          <div class="col-5 ">
          <p>{{ $d->name }}</p>
          </div>
        </div>

          <div class="row">
            <div class="col-6">
                <h6  class="card-title">Total Bayar : </h6> 
            </div>
            <div class="col-4">
            <p>Rp. {{ $d->harga }}</p>
            </div>
          </div>
       
          {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
      </div>
     
    </div>
  </div>


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
@endif

@if($d->tenggat_bayar == '')
<button class="btn btn-info" type="submit" > Bayar Sekarang </button>

@if($d->tenggat_bayar == "expired")
 <button class="btn btn-danger"> HAbis</button>
 @endif
</form>   
@endforeach


  <script>
   
</script>

@endsection
