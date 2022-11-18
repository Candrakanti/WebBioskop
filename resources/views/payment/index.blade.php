@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <h2>Order Summary</h2>
  <br>
  <h2>Choose Payment Method</h2>
</head>
<body>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
              <label class="form-check-label" for="firstRadio">Credit Card / Debit Card</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
              <label class="form-check-label" for="secondRadio">GoPay</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
              <label class="form-check-label" for="thirdRadio">BCA Virtual Account</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
                <label class="form-check-label" for="thirdRadio">Permata Virtual Account</label>
              </li>
          </ul>
    </div>
</body>
</html>
    
@endsection