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
                <input type="text" readonly name="id_db" id="id_db" class="form-control" value="{{$data->id_db }}" >
            </div>


            <div class="form-group">
           
                <label for="id_bioskop">Id Bioskop</label>
                <select name="id_bioskop">
                    @foreach ($bioskop as $b)
                    <option value="{{ $b->id_bioskop }}" @if ($data->id_bioskop === $b->id_bioskop || old('id_bioskop') === $b->id_bioskop) selected @endif>{{ $b->id_bioskop }}</option>
                @endforeach
                </select>

            </div>


            <div class="form-group">
               
                <label for="id_jadwal">Id  Jadwal</label>
                <input type="text" readonly name="id_jadwal" id="id_jadwal" class="form-control" value="{{$data->id_jadwal }}" >
            </div>

            <button class="btn btn-success mt-5" type="submit">Save</button>
        </form>

  @endsection