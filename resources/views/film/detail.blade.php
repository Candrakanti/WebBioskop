@extends('film.template.main')


@section('content')

<br><br><br><br>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header" style="background-color: #2EB7EA">
                <div class="row">
                    <div class="col-2">
                        <img src="https://cdn.antaranews.com/cache/800x533/2016/12/20161221Logo-kotaBandung-001.jpg" alt="" style="width:125px; height:120px">
                    </div>
                    <div class="col-8 text-center"><br><br>
                        <h3 style="font-family:'Times' ;">KARTU INDONESIA MAJU</h3>
                    </div>
                    <div class="col-2">
                        <img src="https://www.smkn11bdg.sch.id/src/images/11.png"  alt="" style="width:100px; height:120px;">
                    </div>
                </div>
            </div>
            <div class="card-body">
                @foreach ($kartumaju as $item)
                <table class="table">
                    <tr>
                        <td>NOMOR KARTU</td>
                        <td>:</td>
                        <td>{{$item->nomor_kartu}}</td>
                    </tr>
                    <tr>
                        <td>NAMA </td>
                        <td>:</td>
                        <td>{{$item->nama}}</td>
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td>:</td>
                        <td>{{$item->alamat}}</td>
                    </tr>
                    <tr>
                        <td>LAHIR</td>
                        <td>:</td>
                        <td>{{$item->lahir}}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{$item->nik}}</td>
                    </tr>
                    <tr>
                        <td>FASILITAS</td>
                        <td>:</td>
                        <td>{{$item->fasilitas}}</td>
                    </tr>
                </table>
                @endforeach
                <br>
                <div class="d-flex justify-content-center">
                <a href="{{route('kartu.home')}}" class="btn"  style="background-color: rgb(115, 81, 148); color:white;">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
{{ $kartumaju->links()}}
<br>
</div>
<br><br>
@endsection