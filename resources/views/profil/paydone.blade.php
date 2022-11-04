@extends('layouts.main')

@section('container')
    @foreach ($listproducts as $item)
        <h1>{{ $item->judul_film }}</h1>
        <p>Hi</p>
    @endforeach
@endsection
