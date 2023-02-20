@extends('film.layout.sidebar')

@section('container')
    <!DOCTYPE html>
    <html lang="en">
    <body>
        <div class="container pb-3">
            <a href="/crudFilm/create" class="btn btn-info">Create Data Jenis Film</a>

            <div class="container pt-3">
                @if (session()->has('success'))
                    <div class="alert alert-success " role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>


            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6 class="text-center">Data Jenis Film</h6>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0" id="myTable">
                                        <thead>
                                            <tr>
                                                
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    No</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Id Jenis Film</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jenis Film</th>
                                                @foreach ($data as $key => $Jfilm)
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
                                                    <p class="text-xs font-weight-bold mb-0">{{ $Jfilm->id_jenis_film }}</p>
                                                </td>

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $Jfilm->jenis_film}}</span>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <a class="badge badge-sm bg-gradient-warning"
                                                        href="">Edit</a>
                                                   
                                                    <form method="POST" action=""
                                                        class="d-inline">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit"
                                                            class="badge badge-sm bg-gradient-danger  border-0 show_confirm"
                                                            data-id="" data-toggle="tooltip"
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


    </html>
@endsection
