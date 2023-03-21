@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/detbioskop" class="btn btn-danger">Back</a>
      </div>
  </div>


  <div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">

        <form method="POST" action="{{ route('detbioskop.update', $data->id_db) }}" >
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="id_db">Id detail bioskop</label>
                <input type="text" name="id_db" id="id_db" class="form-control" value="{{$data->id_db }}" readonly required="">
            </div>


            <div class="form-group">
               
                <label for="id_bioskop">id_bioskop</label>
                <select name="id_bioskop">
                    @foreach ($bioskop as $b)
                    <option value="{{ $b->id_bioskop }}" @if ($data->id_bioskop === $b->id_bioskop || old('id_bioskop') === $b->id_bioskop) selected @endif>{{ $b->id_bioskop }}</option>
                @endforeach
                </select>

            </div>


            <div class="form-group">
               
                <label for="id_jadwal">id_jadwal</label>
                <select name="id_jadwal">
                    @foreach ($jadwal as $b)
                    <option value="{{ $b->id_jadwal }}" @if ($data->id_jadwal === $b->id_jadwal || old('id_jadwal') === $b->id_jadwal) selected @endif>{{ $b->id_jadwal }}</option>
                @endforeach
                </select>

            </div>

            <button class="btn btn-success mt-5" type="submit">Save</button>
        </form>

  @endsection