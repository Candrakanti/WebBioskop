@extends('layouts.main')

@section('container')
    @foreach ($data as $dt)
        <h1> {{ $d->judul_film }}</h1>
    @endforeach
@endsection
