@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container">
        <div class=" text-end">
            <a href="/crudBioskop" class="btn btn-danger">Back</a>
        </div>
    </div>

    <form method="post" action="/crudBioskop">
        @csrf

        <div class="mb-3">
            <label for="id_bioskop" class="form-label">Id bioskop</label>
            <input type="text" class="form-control @error('id_bioskop') is-invalid @enderror" name="id_bioskop" autofocus
                required value="{{ old('id_bioskop') }}">
            @error('id_bioskop')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
         
            <div class="mb-3">
                <label for="nama_bioskop" class="form-label">Nama Bioskop</label>
                <input type="text" class="form-control @error('nama_bioskop') is-invalid @enderror" name="nama_bioskop" autofocus
                    required value="{{ old('nama_bioskop') }}">
                @error('nama_bioskop')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" autofocus
                    required value="{{ old('alamat') }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
    </form>
@endsection