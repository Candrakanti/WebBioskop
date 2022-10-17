@extends('layouts.main')

@section('container')



@foreach($Film as $key => $data ) 
<div class="container">
   
    <div class="row">
     
     
        <div class="col-6">
       
         <b>
            <p>{{$data->judul_film}} </p>
          
        </b>
      
            <p>
            {{$data->id_studio}}</p>
            
        </div>

        <div class="col-6">
            <b><p style="margin-left: 80%;">Audio 3</p></b>
        </div>
      
    </div> 
  
    <a href="" class="btn btn-secondary"></a> 

    <hr class="border border-secondary border-2 opacity-50">
</div>
@endforeach



@endsection
