@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
  <div class=" text-end">
    <a href="/CrudJadwal" class="btn btn-danger">Back</a>
    </div>
</div>
<div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">
        
        <form method="post" action="/CrudJadwal" >
            @csrf
        
             <div class="mb-3">
                <label for="id_jadwal" class="form-label">Id Jadwal</label>
                <input type="text" class="form-control @error('id_jadwal') is-invalid @enderror" name="id_jadwal" autofocus required value="{{ old('id_jadwal') }}">
                @error('id_studio')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="id_studio" class="form-label">Id Studio</label>
                {{-- <input type="tect" class="form-control" name="id_jadwal" autofocus> --}}
                <select class="form-select form-select-lg mb-3" name="id_studio">

                    @foreach ($data as $js)
                
                    <option value="{{$js->id_studio}}" selected>{{$js->id_studio}}</option>
                    @endforeach
                  </select>

              </div>
             

              <div class="mb-3">
                <label for="audiotori" class="form-label @error('audiotori') is-invalid @enderror">Audiotori</label>
                <input type="text" class="form-control" name="audiotori" required value="{{ old('audiotori') }}">
                @error('audiotori')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="jumlah_kursi" class="form-label @error('jumlah_kursi') is-invalid @enderror">jumlah kursi</label>
                <input type="number" class="form-control" name="jumlah_kursi" required value="{{ old('jumlah_kursi') }}">
                @error('jumlah_kursi')
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