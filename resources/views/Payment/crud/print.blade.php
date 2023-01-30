@extends('payment.templateDashboard.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/LayoutPayment" class="btn btn-danger">Back</a>
      </div>
  </div>

  <div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">
           
            <div class="form-group">
                <label for="tgl_tayang_awal">Tanggal Awal</label>
                <input type="date" name="tglawal" id="tglawal" class="form-control" value="" required="">
            </div>

            <div class="form-group">
                <label for="tgl_tayang_akhir">Tanggal akhir</label>
                <input type="date" name="tglakhir" id="tglakhir" class="form-control" value="" required="">
            </div>
           
       
            <a href="" onclick="this.href='/CetakDataPertanggal/'+ document.getElementById('tglawal').value +
            '/' + document.getElementById('tglakhir').value" class="btn btn-succes">Print Data</a>
        </div>
    </div>

@endsection