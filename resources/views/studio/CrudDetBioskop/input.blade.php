@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container">
        <div class=" text-end">
            <a href="/detbioskop" class="btn btn-danger">Back</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="col-lg-8 col-md-8">

            <form method="post" action="/detbioskop">
                @csrf

                <div class="mb-3">
                    <label for="id_db" class="form-label">Id Detail Bioskop</label>
                    <input type="text" class="form-control @error('id_db') is-invalid @enderror"
                        name="id_db" required value="{{ old('id_db') }}">
                    @error('id_db')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                  <div class="mb-3">
                    <label for="id_bioskop" class="form-label">Id bioskop</label>
                    <select class="form-select form-select-lg mb-3" name="id_bioskop">

                        @foreach ($bioskop as $js)
                            <option value="{{ $js->id_bioskop }}" selected>{{ $js->nama_bioskop }}</option>
                        @endforeach
                    </select>
                </div>

                  <div class="mb-3">
                    <label for="id_jadwal" class="form-label">Id jadwal</label>
                    <select class="form-select form-select-lg mb-3" name="id_jadwal">

                        @foreach ($jadwal as $js)
                            <option value="{{ $js->id_jadwal }}" selected>{{ $js->id_jadwal }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
</form>

</div>
</div>
                @endsection