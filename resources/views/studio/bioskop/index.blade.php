@extends('studio.templateDashboard.sidebar')

@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>

    </head>

    <body>
        <div class="container pb-3">
            <a href="/crudBioskop/create" class="btn btn-info"> Create Data Bioskop </a>

            <div class="row 9-3 align-items-center mt-2">
                <div class="col-auto">
                  <form action="/crudBioskop" method="GET">
                  <input type="search" id="inputPassword2" name="search"  class="form-control"  placeholder="Masukan nama Bioskop">
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


            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6 class="text-center">Data Bioskop</h6>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table mb-0" id="myTable">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    No</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Id Bioskop </th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Nama Bioksop</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Alamat </th>

                                                @foreach ($data as $key => $bioskop)
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
                                                    <p class="text-xs font-weight-bold mb-0">{{ $bioskop->id_bioskop }}</p>
                                                </td>

                                                {{-- <td class="align-middle text-center pt-1">
                                                    <p class="text-secondary text-xs font-weight-bold">
                                                        {{ $bioskop->id_studio }}</p>
                                                </td> --}}

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $bioskop->nama_bioskop }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $bioskop->alamat }}</span>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <a class="badge badge-sm bg-gradient-warning"
                                                        href="/crudBioskop/{{ $bioskop->id_bioskop }}/edit">Edit</a>


                                                        <form method="POST"
                                                        action="{{ route('crudBioskop.delete', $bioskop->id_bioskop) }}"
                                                        class="d-inline">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit"
                                                            class="badge badge-sm bg-gradient-danger  border-0 show_confirm"
                                                            data-id="{{ $bioskop->id_bioskop }}" data-toggle="tooltip"
                                                            title='Delete'>Delete</button>
                                                    </form>

                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
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
            var id_studio = $(this).attr('data-id');
            event.preventDefault();
            swal({
                    title: "APA ANDA YAKIN ?",
                    text: "Anda Akan Menghapus ID Studio " + id_studio + "",
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