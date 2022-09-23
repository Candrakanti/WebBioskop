@extends('layouts.main')
@section('container')

<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              
                  <div class="text-center mb-5"> <h3 class="fw-semibold">Change Password</h3></div>
          </div>

                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                            <div class="row">
                                <div class="col-12 col-lg-12 col-md-12 text-center">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Your E-Mail Address</label>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-4 col-lg-4 col-md-4 ">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                           
                          
                                
                                  
                             <div class="row d-flex justify-content-center mt-5">

                                 <div class="col-md-6 text-center">
                                     <button type="submit" class="btn btn-danger">
                                         Send Password Reset Link
                                     </button>
                                 </div>
                             </div>
                      </form>

                  
          </div>
      </div>
  </div>


</main>
@endsection
