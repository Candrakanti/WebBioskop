@extends('layouts.main')

@section('container')
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
        @foreach ($dt->jam_tayang1 as $dt)
            <a class="btn btn-info" href="">{{ $dt(['value']) }}</a>
        @endforeach


        <hr class="border border-secondary border-2 opacity-50">
    @endforeach
@endsection
