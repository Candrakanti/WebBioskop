@extends('payment.templateDashboard.sidebar')

@section('container')

    <h1 class="fs-1" style="margin-top:5%; margin-left:20%">
     <b>SELAMAT DATANG </b> <br>
   <h2 class="fw-light" style="margin-left: 40%; text-transform: uppercase"> ADMIN PAYMENT &nbsp;{{ auth()->user()->name }}</h2>
</h1>
   
     <div class="container d-flex justify-content-center" style="">
         <hr class="border border-dark border-2 opacity-50 d-flex justify-content-center" width="50%">
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

@endsection