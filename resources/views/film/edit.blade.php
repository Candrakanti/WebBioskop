@extends('film.layout.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/crudFilm" class="btn btn-danger">Back</a>
      </div>
  </div>

  <div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">

        <form method="POST" action="{{ route('crudFilm.update', $film->id_film) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="{{ $film->image }}">
                @if ($film->image)
                  <img src="{{ asset('storage/' . $film->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">   
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

            <div class="form-group">
                <label for="id_film">Id Film</label>
                <input type="text" name="id_film" id="id_film" class="form-control"  value="{{$film->id_film }}">
            </div>

            <div class="form-group">
                <label for="judul_film">Judul Film</label>
                <input type="text" name="judul_film" id="judul_film" class="form-control" value="{{$film->judul_film }}" required="">
            </div>

            <div class="form-group">
                <label for="jenis_film">Jenis Film</label>
                <input type="text" name="jenis_film" id="jenis_film" class="form-control" value="{{$film->jenis_film }}" required="">
            </div>

            <div class="form-group">
                <label for="produser">Producer</label>
                <input type="text" name="producer" id="produser" class="form-control" value="{{$film->producer }}" required="">
            </div>

            <div class="form-group">
                <label for="sutradara">Sutradara</label>
                <input type="text" name="sutradara" id="sutradara" class="form-control" value="{{$film->sutradara }}" required="">
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="{{$film->penulis }}" required="">
            </div>

            <div class="form-group">
                <label for="cast">Cast</label>
                <input type="text" name="cast" id="cast" class="form-control" value="{{$film->cast }}" required="">
            </div>

            <div class="form-group">
                <label for="link_trailer">Link Trailer</label>
                <input type="text" name="link_trailer" id="link_trailer" class="form-control" value="{{$film->link_trailer }}" required="">
            </div>

            {{-- <div class="row mb-3">
                <label class="col-md-4 col-form-label text-md-start">Sinopsis :</label>
                <div class="col-md-6">
                    <span id="sinopsis"> {!! $film->sinopsis  !!}</span></p>
                </div>
            </div> --}}

            <div class="form-group">
                <label for="sinopsis" class="form-label">Sinopsis</label>
                @error('sinopsis')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="sinopsis" type="hidden" name="sinopsis" value="{{ old('sinopsis', $film->sinopsis) }}">
                <trix-editor input="sinopsis"></trix-editor>
              </div>
           
       
            <button class="btn btn-info" type="submit">Save</button>
        </form>
        </div>
    </div>

    <script>
        
        function previewImage() {
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}
    </script>

@endsection