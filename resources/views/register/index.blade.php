
@extends('layouts.main')

@section('container')

{{-- <div class="container d-flex justify-content-center " >
    <div class="row  " >
        <div class="col-lg-5 col-md-5 col-sm-12 " >
            <img  src="img/seenema.png" alt="" width="150" height="150" >
        </div>
    </div>
</div> --}}
<div class="container shadow-lg p-3 mb-5 bg-body rounded">



<div class="row justify-content-center ">


    <div class="col-md-8">


    <h1 class="h3 mb-3 fw-normal text-center pb-3">Registration Form</h1>

    </div>
</div>


<div class="row pb-5">

    <div class="col-lg-6 col-md-6 col-xs-12 ">
        {{-- PUNYA FORM REGISTER --}}
              <main class="form-registration w-100 m-auto">
                  <form action="/register" method="post">
                      @csrf

                      <div class="row">

                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                          <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror"  id="name" placeholder="name" autofocus required value="{{ old('name') }}">
                            <label for="name">name</label>
                            @error('name')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>

                        </div>

                        <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                          <div class="form-floating  mb-3">
                            <input type="text" name="username" class="form-control @error('username') is-invalid  @enderror"  id="username" placeholder="username" required value="{{ old('username') }}">
                            <label for="username">username</label>
                            @error('username')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                        </div>

                      </div>
                     
                     <div class="row">
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-floating  mb-3">
                          <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror"  id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                          <label for="email">Email address</label>
                          @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div> </div>
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="form-floating  mb-3">
                          <input type="number" name="phone" class="form-control @error('phone') is-invalid  @enderror"  id="phone" placeholder="name@example.com" required value="{{ old('phone') }}">
                          <label for="phone">phone </label>
                          @error('phone')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div> </div>
                     </div>

                     

                        <div class="row">

                          <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-floating mb-3">
                              <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror"  id="password" placeholder="Password" required value="{{ old('password') }}">
                              <label for="password">password</label>
                              @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                          </div>

                          <div class="col-6 col-lg-6 col-md-6 col-sm-6"> <div class="form-floating">
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid  @enderror"  id="password_confirmation" placeholder="password_confirmation" required value="{{ old('password_confirmation') }}">
                            <label for="password_confirmation">Password Confirmation</label>
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div></div>
                        </div>
   

                    <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>

                  </form>

                  <small class="d-block text-center mt-3">Already Have Account? <a href="/login" class="text-danger">Login Now ! </a></small>

                </main>
                {{-- PUNYA FORM REGISTER --}}

          </div>

    <div class="col-lg-6 col-md-6 col-xs-12 text-end d-none d-md-block d-sm-block">
        <img src="img/register.png" width="70%" alt="...">
    </div>


</div>


</div>


@endsection
