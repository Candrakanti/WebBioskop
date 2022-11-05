@extends('studio.templateDashboard.sidebar')

@section('container')
    <div class="container pb-3">
        <a href="/kota/create" class="btn btn-info"> Create Data bioskop</a>

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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Id Bioskop</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama Bioskop</th>


                                            @foreach ($data as $key => $data)
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
                                                <p class="text-xs font-weight-bold mb-0">{{ $data->id_bioskop }}</p>
                                            </td>

                                            <td class="align-middle text-center pt-1">
                                                <p class="text-secondary text-xs font-weight-bold">
                                                    {{ $data->nama_bioskop }}</p>
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
        @endsection
