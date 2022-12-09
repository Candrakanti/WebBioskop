@extends('payment.templateDashboard.sidebar')

@section('container')
<table class="table">
  <thead>
    <tr>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Id Customer</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <td>hi</td>
    </tr>
  </thead>
  <tbody>
    @foreach($cetak as $d ) 
    <tr>
      <th scope="row">{{$d->id_customer}}</th>
      <td>{{$d->id_customer}}</td>
      <td>hi</td>
    </tr>
   @endforeach
  </tbody>
</table>

@endsection