@extends('layouts.main')

@section('container')
    {{-- <div class="container pb-5" id="tanggal">
        hi
    </div> --}}
    @foreach ($data as $dt)
        <div class="row">

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

        <form action="add.to.cart" method="POST">
            @csrf
            @foreach ($dt->jam_tayang as $property)
                {{-- <input type="text" name="jam_tayang" value="{{ $property['value'] }}" class="form-control"> --}}
                <button class="btn btn-dark" style="color: white">{{ $property['value'] }}</button>
            @endforeach
        </form>

        <hr class="border border-secondary border-2 opacity-50">
    @endforeach
@endsection
