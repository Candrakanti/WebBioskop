@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/crudDetStudio" class="btn btn-danger">Back</a>
      </div>
  </div>


  <div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">

        <form method="POST" action="{{ route('crudDetStudio.update', $data->id_jenis_studio) }}" >
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="id_jenis_studio">Id Jenis Studio</label>
                <input type="text"  name="id_jenis_studio" id="id_jenis_studio" class="form-control" value="{{$data->id_jenis_studio }}" required="" readonly="readonly">
            </div>

            <div class="form-group">
                <label for="jenis_studio">Jenis Studio</label>
                <input type="text"  name="jenis_studio" id="jenis_studio" class="form-control" value="{{$data->jenis_studio }}" required="" >
            </div>

            <div class="form-group">
                <label for="harga">Id Jenis Studio</label>
                <input type="text"  name="harga" id="harga" class="form-control" value="{{$data->harga }}" required="" >
            </div>
           

            <button class="btn btn-success mt-5" type="submit">Save</button>
        </form>

  @endsection