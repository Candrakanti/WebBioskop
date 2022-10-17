@extends('layouts.main')

@section('container')
    <div class="container pb-5" id="tanggal">
        hi
    </div>
    @foreach ($data as $dt)
        <div class="row">



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

            <div class="col-5">
                <h5> {{ $dt->judul_film }}</h5>


                <div class="row">
                    <div class="col-12">
                        <p class="fw-light"> Studio {{ $dt->jenis_studio }}</p>
                    </div>
                </div>

            </div>


            <div class="col-7 text-end">

                Audiotori {{ $dt->audiotori }}
            </div>
        </div>

        @foreach ($dt->jam_tayang as $property)
            <a href="{{ route('ticket.show', $dt->id_jadwal) }}" class="btn btn-dark"
                style="color: white">{{ $property['value'] }}</a>
        @endforeach




        <hr class="border border-secondary border-2 opacity-50">
    @endforeach
    
@endsection
