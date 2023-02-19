@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/crudBioskop" class="btn btn-danger">Back</a>
      </div>
  </div>

  <div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">

        <form method="POST" action="{{ route('crudBioskop.update', $data->id_bioskop) }}" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_jadwal">Id Bioskop</label>
                <input type="text" disabled name="id_bioskop" id="id_bioskop" class="form-control" value="{{$data->id_bioskop }}" required="">
            </div>

            <div class="form-group">
                <label for="nama_bioskop">Nama Bioskop</label>
                <input type="text" name="nama_bioskop" id="nama_bioskop" class="form-control" value="{{$data->nama_bioskop }}" required="">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{$data->alamat }}" required="">
            </div>

       
            <button class="btn btn-success mt-5" type="submit">Save</button>
        </form>
        </div>
    </div>

@endsection