
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-lg-5 mx-auto">
            <img class="label ms" src="img/SeeNemass.png" alt="" width="150" height="150" style="margin-left: 200px;" >
        </div>
    </div>
</div>

<div class="row justify-content-center">


    <div class="col-md-8">

        <main class="form-registration w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <form action="/register" method="post">
                @csrf


                <div class="form-floating">
                    <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror"  id="name" placeholder="name" autofocus required value="{{ old('name') }}">
                    <label for="name">name</label>
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid  @enderror"  id="username" placeholder="username" required value="{{ old('username') }}">
                    <label for="username">username</label>
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror"  id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror"  id="password" placeholder="Password" required value="{{ old('password') }}">
                    <label for="password">password</label>
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>


              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

            </form>

            <small class="d-block text-center mt-3">Already Have Account? <a href="/login">Login Now ! </a></small>

          </main>
    </div>
</div>


@endsection
