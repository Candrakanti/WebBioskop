@extends('studio.templateDashboard.sidebar')

@section('container')

<h1>hoo</h1>

    <h1 class="fs-1" style="margin-top:5%; margin-left:20%">
     <b>SELAMAT DATANG </b> <br>
   <h2 class="fw-light" style="margin-left: 40%; text-transform: uppercase"> ADMIN PAYMENT &nbsp;{{ auth()->user()->name }}</h2>
</h1>


   
     <div class="container d-flex justify-content-center" style="">
         <hr class="border border-dark border-2 opacity-50 d-flex justify-content-center" width="50%">
     </div>




   
@endsection