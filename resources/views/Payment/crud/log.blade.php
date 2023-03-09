@extends('payment.templateDashboard.sidebar')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
@section('container')

<div class="container-fluid py-4">
    <div class="row">
  
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6 class="text-center">Activity Log</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="myTable">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Id</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Description</th>
                                 
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        User Id</th>
                                   
                                    
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Aktivitas Log</th>
  
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Detail</th>
                            
                                    @foreach ($log as  $data)
                                </tr>
                            </thead>    
  
                            <tbody>
                                <tr>
  
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
  
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $data->id}}</h6>
  
                                            </div>
                                        </div>
                                    </td>
  
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->description}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->causer_id }}</p>
                                    </td>
                                    
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ $data->created_at }}</span>
                                    </td>
                                   
                                    <td class="align-middle text-center">
                                        <a class="badge badge-sm bg-gradient-warning"
                                        href="{{ route('CrudPayment.show', $data->id) }}">Detail</a>
                                    </td>

                                </tr>
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