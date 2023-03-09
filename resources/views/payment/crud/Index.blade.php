@extends('payment.templateDashboard.sidebar')

@section('container')

    <div class="container mb-5">

        <h1 class="fs-1" style="margin-top:3%; margin-left:20%">
            <b>SELAMAT DATANG </b> <br>
        <h2 class="fw-light" style="margin-left: 40%; text-transform: uppercase"> ADMIN PAYMENT &nbsp;{{ auth()->user()->name }}</h2>
    </h1>
    
    {{-- <a class="btn btn-primary" href="http://localhost/WebBioskop/public/backup">Backup Database</a> --}}
  
            <div class="container d-flex justify-content-center" style="">
                <hr class="border border-dark border-2 opacity-50 d-flex justify-content-center" width="50%">
            </div>
            
    </div>
  
     <div class="card">
        <div class="card-header">
      SeeNema Admin Payment || Grafik Pendapatan Bulanan
        </div>
        <div class="card-body">

         <div id="grafik">

         </div>

        </div>
      </div>

     <script src="https://code.highcharts.com/highcharts.js"></script>
  
     <script type="text/javascript">
     var pendapatan = <?php echo json_encode($total_harga); ?>;
     var bulan = <?php echo json_encode($bulan) ?>;
Highcharts.chart('grafik' , {
    title: {
        text : '     GRAFIK PENDAPAT BULANAN'
    } ,
    xAxis :{
        categories : bulan
    } ,
    yAxis : {
        title : {
            text : 'Nominal pendapatan Bulanan'
        }
    } ,
    plotOptions : {
        series : {
            allowPointSelect : true
        }
    } ,
    series : [
        {
            name : 'Nominal Pendapatan',
            data : pendapatan
        }
    ]
});
     </script>
@endsection