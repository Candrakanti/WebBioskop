
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
      <button type="button"  class="btn btn-outline-dark"> Create New Film</button><br><br>
    <div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success " role="alert">
            <strong><p>{{ $message }}</p></strong>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">  </button>
          </div>
        @endif
    </div>
    <table id="datakartu" class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Kartu</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Lahir</th>
                <th>NIK</th>
                <th>Fasilitas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
    </table>
</div>
    
</body>
<script>
$(document).ready(function () {
$('#datakartu').DataTable();
});
</script>
</html>
@endsection