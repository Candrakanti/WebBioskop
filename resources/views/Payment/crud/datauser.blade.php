@extends('payment.templateDashboard.sidebar')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    
</head>

<body>
<div class="container pt-3">
  @if (session()->has('success'))
  <div class="alert alert-success " role="alert">
     {{session('success')}}
    </div>
  @endif
</div>
       

<div class="container-fluid py-4">
  <div class="row">
      <div class="col-12">
          <div class="card mb-4">
              <div class="card-header pb-0">
                  <h6 class="text-center">Data Customer</h6>
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
                                      Jumlah Pembelian</th>
                                  <th
                                      class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Tanggal Buat AKun</th>
                          
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
                                      <p class="text-xs font-weight-bold mb-0">{{ $data->id}}</p>
                                  </td>
                                  <td>
                                      <p class="text-xs font-weight-bold mb-0">{{ $data->name }}</p>
                                  </td>
                                  
                                  <td class="align-middle text-center">
                                      <span
                                          class="text-secondary text-xs font-weight-bold">{{ $data->email }}</span>
                                  </td>
                                  <td class="align-middle text-center">
                                      <span
                                          class="text-secondary text-xs font-weight-bold">{{ $data->phone }}</span>
                                  </td>

                                  @foreach($post as $d)
                                  <td class="align-middle text-center">
                                      <span
                                          class="text-secondary text-xs font-weight-bold">{{ $d->jumlah }}</span>
                                  </td>
                                  @endforeach

                                  <td class="align-middle text-center">
                                      <span
                                          class="text-secondary text-xs font-weight-bold">{{ $data->created_at }}</span>
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

</html>
@endsection
    