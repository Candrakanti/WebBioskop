@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
  <div class=" text-end">
    <a href="/crudJadwal" class="btn btn-danger">Back</a>
    </div>
</div>
<div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">
        
        <form method="post" action="/crudJadwal" >
            @csrf
        
             <div class="mb-3">
                <label for="id_jadwal" class="form-label">Id Jadwal</label>
                <input type="text" class="form-control @error('id_jadwal') is-invalid @enderror" name="id_jadwal" autofocus required value="{{ old('id_jadwal') }}">
                @error('id_jadwal')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

            

              <div class="mb-3">
                <label for="tgl_tayang_awal" class="form-label">Tanggal Tayang Akhir</label>
                <input type="date" class="form-control @error('tgl_tayang_awal') is-invalid @enderror" name="tgl_tayang_awal" autofocus required value="{{ old('tgl_tayang_awal') }}">
                @error('tgl_tayang_awal')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="tgl_tayang_akhir" class="form-label">Tanggal Tayang Akhir</label>
                <input type="date" class="form-control @error('tgl_tayang_akhir') is-invalid @enderror" name="tgl_tayang_akhir" autofocus required value="{{ old('tgl_tayang_akhir') }}">
                @error('tgl_tayang_akhir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="jam_tayang" class="form-label">Jam Tayang</label>
                <input type="time" class="form-control @error('jam_tayang') is-invalid @enderror" name="jam_tayang" autofocus required value="{{ old('jam_tayang') }}">
                @error('jam_tayang')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

             

              <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
                </div>
        </form>
       
      
    </div>
</div>

@endsection