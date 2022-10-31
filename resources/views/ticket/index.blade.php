@extends('layouts.main')

@section('container')
    {{-- <div class="container pb-5" id="tanggal">
        hi
    </div> --}}
    @foreach ($data as $dt)
        <div class="row">

            <div class="col-5">
                <h5> {{ $dt->judul_film }}</h5>


                <div class="row">
                    <div class="col-12">
                        <p class="fw-light"> Studio {{ $dt->jenis_studio }}</p>
                    </div>
                </div>

            </div>


            <div class="col-7 text-end">

                Audiotori {{ $dt->audiotori }}
            </div>
        </div>

        {{-- <form action="add.to.cart" method="POST">
            @csrf
            @foreach ($dt->jam_tayang as $property) --}}
        {{-- <input type="text" name="jam_tayang" value="{{ $property['value'] }}" class="form-control"> --}}
        {{-- <button class="btn btn-dark" style="color: white">{{ $property['value'] }}</button>
            @endforeach
        </form> --}}
        
        <hr class="border border-secondary border-2 opacity-50">


            <div class="row justify-content-center ">
            
            
                <div class="col-md-8">
            
            
                <h1 class="h3 mb-3 fw-normal pb-3">Payment Details</h1>
            
                </div>
            </div>
            
            
            <div class="row pb-5">
            
                <div class="col-lg-6 col-md-6 col-xs-12 ">
                          <main class="form-registration w-100 m-auto">
                           
                                  @csrf
            
                                  <div class="row">
                                    <div class="col-10 col-lg-10 col-md-10 col-sm-6 offset-1 ">
                                      <div class="form-floating  mb-3">
                                        <input type="name" name="name" class="form-control @error('name') is-invalid  @enderror"  id="name" placeholder="name" required value="{{ old('name') }}">
                                        <label for="name">name</label>
                                        @error('email')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                        @enderror
                                      </div> 
                                     </div>
                                   </div>
            
                                 
                                 <div class="row">
                                  <div class="col-10 col-lg-10 col-md-10 col-sm-6 offset-1 ">
                                    <div class="form-floating  mb-3">
                                      <input type="studio" name="studio" class="form-control @error('studio') is-invalid  @enderror"  id="studio" placeholder="studio" required value="{{ old('studio') }}">
                                      <label for="studio"> type studio</label>
                                      @error('email')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                      @enderror
                                    </div> 
                                   </div>
                                 </div>
            
                                 
            
                                    <div class="row offset-1">
            
                                      <div class="col-5 col-lg-5 col-md-5 col-sm-5">
                                        <div class="form-floating mb-3">
                                          <input type="time" name="time" class="form-control @error('time') is-invalid  @enderror"  id="time" placeholder="Password" required value="{{ old('time') }}">
                                          <label for="time">time</label>
                                          @error('time')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                          @enderror
                                        </div>
                                      </div>
            
                                      <div class="col-5 col-lg-5 col-md-5 col-sm-5"> <div class="form-floating">
                                        <input type="seat" name="seat" class="form-control @error('seat') is-invalid  @enderror"  id="seat" placeholder="seat" required value="{{ old('seat') }}">
                                        <label for="seat">seat</label>
                                        @error('seat')
                                        <div class="invalid-feedback">
                                          {{ $message }}
                                        </div>
                                        @enderror
                                      </div></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-10 col-lg-10 col-md-10 col-sm-6 offset-1">
                                        <div class="form-floating  mb-3">
                                          <input type="method_payment" name="method_payment" class="form-control @error('method_payment') is-invalid  @enderror"  id="method_payment" placeholder="method_payment" required value="{{ old('method_payment') }}">
                                          <label for="method_payment">method payment</label>

                                          @error('method_payment')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                          @enderror
                                        </div> 
                                       </div>
                                     </div>
               
            
                                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Payment</button>
            
                            
            
                            </main>
                      </div>
            
                <div class="col-lg-6 col-md-6 col-xs-12 text-end d-none d-md-block d-sm-block">
                    <img src="img/register.png" width="70%" alt="...">
                </div>
            
            
            </div>
            
            


    @endforeach
@endsection