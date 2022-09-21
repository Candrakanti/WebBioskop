@extends('layouts.main')

@section('container')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8 col-sm-4" style="padding-bottom: 50px;">           
                  <div class="card-header text-center pb-2" style="font-size:30px">Change Password</div>
                  <div class="card-body">
                      <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
                          <div class="row">
                          <div class="form-group row d-flex justify-content-center" style="padding-bottom: 50px;">
                              <label for="email_address" class="col-form-label text-md-right d-flex justify-content-center" style="font: size 15px;">E-Mail Address</label>
                              <div class="col-md-8 col-lg-8 col-sm-5">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          </div>

                        <div class="row" >
                            <div class="col-6">
                          <div class="form-group text-center" style="padding-bottom: 50px; ">
                              <label for="password" class="col-form-label text-md-right" style="font: size 15px;"> New Password</label>
                              
                                   <input type="password" id="password" class="form-control col-4 " name="password" required >
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                                 
                              </div>
                          </div>

                          <div class="col-6">
                          <div class="form-group ">
                            
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right"  style="font: size 15px;">Confirm Password</label>
                              
                                  <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                              
                              </div>
                          </div>

                          </div>

                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Reset Password
                              </button>
                          </div>
                      </form>
                  </div>
          </div>
      </div>
  </div>
</main>
@endsection
