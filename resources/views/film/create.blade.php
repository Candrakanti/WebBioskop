@extends('film.layout.sidebar')

@section('container')

<div class="col-lg-8">
    <form method="post" action="/crudFilm" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="id_film" class="form-label">Id Film</label>
          <input type="text" class="form-control @error('id_film') is-invalid @enderror" id="id_film" 
          name="id_film" required autofocus value="{{ old('id_film') }}">
          @error('id_film')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="judul_film" class="form-label">Judul Film</label>
          <input type="text" class="form-control @error('judul_film') is-invalid @enderror" id="judul_film" 
          name="judul_film" required autofocus value="{{ old('judul_film') }}">
          @error('judul_film')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

          <div class="mb-3">
            <label for="jenis_film" class="form-label">Jenis Film</label>
              <select id="jenis_film" class="form-select @error('jenis_film') is-invalid @enderror" name="jenis_film" required autocomplete="current-jenis_film">
                <option>Horor</option>
                <option>Romance</option>
                <option>Action</option>
                <option>Thriller</option>
                <option>Comedy</option>
                <option>Fantasy</option>
              </select>
              @error('jenis_film')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
          </div>


        {{-- <div class="mb-3">
          <label for="jenis_film" class="form-label">Jenis Film</label>
          <input type="text" class="form-control @error('jenis_film') is-invalid @enderror" id="jenis_film" 
          name="jenis_film" required autofocus value="{{ old('jenis_film') }}">
          @error('jenis_film')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div> --}}

        <div class="mb-3">
          <label for="producer" class="form-label">Producer</label>
          <input type="text" class="form-control @error('producer') is-invalid @enderror" id="producer" 
          name="producer" required autofocus value="{{ old('producer') }}">
          @error('producer')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="sutradara" class="form-label">Sutradara</label>
          <input type="text" class="form-control @error('sutradara') is-invalid @enderror" id="sutradara" 
          name="sutradara" required autofocus value="{{ old('sutradara') }}">
          @error('sutradara')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="penulis" class="form-label">Penulis</label>
          <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" 
          name="penulis" required autofocus value="{{ old('penulis') }}">
          @error('penulis')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="cast" class="form-label">Cast</label>
          <input type="text" class="form-control @error('cast') is-invalid @enderror" id="cast" 
          name="cast" required autofocus value="{{ old('cast') }}">
          @error('cast')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="link_trailer" class="form-label">Link Film</label>
          <input type="text" class="form-control @error('link_trailer') is-invalid @enderror" id="link_trailer" 
          name="link_trailer" required autofocus value="{{ old('link_trailer') }}">
          @error('link_trailer')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

       
       
          {{-- <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
              @foreach ($categories as $category)
              @if(old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif  
              @endforeach
            </select>
          </div> --}}

          <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            @error('sinopsis')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="sinopsis" type="hidden" name="sinopsis" value="{{ old('sinopsis') }}">
            <trix-editor input="sinopsis"></trix-editor>
          </div>

          <div class="form-group mt-5">
            <button type="submit" class="btn btn-info">Input Film</button>
            <a href="{{ url('/crudFilm') }}" class="btn btn-danger">
            Cancel</a>
        </div>

        {{-- <button type="submit" class="btn btn-info">Input Film</button>
        <button type="submit" class="btn btn-danger">Back</button> --}}
      </form>
</div>

<script>
  
  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })

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