@extends('layouts.main')

@section('container')
    @foreach ($listproducts as $item)
        <h1>{{ $item->judul_film }}</h1>
    @endforeach
@endsection
