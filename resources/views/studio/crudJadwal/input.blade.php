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
                <label for="id_studio" class="form-label">Id Studio</label>
                {{-- <input type="tect" class="form-control" name="id_jadwal" autofocus> --}}
                <select class="form-select form-select-lg mb-3" name="id_studio">
              
                  @foreach ($data as $std)
              
                  <option value="{{$std->id_studio}}" selected>{{$std->id_studio}}</option>
                  @endforeach
                </select>
              
              </div>
              <div class="mb-3">
                <label for="id_film" class="form-label">Id Film</label>
                {{-- <input type="tect" class="form-control" name="id_jadwal" autofocus> --}}
                <select class="form-select form-select-lg mb-3" name="id_film">
              
                  @foreach ($data1 as $js)
              
                  <option value="{{$js->id_film}}" selected>{{$js->judul_film}}</option>
                  @endforeach
                </select>
              
              </div>
            

              <div class="mb-3">
                <label for="tgl_tayang_awal" class="form-label">Tanggal Tayang Awal</label>
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
                <label for="jam_tayang1" class="form-label">Jam Tayang1</label>
              {{-- <input type="checkbox" name="jam_tayang1[]" value="13.00">13.00 --}}
                <input type="text" class="form-control @error('jam_tayang1') is-invalid @enderror" name="jam_tayang1" autofocus required value="{{ old('jam_tayang1') }}">
                @error('jam_tayang1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              {{-- <div class="form-group">
                <label for="jam_tayang1">jam_tayang1</label>
                <div class="row">
                    <div class="col-md-2">
                        Key:
                    </div>
                    <div class="col-md-4">
                        Value:
                    </div>
                </div>
                @for ($i=0; $i <= 1; $i++)
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="jam_tayang1[{{ $i }}][key]" class="form-control" value="{{ old('jam_tayang1['.$i.'][key]') }}">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="jam_tayang1[{{ $i }}][value]" class="form-control" value="{{ old('jam_tayang1['.$i.'][value]') }}">
                    </div>
                </div>
                @endfor
            </div>
            <div> --}}
            
              <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
                </div>
        </form>
       
      
    </div>
</div>

@endsection