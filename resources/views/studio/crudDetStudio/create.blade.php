@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container">
        <div class=" text-end">
            <a href="/crudDetStudio" class="btn btn-danger">Back</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="col-lg-8 col-md-8">

            <form method="post" action="/crudDetStudio">
                @csrf


                <div class="mb-3">
                    <label for="id_jenis_studio" class="form-label">Id Jenis Studio</label>
                    <input type="text" class="form-control @error('id_jenis_studio') is-invalid @enderror"
                        name="id_jenis_studio" required value="{{ old('id_jenis_studio') }}">
                    @error('id_jenis_studio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jenis_studio" class="form-label">Jenis Studio</label>
                    <input type="text" class="form-control @error('jenis_studio') is-invalid @enderror"
                        name="jenis_studio" required value="{{ old('jenis_studio') }}">
                    @error('jenis_studio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror"
                        name="harga" required value="{{ old('harga') }}">
                    @error('harga')
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
