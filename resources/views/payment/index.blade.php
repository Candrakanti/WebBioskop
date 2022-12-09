@extends('studio.templateDashboard.sidebar')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="fs-1" style="margin-top:5%; margin-left:20%">
     <b>SELAMAT DATANG </b> <br>
   <h2 class="fw-light" style="margin-left: 40%; text-transform: uppercase"> ADMIN PAYMENT &nbsp;{{ auth()->user()->name }}</h2>
</h1>
   
     <div class="container d-flex justify-content-center" style="">
         <hr class="border border-dark border-2 opacity-50 d-flex justify-content-center" width="50%">
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html> 
@endsection