@extends('layouts.main')
@section('container')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-lg-8 col-md-8 col-sm-4" style="padding-bottom: 50px;">
                  <div class="card-header text-center pb-2" style="font-size:30px">Change Password</div>
                  <div class="card-body">

                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row d-flex justify-content-center" style="padding-bottom: 50px;">
                              <label for="email_address" class="text-center pb-3" >Your Email</label>
                              
                              <div class=" col-lg-6 col-md-6 col-sm-4 col-8 ">
                                  <input type="text" id="email_address" class="form-control text-center" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                    
                              </div>
                          </div>
                          <div class="row d-flex justify-content-center">
                          <div class=" col-lg-6 col-md-6 col-sm-4 pt-2  d-flex justify-content-center">
                              <button type="submit" class="btn btn-danger">
                                  Verify
                              </button>
                          </div>
                          </div>
                      </form>

                  </div>
            
          </div>
      </div>
  </div>
</main>
@endsection
