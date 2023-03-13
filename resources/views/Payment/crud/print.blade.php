@extends('payment.templateDashboard.sidebar')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.3.0/css/dataTables.dateTime.min.css">
@section('container')


    <section id="print_pdf">

        <div class="container d-flex text-center " >
            <div class="row d-flex justify-content-center " style=" border-style:solid; border-color:lightsteelblue">
        
                <div class="col-lg-12 col-md-8">
            
                    <div class="row d-flex justify-content-center">
        
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center">
                            <div class="form-group">
                                <label for="tgl_tayang_awal">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" value="" required="">
                            </div>
                        </div>
        
                        <div class=" col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="tgl_tayang_akhir">Tanggal akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" value="" required="">
                            </div>
                        </div>
        
                    </div>
                    <div class="row  d-flex justify-content-center ">
                        <a href="" onclick="this.href='/cetak_laporan_penjualan/'+ document.getElementById('tglawal').value +
                        '/' + document.getElementById('tglakhir').value" class="btn btn-succes">Print Data</a>
                    </div>
                        
                    </div>
                </div>
        </div>    

    </section>



          <div class="container d-flex " style=" border-style:solid; border-color:lightsteelblue; border-right; margin-top:30px;"   >
            <div class="row">
                <div class="col-6  col-lg-6 col-md-6">
                    <table border="0" cellspacing="5" cellpadding="5">
                        <tbody><tr>
                            <td>Minimum date:</td> 
                            <td><input type="text" id="min" name="min"></td>
                        </tr>
                    </tbody></table>    
                </div>
                <div class="col-6 col-lg-6 col-md-6">
                    <tr>
                        <table border="0" cellspacing="5" cellpadding="5">
                        <td>Maximum date:</td>
                        <td><input type="text" id="max" name="max"></td>
                    </tr>
                </tbody></table>  
                    
                </div>
                    
                    
            </div>    
          </div>

    <div class="container table-cust " style="margin-top:30px;">

        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Id Payment</th>
                    <th>Id Booking</th>
                    <th>Nama </th>
                    <th>Jumlah bayar</th>
                    <th>Tanggal Booking</th>
                    <th>Status Bayar</th>
                
                </tr>
              
            </thead>
            <tbody>
                @foreach($data as $key=> $d)
                <tr>
                    <td>{{ $d->id_payment }}</td>
                    <td>{{ $d->id_booking }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->harga }}</td>
                    <td>{{ $d->tanggal_booking }}</td>
                    @if($d->status_bayar == 0)
                    <td> Belum Bayar</td>
                    @endif
                    @if($d->status_bayar == 1)
                    <td>Telah dibayar</td>
                    @endif
                    @if($d->status_bayar == 2)
                    <td>Dibatalkan Sistem Telat Bayar</td>
                    @endif
                   
                </tr>
                @endforeach
            </tbody>
   
        </table>

    </div>


    <script  type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/datetime/1.3.0/js/dataTables.dateTime.min.js"></script>

<script>
  $(document).ready( function () {
$('#example').DataTable();
} );
</script>

    <script>
        var minDate, maxDate;
 
 // Custom filtering function which will search data in column four between two values
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var date = new Date( data[4] );
  
         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         ) {
             return true;
         }
         return false;
     }
 );
  
 $(document).ready(function() {
     // Create date inputs
     minDate = new DateTime($('#min'), {
         format: 'MMMM Do YYYY'
     });
     maxDate = new DateTime($('#max'), {
         format: 'MMMM Do YYYY'
     });
  
     // DataTables initialisation
     var table = $('#example').DataTable();
  
     // Refilter the table
     $('#min, #max').on('change', function () {
         table.draw();
     });
 });
    </script>
@endsection