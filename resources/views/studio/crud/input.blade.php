@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container">
        <div class=" text-end">
            <a href="/CrudStudio" class="btn btn-danger">Back</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="col-lg-8 col-md-8">

            <form method="post" action="/CrudStudio">
                @csrf

                <div class="mb-3">
                    <label for="id_studio" class="form-label">Id Studio</label>
                    <input type="text" class="form-control @error('id_studio') is-invalid @enderror" name="id_studio"
                        autofocus required value="{{ old('id_studio') }}">
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
                            @if (old('id_jenis_studio') == $js->id_jenis_studio)
                                <option value="{{ $js->id_jenis_studio }}" selected>{{ $js->jenis_studio }}</option>
                            @else
                                <option value="{{ $js->id_jenis_studio }}">{{ $js->jenis_studio }}</option>
                            @endif
                        @endforeach
                    </select>

                </div>

                {{-- <div class="mb-3">
                    <label for="id_kota" class="form-label"> id_kota</label>
                    <select class="form-select form-select-lg mb-3" name="id_kota">

                        @foreach ($kota as $js)
                            @if (old('id_kota') == $js->id_kota)
                                <option value="{{ $js->id_kota }}" selected>{{ $js->id_kota }}</option>
                            @else
                                <option value="{{ $js->id_kota }}">{{ $js->id_kota }}</option>
                            @endif
                        @endforeach
                    </select>
                </div> --}}

                {{-- <div class="form-group">
                    <label for="jam_tayang"> Kota</label>
                    <div class="row">
                        <div class="col-md-2">
                            Kota:
                        </div>
                        <div class="col-md-4">
                            Lokasi:
                        </div>
                    </div>
                    @for ($i = 0; $i <= 1; $i++)
                    <div class="row">
                        <div class="col-md-2">
                            <select class="form-select form-select-lg mb-3" name="id_kota[key]">

                                @foreach ($kota as $js)
                                    @if (old('id_kota') == $js->id_kota)
                                        <option value="{{ $js->id_kota }}" selected>{{ $js->id_kota }}</option>
                                    @else
                                        <option value="{{ $js->id_kota }}">{{ $js->id_kota }}</option>
                                    @endif
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-4">
                            <select class="form-select form-select-lg mb-3" name="id_kota[value]">

                                @foreach ($kota2 as $js)
                                    @if (old('id_kota') == $js->id_detail_kota)
                                        <option value="{{ $js->id_detail_kota }}" selected>{{ $js->mall }}
                                        </option>
                                    @else
                                        <option value="{{ $js->id_detail_kota }}">{{ $js->mall }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endfor
                </div>
                <div> --}}

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
                    <label for="jumlah_row" class="form-label @error('jumlah_row') is-invalid @enderror">jumlah
                        row</label>
                    <input type="text" class="form-control" name="jumlah_row" required value="{{ old('jumlah_row') }}">
                    @error('jumlah_row')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_kursi_perrow"
                        class="form-label @error('jumlah_kursi_perrow') is-invalid @enderror">jumlah
                        kursi perrow</label>
                    <input type="number" class="form-control" name="jumlah_kursi_perrow" required
                        value="{{ old('jumlah_kursi_perrow') }}">
                    @error('jumlah_kursi_perrow')
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
