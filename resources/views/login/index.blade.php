@extends('layouts.main')


@section('container')

{{--
<div class="container d-flex justify-content-center " >
    <div class="row" >
        <div class="col-lg-5 col-md-5 col-sm-12" >
            <img  src="img/seenema.png" alt="" width="150" height="150" >
        </div>
    </div>
</div> --}}
<div class="container shadow-lg p-3 mb-5 bg-body rounded">
<h1 class="h3 mb-3 fw-normal text-center pb-3">PLEASE SIGN IN !</h1>
<div class="row justify-content-center">


    <div class="col-md-6">
@if(session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
@endif

<div class="col-md-12">
    @if(session()->has('loginError'))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
    @endif
</div>

</div>


  <div class="row ">
    <div class="col-lg-6 col-md-6 col-xs-12 d-none d-md-block d-sm-block">
        <img src="img/login.png" width="70%" alt="...">
    </div>

    <div class="col-lg-6 col-md-6 col-xs-12 pt-5">
        {{-- PUNYA FORM SIGN! --}}
        <main class="form-signin w-100 m-auto">

            <form action="/login" method="post">
                @csrf


      <div class="form-floating mb-3">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="name@example.com" autofocus required value="{{ old('username') }}">
        <label for="username" >Username</label>

        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

      </div>

              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email" >Email address</label>

                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" required>Password</label>
              </div>



              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>

            </form>


        <small class="d-block text-center mt-3">Forgot Your Password? <a href="{{ route('forget.password.get') }}">Change Your Password ! </a></small>
   
        <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now ! </a></small>
 
</div>

          </main>
    </div>
{{-- PUNYA FORM SIGN! --}}

    </div>

</div>





@endsection
