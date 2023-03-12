@extends('payment.templateDashboard.sidebar')

@section('container')
        {{-- <table>
    <thead>
        <tr>
            <th>Number of Tickets</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customerTicketCount as $row)
        <tr>
            <td>{{ $row->jumlah }}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Paid</title>
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-md-5">
              <a href="/cetak-data-pegawai" class="btn btn-danger">Back</a>
            </div>
            <div class="col-12">
                <div class="card mb-4">
                  
                    <div class="card-header pb-0">
                        <h6 class="text-center">Data Customer Paid</h6>
                    </div>
                    
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0" id="my">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Id Booking </th>
                                     
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Harga</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Payment Type</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status Bayar</th>
                                    
                                
                                        @foreach ($data as $key => $d)
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
                                            <p class="text-xs font-weight-bold mb-0">{{ $d->id_booking}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $d->harga }}</p>
                                        </td>
                                        
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $d->payment_type }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $d->status_bayar }}</span>
                                        </td>
      
                                      {{-- <td class="align-middle text-center text-sm">
                                          <a class="badge badge-sm bg-gradient-warning"
                                          href="{{ route('CrudPayment.detail') }}">Detail</a>
                                      </td> --}}
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
      </div>
</body>
</html>
@endsection