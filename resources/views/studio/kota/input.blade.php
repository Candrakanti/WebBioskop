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
            <label for="id_kota" class="form-label">Id Kota</label>
            <input type="text" class="form-control @error('id_kota') is-invalid @enderror" name="id_kota" autofocus
                required value="{{ old('id_kota') }}">
            @error('id_kota')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="detail_kota">detail_kota</label>
            <div class="row">
                <div class="col-md-2">
                    Key:
                </div>
                <div class="col-md-4">
                    Value:
                </div>
            </div>
            @for ($i = 0; $i <= 1; $i++)
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="detail_kota[{{ $i }}][key]" class="form-control"
                            value="{{ old('detail_kota[' . $i . '][key]') }}">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="detail_kota[{{ $i }}][value]" class="form-control"
                            value="{{ old('detail_kota[' . $i . '][value]') }}">
                    </div>
                </div>
            @endfor
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
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" autofocus
                    required value="{{ old('kota') }}">
                @error('kota')
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