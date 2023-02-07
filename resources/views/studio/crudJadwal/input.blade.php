@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container">
        <div class=" text-end">
            <a href="/crudJadwal" class="btn btn-danger">Back</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="col-lg-8 col-md-8">

            <form method="post" action="/crudJadwal">
                @csrf

                <div class="mb-3">
                    <label for="id_jadwal" class="form-label">Id Jadwal</label>
                    <input type="text" class="form-control @error('id_jadwal') is-invalid @enderror" name="id_jadwal"
                        autofocus required value="{{ old('id_jadwal') }}">
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
                            <option value="{{ $std->id_studio }}" selected>{{ $std->id_studio }}</option>
                        @endforeach
                    </select>

                </div>
                {{-- <div class="mb-3">
                    <label for="id_film" class="form-label">Id Film</label>
                    <select class="form-select form-select-lg mb-3" name="id_film">

                        @foreach ($data1 as $js)
                            <option value="{{ $js->id_film }}" selected>{{ $js->judul_film }}</option>
                        @endforeach
                    </select>
                </div> --}}

                <div class="mb-3">
                    <label for="id_film" class="form-label">Id Film</label>
                    <input class="form-control" list="judul_film" id="id_film" name="id_film" placeholder="Type to search...">
                        <datalist id="judul_film">
                        @foreach ($data1 as $js)
                            <option value="{{ $js->id_film }}" selected>{{ $js->judul_film }}</option>
                        @endforeach
                        </datalist>
                </div>
            
                    <div class="mb-3">
                        <label for="tgl_tayang_awal" class="form-label">Tanggal Tayang Awal</label>
                        <input type="date" class="form-control @error('tgl_tayang_awal') is-invalid @enderror"
                            name="tgl_tayang_awal" required value="{{ old('tgl_tayang_awal') }}">
                        @error('tgl_tayang_awal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tgl_tayang_akhir" class="form-label">Tanggal Tayang Akhir</label>
                        <input type="date" class="form-control @error('tgl_tayang_akhir') is-invalid @enderror"
                            name="tgl_tayang_akhir" required value="{{ old('tgl_tayang_akhir') }}">
                        @error('tgl_tayang_akhir')
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
