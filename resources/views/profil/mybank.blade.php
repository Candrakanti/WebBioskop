@extends('layouts.main')

@section('container')

<form action="/checkout" class="form-inline" method="GET">

    <div class="container">
        <div class="row">
            <div class="col-3">Payment Code : </div>
            <div class="col-4"> 
                <input type="search" class="form-control" id="id_film"
                name="search" required autofocus>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success"> Pay</button>
    
</form>



@endsection