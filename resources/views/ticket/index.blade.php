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

        @foreach ($dt->jam_tayang as $property)
            <a href="{{ route('ticket.show', $dt->id_jadwal) }}" class="btn btn-dark"
                style="color: white">{{ $property['value'] }}</a>
        @endforeach




        <hr class="border border-secondary border-2 opacity-50">
    @endforeach
@endsection
