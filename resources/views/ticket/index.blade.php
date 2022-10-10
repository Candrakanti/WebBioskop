@extends('layouts.main')

@section('container')



@foreach($data as $key => $film ) 
<div class="container">
   
    <div class="row">
        <h1>{{$key++}}</h1> 
     
        <div class="col-6">
            
         <b><p>{{$film->judul_film}} </p></b>
            <p>REGULER 2D</p>
           
        </div>

        <div class="col-6">
            <b><p style="margin-left: 80%;">Audio 3</p></b>
        </div>
     
    </div> 
  
    <a href="" class="btn btn-secondary"></a> 
</div>

@endforeach
<div class="container mb-1" style="background-color: black">
            <hr class="border border-2 ">
 </div>


@endsection
