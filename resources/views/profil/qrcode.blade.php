@extends('layouts.main')

@section('container')

<h6 class="text-danger text-center">Scan QR CODE saat memasuki studio</h6>
<div class="container">
    <div class="row mt-5 text-center" >
  
        {{-- {!! QrCode::generate($data2); !!} --}}
    
        {{ $qrcode }}
    </div>
</div>

@endsection