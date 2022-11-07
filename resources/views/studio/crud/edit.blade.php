@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container">
        <div class=" text-end">
            <a href="/CrudStudio" class="btn btn-danger">Back</a>
        </div>
    </div>

    <div class="row d-flex justify-content-center">

        <div class="col-lg-8 col-md-8">

            <form method="POST" action="{{ route('CrudStudio.update', $studio->id_studio) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_studio">Id Studio</label>
                    <input type="text" name="id_studio" id="id_studio" class="form-control"
                        value="{{ $studio->id_studio }}" required="">
                </div>

                <div class="form-group">
                    <label for="id_jenis_studio">ID Jenis Studio</label>

                    <select class="form-select form-select-lg mb-3" name="id_jenis_studio">
                        @foreach ($jenis_studio as $js)
                            <option value="{{ $js->id_jenis_studio }}"
                                {{ old('id_jenis_studio', $js->id_jenis_studio) || $js->jenis_studio === $js->jenis_studio ? 'selected' : '' }}>
                                {{ $js->jenis_studio }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="audiotori">Audiotori</label>
                    <input type="text" name="audiotori" id="audiotori" class="form-control"
                        value="{{ $studio->audiotori }}" required="">
                </div>
                <div class="form-group">
                    <label for="jumlah_row">Jumlah row</label>
                    <input type="text" name="jumlah_row" id="jumlah_row" class="form-control"
                        value="{{ $studio->jumlah_row }}" required="">
                </div>
                <div class="form-group">
                    <label for="jumlah_kursi_perrow">Jumlah kursi perrow</label>
                    <input type="text" name="jumlah_kursi_perrow" id="jumlah_kursi_perrow" class="form-control"
                        value="{{ $studio->jumlah_kursi_perrow }}" required="">
                </div>


                <button class="btn btn-success mt-5" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
