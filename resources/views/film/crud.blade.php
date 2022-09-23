@extends('film.layout')

@section('container')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="public/fontawesome/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Grape+Nuts&family=Roboto:ital,wght@0,100;1,500&family=Rubik+Bubbles&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<body>
<div class="container">
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
