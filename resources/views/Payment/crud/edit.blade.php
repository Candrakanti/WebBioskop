@extends('payment.templateDashboard.sidebar')

@section('container')

<div class="container">
    <div class=" text-end">
      <a href="/CrudPayment" class="btn btn-danger">Back</a>
      </div>
  </div>

  <div class="row d-flex justify-content-center">

    <div class="col-lg-8 col-md-8">

        <form method="POST" action="{{ route('CrudPayment.update', $data->id_payment) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
            @if ($data->image)
            <div class="rounded">
            <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top rounded-3" alt="" style="width:100px">
            </a>
          </div>
            @endif
            </div>

            <div class="form-group">
                <label for="id_payment">Id Payment</label>
                <input type="text" name="id_payment" id="id_payment" class="form-control" readonly="readonly" value="{{$data->id_payment }}" required="">
            </div>

            <div class="form-group">
                <label for="id_booking">Id Booking</label>
                <input type="text" name="id_booking" id="id_booking" class="form-control" readonly="readonly" value="{{$data->id_booking }}" required="">
            </div>

            <div class="form-group">
                <label for="nama_bank">Nama Bank</label>
                <input type="text" name="nama_bank" id="nama_bank" class="form-control" value="{{$data->nama_bank }}" required="">
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="{{$data->harga }}" required="">
            </div>

            <div class="form-group">
                <label for="status">Status Pembayaran</label>
                <input type="text" name="status" id="status" class="form-control" value="{{$data->status }}" required="">
            </div>

            <button class="btn btn-info" type="submit">Save</button>
        </form>
        </div>
    </div>

    <script>
        
        function previewImage() {
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}
    </script>

@endsection