
@extends('film.template.main')

@section('judul')
    ADMIN FILM
@endsection

@section('isi')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN FILM</title>
    
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  
        <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
       
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

</head>

<body>
<div class="container">
      <a class="btn btn-outline-dark" href="/">+ Create New Film</a>
      <br><br>
      {{-- <button type="button" class="btn btn-outline-dark"> Create New Film</button><br><br> --}}
    <div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success " role="alert">
            <strong><p>{{ $message }}</p></strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">  </button>
          </div>
        @endif
    </div>
    <table id="datafilm" class="table table-striped table-bordered text-center">
      <thead>
          <tr>
            <th>NO</th>
            <th>ID FILM</th>
            <th>ID JADWAL</th>
            <th>JUDUL</th>
            <th>JENIS</th>
            <th>AKSI</th>
          </tr>
      </thead>
      @foreach ($films as $key => $film)
      <tr>
          <td>{{$key++}}</td>
          <td>{{$film->id_film}}</td>
          <td>{{$film->id_jadwal}}</td>
          <td>{{$film->judul_film}}</td>
          <td>{{$film->jenis_film}}</td>
          <td>
              <div class="row justify-content">
                <div class="col-4">
                    <form action="{{ route('hapusfilm') }}">
                        <input type="hidden" name= "id" value="{{ $film->id_film }}">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger col-m-1" onclick="return confirm ('Are you sure to delete this data?')"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </div>
                  <div class="col-4">
                      <a href="/#" class="btn btn-info" style="background-color: #495C83; color: #fff;"><i class="fas fa-pencil-alt"></i></a>
                  </div>
                  <div class="col-4">
                      <a href="/#" class="btn btn-info" style="background-color: #yellow ; color: #fff;"><i class="fa fa-eye"></i></a>
                  </div>
  </div>
          </td>
      </tr>
      @endforeach
  </table>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
$('#datafilm').DataTable();
});
</script>
</html>
@endsection