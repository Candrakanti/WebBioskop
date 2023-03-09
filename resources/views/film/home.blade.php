@extends('film.layout.sidebar')

@section('container')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
    </head>
    <body>
        <div class="container pb-3">
            <a href="/crudFilm/create" class="btn btn-info">Create Data Film</a>

           <div class="row 9-3 align-items-center mt-2">
                <div class="col-auto">
                  <form action="/crudFilm" method="GET">
                  <input type="search" id="inputPassword2" name="search"  class="form-control"  placeholder="Masukan judul film">
                </form>
                </div>
            </div>
            

            <div class="container pt-3">
                @if (session()->has('success'))
                    <div class="alert alert-success " role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            {{-- <form action="/crudFilm/search" class="form-inline" method="GET">
                <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                    <div class="input-group">
                      <input type="search" placeholder="Masukan ID Film" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                      <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                </div>
            </form> --}}
          

            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header pb-0">
                            <h6 class="text-center">Data Film</h6>
                        </div>
                        <div class="card mb-4">  
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table id="myDataTable" class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    No</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    id_film</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    judul</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    jenis Film</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                                @foreach ($films as $key => $film)
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>

                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $key++ }}</h6>

                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $film->id_film }}</p>
                                                </td>

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $film->judul_film }}</span>
                                                </td>

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $film->jenis_film }}</span>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <a class="badge badge-sm bg-gradient-warning"
                                                        href="/crudFilm/{{ $film->id_film }}/edit">Edit</a>
                                                        
                                                    <a class="badge badge-sm bg-gradient-warning"
                                                        href="{{ route('crudFilm.show', $film->id_film) }}">Detail</a>

                                                    <form method="POST" action="/crudFilm/{{ $film->id_film }}"
                                                        class="d-inline">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit"
                                                            class="badge badge-sm bg-gradient-danger  border-0 show_confirm"
                                                            data-id="{{ $film->id_film }}" data-toggle="tooltip"
                                                            title='Delete'>Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </body>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


    <script>
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var id_film = $(this).attr('data-id');
            event.preventDefault();
            swal({
                    title: "APA ANDA YAKIN ?",
                    text: "Anda Akan Menghapus ID FIlm " + id_film + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>

{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function(){
        $('#myDataTable').DataTable();
    });
</script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

{{-- <script>
    $(document).ready(function(){
        $('#myDataTable').DataTable();
    });
</script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}

    
    </html>
@endsection
