@extends('studio.templateDashboard.sidebar')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
  

@section('container')

 
<div class="container pt-3">
    @if (session()->has('success'))
    <div class="alert alert-success " role="alert">
       {{session('success')}}
      </div>
    @endif
  </div>
         
  {{-- <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table> --}}
  
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6 class="text-center">History Jadwal</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" id="myTable">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Jadwal</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Studio</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Film</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal tayang Awal</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Tayang Akhir</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    @foreach($data as $key => $data ) 
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
                      <span class="text-secondary text-xs font-weight-bold">{{$data->id_jadwal}}</span>
                    </td>
  
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$data->id_film}}</span>
                    </td>
  
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$data->id_studio}}</span>
                    </td>
  
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$data->tgl_tayang_awal}}</span>
                    </td>
  
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$data->tgl_tayang_akhir}}</span>
                    </td>


                    <td class="align-middle text-center text-sm">

                      <a class="badge badge-sm bg-gradient-warning"
                      href="/history/{{ $data->id_jadwal }}/edit">Edit</a>

                      @if($data->tgl_tayang_akhir <= Carbon\Carbon::now()->format('Y-m-d'))
                   <h1 class="d-none">hi</h1>
                      @else
                        <form method="POST"
                          action="{{ route('history.delete', $data->id_jadwal) }}"
                            class="d-inline">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            
                            <button type="submit"
                                class="badge badge-sm bg-gradient-danger  border-0 show_confirm"
                                data-id="{{ $data->id_jadwal }}" data-toggle="tooltip"
                                title='Delete'>Delete</button>
                        </form>
@endif

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
  
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>

    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
   
  
@endsection