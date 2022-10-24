@extends('layouts.main')

@section('container')
    <form method="POST" action="{{ route('movie.detkota', $data->id_kota) }}">
        @csrf


        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                kota
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item"
                        href="#">{{ str_replace([':', '[', ']', '{', '}', 'key', '"', '"', 'value'], ' ', $data->detail_kota) }}</a>
                </li>
            </ul>
        </div>

        <div class="col-md-4">
            @if ($data->image)
                <div style="max-height: 500px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid mt-3">
                </div>
            @endif
        </div>


    </form>
@endsection
