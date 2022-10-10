@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/crudJadwal" class="btn btn-danger">Back</a>
      </div>
  </div>

  <div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">

        <form method="POST" action="{{ route('crudJadwal.update', $jadwal->id_jadwal) }}" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_jadwal">Id Jadwal</label>
                <input type="text" name="id_jadwal" id="id_jadwal" class="form-control" value="{{$jadwal->id_jadwal }}" required="">
            </div>
            <div class="form-group">
                <label for="id_studio">Id Studio</label>
                {{-- <input type="text" name="id_studio" id="id_studio" class="form-control" value="{{$data->id_studio }}" required=""> --}}
                <select class="form-select form-select-lg mb-3" name="id_studio">
              
                    @foreach ($studio as $data)
                
                    <option value="{{$data->id_studio}}" selected>{{$data->id_studio}}</option>
                    @endforeach
                  </select>
            </div>

            <div class="form-group">
                <label for="id_film">Id film</label>
                <select class="form-select form-select-lg mb-3" name="id_film">
              
                    @foreach ($film as $data)
                
                    <option value="{{$data->id_film}}" selected>{{$data->id_film}}</option>
                    @endforeach
                  </select>
            </div>
           
            <div class="form-group">
                <label for="tgl_tayang_awal">Tanggal Tayang Awal</label>
                <input type="date" name="tgl_tayang_awal" id="tgl_tayang_awal" class="form-control" value="{{$jadwal->tgl_tayang_awal }}" required="">
            </div>

            <div class="form-group">
                <label for="tgl_tayang_akhir">Tanggal Tayang akhir</label>
                <input type="date" name="tgl_tayang_akhir" id="tgl_tayang_akhir" class="form-control" value="{{$jadwal->tgl_tayang_akhir }}" required="">
            </div>

            <div class="form-group">
                <label for="jam_tayang">Jam Tayang</label>
                <input type="time" name="jam_tayang" id="jam_tayang" class="form-control" value="{{$jadwal->jam_tayang }}" required="">
            </div>
           
       
            <button class="btn btn-success mt-5" type="submit">Save</button>
        </form>
        </div>
    </div>

@endsection