@extends('payment.templateDashboard.sidebar')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
@section('container')

<div class="container pt-3">
  @if (session()->has('success'))
  <div class="alert alert-success " role="alert">
     {{session('success')}}
    </div>
  @endif
</div>

{{-- <div class="container">
    <div class="col-md-4    ">
        <form action="/datauser" method="GET">
        <input type="search" id="inputPassword2" name="search"  class="form-control"  placeholder="Nama Pembeli">
      </form>
      </div>
    </div>
</div> --}}


<div class="container table-cust " style="margin-top:30px;">
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-5">
        <a href="{{ route('exportcustomer') }}" class="btn btn-danger">Convert to Excel</a>
      </div>
      <div class="col-12">
          <div class="card mb-4">
            
              <div class="card-header pb-0">
                  <h6 class="text-center">Data Customer</h6>
              </div>
              
              <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0" id="myTable" >
                          <thead>
                              <tr>
                                  <th
                                      class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      No</th>
                                  <th
                                      class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                      Id User </th>
                               
                                  <th
                                      class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                      Nama</th>
                                  <th
                                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Email</th>
                                  <th
                                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      No Telp</th>                   
                                      <th
                                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      TotalPembelian</th>                                  
                                  <th
                                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Tanggal Buat AKun</th>
                              </tr>
                          </thead>

                          <tbody>
                            
                            @foreach ($customerTicketCount as $key => $d)
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
                                      <p class="text-xs font-weight-bold mb-0">{{ $d->id_customer}}</p>
                                  </td>
                                  <td>
                                      <p class="text-xs font-weight-bold mb-0">{{ $d->name }}</p>
                                  </td>
                                  
                                  <td class="align-middle text-center">
                                      <span
                                          class="text-secondary text-xs font-weight-bold">{{ $d->email }}</span>
                                  </td>
                                  <td class="align-middle text-center">
                                      <span
                                          class="text-secondary text-xs font-weight-bold">{{ $d->phone }}</span>
                                  </td>
                                  <td class="align-middle text-center">
                                    <span
                                        class="text-secondary text-xs font-weight-bold">{{ $d->order_count }}</span>
                                </td>       
                                  <td class="align-middle text-center">
                                      <span
                                          class="text-secondary text-xs font-weight-bold">{{ $d->created_at }}</span>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                         
                      </table>
                    
       
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

  {{-- {{ $data->links() }} --}}
</body>

{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<script>

$('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          var id_studio = $(this).attr('data-id');
          event.preventDefault();
          swal({
              title: "APA ANDA YAKIN ?",
              text: "Anda Akan Menghapus ID Studio "+id_studio+"",
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

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>


<script>
  $(document).ready( function () {
$('#myTable').DataTable();
} );
</script>

@endsection
    