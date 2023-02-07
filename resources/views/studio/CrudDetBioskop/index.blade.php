@extends('studio.templateDashboard.sidebar')

@section('container')

<div class="container pb-3">
    <a href="/detbioskop/create" class="btn btn-info"> Tambah Detail Bioskop</a>

    <div class="container pt-3">
        @if (session()->has('success'))
            <div class="alert alert-success " role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="row 9-3 align-items-center mt-2">
        <div class="col-auto">
          <form action="/detbioskop" method="GET">
          <input type="search" id="inputPassword2" name="search"  class="form-control"  placeholder="Masukan ID studio">
        </form>
        </div>
    </div>


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6 class="text-center">Data Studio</h6>
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
                                            Id Detail Bioskop</th>
                                     
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Id Bioskop</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id Jadwal</th>
                                   <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                        @foreach ($db as $key => $data)
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
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->id_db }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->id_bioskop }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $data->id_jadwal }}</span>
                                        </td>
                                      
                                        <td class="align-middle text-center text-sm">
                                            <a class="badge badge-sm bg-gradient-warning"
                                            href="/detbioskop/{{ $data->id_db }}/edit">Edit</a>


                                            <form method="POST"
                                                action="{{ route('detbioskop.delete', $data->id_db) }}"
                                                class="d-inline">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit"
                                                    class="badge badge-sm bg-gradient-danger  border-0 show_confirm"
                                                    data-id="{{ $data->id_db }}" data-toggle="tooltip"
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

{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<script>
$('.show_confirm').click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    var id_db = $(this).attr('data-id');
    event.preventDefault();
    swal({
            title: "APA ANDA YAKIN ?",
            text: "Anda Akan Menghapus Id Bioskop " + id_db + "",
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


@endsection