@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/history" class="btn btn-danger">Back</a>
      </div>
  </div>

  <div class="container">

    <form method="POST" action="{{ route('history.edit', $data->id_jadwal) }}" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_jadwal">Id Jadwal</label>
            <input type="text" readonly name="id_jadwal" id="id_jadwal" class="form-control" value="{{$data->id_jadwal }}" required="">
        </div>
        <div class="form-group">
            <label for="id_studio">Id Studio</label>
            <input type="text" readonly name="id_studio" id="id_studio" class="form-control" value="{{$data->id_studio }}" required="">
        </div>
        <div class="form-group">
            <label for="id_film">Id Film</label>
            <input type="text" readonly name="id_film" id="id_film" class="form-control" value="{{$data->id_film }}" required="">
        </div>

        <div class="form-group">
            <label for="tgl_tayang_awal">Tanggal Tayang Awal</label>
            <input type="date" readonly name="tgl_tayang_awal" id="tgl_tayang_awal" class="form-control" value="{{$data->tgl_tayang_awal }}" required="">
        </div>
        <div class="form-group">
            <label for="tgl_tayang_akhir">Tanggal Tayang Akhir</label>
            <input type="date" name="tgl_tayang_akhir" id="tgl_tayang_akhir" class="form-control" value="{{$data->tgl_tayang_akhir }}" required="">
        </div>

        <button class="btn btn-success mt-5" type="submit">Save</button>
      </form>
  </div>


@endsection