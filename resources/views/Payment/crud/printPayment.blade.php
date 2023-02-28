@extends('payment.templateDashboard.sidebar')

@section('container')

<button type="submit" onclick="download()" class="btn btn-primary">Print Now</button>

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
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Payment</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Customer</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Bayar</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  
                    @foreach($cetak as $key => $cetak ) 
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
                      <span class="text-secondary text-xs font-weight-bold">{{$cetak->id_payment }}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$cetak->name }}</span>
                    </td>

                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$cetak->harga}}</span>
                    </td>
  
                    <td class="align-middle text-center">
                      @if($cetak->status_bayar == 0)
                      <span class="text-secondary text-xs font-weight-bold"> Belum Bayar</span >
                      @endif
                      @if($cetak->status_bayar == 1)
                      <span class="text-secondary text-xs font-weight-bold">Telah dibayar</span >
                      @endif
                      @if($cetak->status_bayar == 2)
                      <span class="text-secondary text-xs font-weight-bold">Dibatalkan Sistem Telat Bayar</span>
                      @endif

                      <span class="text-secondary text-xs font-weight-bold">{{$cetak->status_bayar}}</span>
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

    <script>
        function download(){
      window.print();
        }
    </script>
@endsection