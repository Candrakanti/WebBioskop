@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container">
        <div class=" text-end">
            <a href="/kota" class="btn btn-danger">Back</a>
        </div>
    </div>

    <form method="post" action="/kota">
        @csrf

        <div class="mb-3">
            <label for="id_bioskop" class="form-label">Id Bioskop</label>
            <input type="text" class="form-control @error('id_bioskop') is-invalid @enderror" name="id_bioskop" autofocus
                required value="{{ old('id_bioskop') }}">
            @error('id_bioskop')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        </div>
        <div>

            {{-- <div class="mb-3">
                <label for="detail_kota" class="form-label">detail_kota</label>
                <input type="text" class="form-control @error('detail_kota') is-invalid @enderror" name="detail_kota[]"
                    autofocus required value="{{ old('detail_kota') }}">
                @error('detail_kota')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
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
                <button type="submit" class="btn btn-success">Save</button>
            </div>
    </form>
@endsection
