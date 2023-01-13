@extends('payment.templateDashboard.sidebar')

@section('container')
    
<!DOCTYPE html>
<html>
 <head>
  <title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">

   <div class="row">
    <div class="col-md-7" align="right">
     <h4>Laporan Keuangan</h4>
    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('dynamic_pdf/pdf') }}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>Nama</th>
       <th>Payment</th>
       <th>Id Booking</th>
       <th>Jenis Bank</th>
       <th>Harga</th>
       <th>Status Pembayaran</th>
      </tr>
     </thead>
     <tbody>
     @foreach($customer_data as $customer)
      <tr>
       <td>{{ $customer->name }}</td>
       <td>{{ $customer->id_payment }}</td>
       <td>{{ $customer->id_booking }}</td>
       <td>{{ $customer->payment_type }}</td>
       <td>{{ $customer->harga }}</td>
       <td>{{ $customer->status_bayar }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>
@endsection