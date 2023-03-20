@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/crudDetjam" class="btn btn-danger">Back</a>
      </div>
  </div>


  <div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">

        <form method="POST" action="{{ route('crudDetjam.update', $data->id_det_jam) }}" >
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="id_det_jam">Id Detail Jam</label>
                <input type="text"  name="id_det_jam" id="id_det_jam" class="form-control" value="{{$data->id_det_jam }}" required="" readonly="readonly">
            </div>


            <div class="form-group">
               
                <label for="id_db">Id Detail Bioskop</label>
                <select name="id_db">
                    @foreach ($_detail_bioskop as $b)
                    <option value="{{ $b->id_db }}" @if ($data->id_db === $b->id_db || old('id_db') === $b->id_db) selected @endif>{{ $b->id_db }}</option>
                @endforeach
                </select>

            </div>

            <div class="form-group">

              
                <label for="id_jadwal">Id Jadwal</label>
                <select name="id_jadwal">
                    @foreach ($_detail_jam as $b)
                    <option value="{{ $b->id_jadwal }}" @if ($data->id_jadwal === $b->id_jadwal || old('id_jadwal') === $b->id_jadwal) selected @endif>{{ $b->id_jadwal }}</option>
                @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="jam_tayang">Jam Tayang</label>
                <input type="time" name="jam_tayang" id="jam_tayang" class="form-control" value="{{$data->jam_tayang }}" required="">
            </div>
           

            <button class="btn btn-success mt-5" type="submit">Save</button>
        </form>

  @endsection