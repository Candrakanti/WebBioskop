@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
  <div class=" text-end">
    <a href="/CrudStudio" class="btn btn-danger">Back</a>
    </div>
</div>
<div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">
        
        <form method="post" action="/CrudStudio" >
            @csrf
        
             <div class="mb-3">
                <label for="id_studio" class="form-label">Id Studio</label>
                <input type="text" class="form-control @error('id_studio') is-invalid @enderror" name="id_studio" autofocus required value="{{ old('id_studio') }}">
                @error('id_studio')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="id_jenis_studio" class="form-label"> Jenis Studio</label>
                {{-- <input type="tect" class="form-control" name="id_studio" autofocus> --}}
                <select class="form-select form-select-lg mb-3" name="id_jenis_studio">

                    @foreach ($jenis_studio as $js)
                    @if(old('id_jenis_studio') == $js->id_jenis_studio)
                    <option value="{{$js->id_jenis_studio}}" selected>{{$js->jenis_studio}}</option>
                    @else
                    <option value="{{$js->id_jenis_studio}}">{{$js->jenis_studio}}</option>
                    @endif
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