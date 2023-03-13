@extends('payment.templateDashboard.sidebar')

@section('container')

<a   class="btn btn-primary" onclick="window.print()"> Print Data </a>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="text-center">Data Payment</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0" id="myTable">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Payment</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Booking</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Payment</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Bayar</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                
                  @foreach($cetak as $key => $data ) 
                </tr>
              </thead>

              <tbody>
                <tr>

                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                       
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$key++}}</h6>
                
                      </div>
                    </div>
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$data->id_payment}}</span>
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$data->id_booking}}</span>
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$data->name}}</span>
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$data->harga}}</span>
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">
                      @if($data->status_bayar == 0)
                       Belum Bayar
                      @endif
                      @if($data->status_bayar == 1)
                      Telah dibayar
                      @endif
                      @if($data->status_bayar == 2)
                      Dibatalkan Sistem Telat Bayar
                      @endif
                    </span>
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


@endsection