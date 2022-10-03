@extends('layouts.main')

@section('container')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">

                      <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">

                          <div class="form-group row d-flex justify-content-center">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 text-center">
                                    <label for="email_address" class=" col-form-label text-md-right" >E-Mail Address</label>
                                </div>
                                </div>
                             
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>


                          <div class="row d-flex justify-content-center text-center">

                            <div class="col-6 col-md-6 col-sm-6 ">
                                <div class="form-group row d-flex justify-content-center text-center">
                                    <div class="row d-flex justify-content-center text-center">
                                        <div class="col-6 col-md-6 col-sm-6 text-center">
                                            <label for="password" class=" col-form-label text-md-right">Password</label>
                                        </div>
                                    </div>
                                  
                                    <div class="col-md-6 col-6 col-sm-6 text-center">
                                        <input type="password" id="password" class="form-control" name="password" required autofocus>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6 col-sm-6">

                                <div class="form-group row d-flex justify-content-center text-center">
                                    <div class="row d-flex justify-content-center text-center">
<div class="col-8 col-md-8 col-sm-8 text-center">
    <label for="password-confirm" class=" col-form-label text-md-right">Confirm Password</label>
</div>
                                    </div>
                                  
                                    <div class="col-md-6 col-sm-6">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                          </div>

                         


                          <div class="col-12 text-center">
                              <button type="submit" class="btn btn-primary">
                                  Reset Password
                              </button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection