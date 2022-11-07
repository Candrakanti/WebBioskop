@extends('layouts.main')

@section('container')
    <form method="POST" action="{{ route('ticket.show', $data->id_jadwal) }}">
        @csrf
        <h1>{{ $data->judul_film }}</h1>

        @foreach ($data->jam_tayang as $property)
        
            <p>Kamu Klik jam tayang Ke {{ $property['value'] }} : {{ $property['key'] }}</p>
            {{-- <b>{{ $property['key'] }}</b>: {{ $property['value'] }}<br /> --}}
        @endforeach

    </form>
@endsection
