@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container">
        <div class=" text-end">
            <a href="/crudDetjam" class="btn btn-danger">Back</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="col-lg-8 col-md-8">

            <form method="post" action="/crudDetjam">
                @csrf

                <div class="mb-3">
                    <label for="id_bioskop" class="form-label">Id Bioskop</label>
                    {{-- <input type="tect" class="form-control" name="id_jadwal" autofocus> --}}
                    <select class="form-select form-select-lg mb-3" name="id_bioskop">

                        @foreach ($bioskop as $std)
                            <option value="{{ $std->id_bioskop }}" selected>{{ $std->id_bioskop }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_jadwal" class="form-label">Id Jadwal</label>
                    {{-- <input type="tect" class="form-control" name="id_jadwal" autofocus> --}}
                    <select class="form-select form-select-lg mb-3" name="id_jadwal">

                        @foreach ($_detail_bioskop as $std)
                            <option value="{{ $std->id_jadwal }}" selected>{{ $std->id_jadwal }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jam_tayang" class="form-label">Jam Tayang</label>
                    <input type="time" class="form-control @error('jam_tayang') is-invalid @enderror" name="jam_tayang"
                        autofocus required value="{{ old('jam_tayang') }}">
                    @error('jam_tayang')
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
