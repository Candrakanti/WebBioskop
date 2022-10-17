@extends('layouts.main')

@section('container')

<form method="POST" action="{{ route('movie.detbooking', $data->id_film) }}">
    @csrf

    <div class="row">

        <div class="col-5">
            <h5>{!! $data->judul_film !!}</h5>


            <div class="row">
                <div class="col-12">
                    <p class="fw-light"> Studio {!! $data->jenis_studio !!}</p>
                </div>
            </div>

        </div>


        <div class="col-7 text-end">

            Audiotori {!! $data->audiotori !!}
        </div>
    </div>

    {{-- <a>{{ $data['value']->['jam_tayang'] }}</a> --}}
    @foreach ($data as $property)
    <p>{!! $property->jam_tayang !!}</p>
        {{-- <a href="{{ route('ticket.show', $data->id_jadwal) }}" class="btn btn-dark"
            style="color: white">{{ $property['value'] }}</a> --}}
    @endforeach




    <hr class="border border-secondary border-2 opacity-50">

</form>
    
@endsection