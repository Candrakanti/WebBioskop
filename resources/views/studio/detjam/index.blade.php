@extends('studio.templateDashboard.sidebar')

@section('container')
   
        <div class="container pb-3">
            <a href="/crudDetjam/create" class="btn btn-info"> Create Data Detail Jam </a>

            <div class="row 9-3 align-items-center mt-2">
                <div class="col-auto">
                  <form action="/crudDetjam" method="GET">
                  <input type="search" id="inputPassword2" name="search"  class="form-control"  placeholder="Masukan Id Bioskop">
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
                                <h6 class="text-center">Data Detail Jam</h6>
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
                                                    Id Detail Jam </th>
                                               
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Id Bioskop </th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Id jadwal</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Jam Tayang </th>

                                                @foreach ($data as $key => $detjam)
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
                                                    <p class="text-xs font-weight-bold mb-0">{{ $detjam->id_det_jam }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $detjam->id_db }}</p>
                                                </td>

                                                {{-- <td class="align-middle text-center pt-1">
                                                    <p class="text-secondary text-xs font-weight-bold">
                                                        {{ $bioskop->id_studio }}</p>
                                                </td> --}}

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $detjam->id_jadwal }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $detjam->jam_tayang }}</span>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <a class="badge badge-sm bg-gradient-warning"
                                                        href="/crudDetjam/{{ $detjam->id_det_jam }}/edit">Edit</a>


                                                    <form method="POST"
                                                        action="{{ route('crudDetjam.delete', $detjam->id_det_jam) }}"
                                                        class="d-inline">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit"
                                                            class="badge badge-sm bg-gradient-danger  border-0 show_confirm"
                                                            data-id="{{$detjam->id_det_jam }}" data-toggle="tooltip"
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
            var id_det_jam = $(this).attr('data-id');
            event.preventDefault();
            swal({
                    title: "APA ANDA YAKIN ?",
                    text: "Anda Akan Menghapus ID dj " + id_det_jam + "",
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
