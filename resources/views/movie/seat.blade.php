@extends('layouts.main')
@section('container')
    {{-- <form method="POST" action="{{ route('booking.show', $data->id_jadwal) }}">
        @csrf --}}
        <div class="row" >
            
                <div class=" col-lg-8 col-md-7 col-sm-12 col-xs-12">
    
                    <div class="card border border-5">
                        <div class="card-body ">
                            <div class="img d-flex justify-content-center">
                                <img src="{{ asset('img/line.png') }}" width="80px"
                                    class="rounded d-flex justify-content-center">
                            </div>
    
                            <p class="card-text text-center pt-1">SCREEN</p>
                           
    
                            <div class="alert alert-danger" role="alert">
                                <p class="text-center"> {!! $data->jenis_studio !!} : {!! $data->harga !!}</p>
                            </div>

                            @if ($data->jenis_studio === 'Regular')

                   
                            <h1>contoh</h1>
                            
                               @if($data->id_jadwal == $data->id_jadwal)
                             @foreach($data2 as $d)
                             @if($d->id_jadwal === $data->id_jadwal)
                       <h1>{{ $d->kursi }}</h1>
                             @endif
                             @endforeach
                               @endif

                            <H1>Selesai</H1>



                                <div class="seats" id="seats" name="harga">

                                    <div class="row  g-0 mx-0 ">
                                        <div class="col-4 col-lg-4  col-sm-4 col-md-4 px-0">

                             
                                                <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="H1" 
                                                         class="class"  name="kursi"
                                                         @if($data->id_jadwal == $data->id_jadwal)
                                                         @foreach($data2 as $d)
                                                         @if($d->id_jadwal === $data->id_jadwal )

                                                         @if(is_array(old('kursi')) && ('H1'==old('kursi')))
                                                          disabled
                                                           @endif
                                                    
                                                         @endif
                                                         @endforeach
                                                           @endif>
                                                    </label>
            
                                                    <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="H2"
                                                        name="kursi"
                                                        @if($data->id_jadwal == $data->id_jadwal)
                                                        @foreach($data2 as $d)
                                                        @if($d->id_jadwal === $data->id_jadwal )
    
                                                        {{-- @if( old('kursi') || (!old('submit') && $voucher->active) ) checked='checked' @endif --}}

                                                        @endif
                                                        @endforeach
                                                          @endif
                                                        ></label> <br>
    
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="G1"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'G1')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>
    
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="G2"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'G2')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>
    
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="G3"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'G3')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label> <br>
    
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="F1"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'F1')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>
    
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="F2"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'F2')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>
    
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="F3"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'F3')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label> <br>
    
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="E1"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'E1')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="E2"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'E2')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="E3"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'E3')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label><br>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="D1"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'D1')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="D2"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'D2')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="D3"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'D3')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label><br>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="C1"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'C1')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="C2"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'C2')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="C3"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'C3')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label><br>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="B1"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'B1')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="B2"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'B2')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="B3"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'B3')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label><br>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="A1"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'A1')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="A2"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'A2')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="A3"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'A3')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>
    
                                        </div>
    
                                        <div class="col-4 col-lg-4 col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="H3"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'H3')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="H4"
                                                    name="kursi" 
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'H4')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="H5"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'H5')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label><br>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="G4"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'G4')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="G5"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'G5')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="G6"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'G6')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="F4"
                                                    name="kursi"
                                                    @if($data->id_jadwal == $data->id_jadwal)
                                                    @foreach($data2 as $d)
                                                    @if($d->id_jadwal === $data->id_jadwal and $d->kursi == 'F4')
                                                   disabled
                                                    @endif
                                                    @endforeach
                                                      @endif
                                                    ></label>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="F5"
                                                    name="kursi"></label>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="F6"
                                                    name="kursi"></label><br>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="E4"
                                                    name="kursi"></label>

                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="E5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="E6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="D4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="D5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="D6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="C4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="C5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="C6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="B4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="B5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="B6"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="A4"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="A5"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="A6"
                                                    name="kursi"></label>
    
    
                                        </div>
    
                                        <div class="col-4 col-lg-4 col-sm-4 col-md-4 px-0">
                                            <label> <input type="checkbox" value="{!! $data->harga !!}" data-value="H6"
                                                    name="kursi"> </label>
    
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="H7"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="G7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="G8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="G9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="F7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="F8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="F9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="E7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="E8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="E9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="D7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="D8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="D9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="C7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="C8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="C9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="B7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="B8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="B9"
                                                    name="kursi"></label><br>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="A7"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="A8"
                                                    name="kursi"></label>
                                            <label><input type="checkbox" value="{!! $data->harga !!}" data-value="A9"
                                                    name="kursi"></label>
                                        </div>
                                    </div>
                                </div>

                                @else

                                <div class="seats" id="seats" name="harga">
                                        @foreach(range('A',$data->jumlah_row) as $v)
                                        <div class="row">
                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <nav class="nav flex-column">               
                                                                <a class="nav-link text-dark border-0" href="#">{{ $v }} </a>
                                                              </nav>
                                                </div>
                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                        @for($i = 1; $i<=$data->jumlah_kursi_perrow; $i++)
                                                        <input type="checkbox"   name="kursi"  data-value=" {{ $v }}{{$i }}" value="{{ $data->harga }}"
                                                        >
                                                         @endfor
                                                </div>
                                        </div>
                                            @endforeach  
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
    
                <div class=" col-lg-4 col-md-5 col-sm-12 col-xs-12 pt-sm-2 pt-xs-2 pt-3">
    
                    <div class="card border border-5">
                        <div class="card-body">
    
                            <div class="row g-0">
    
    
                                <div class="col-4 col-lg-4 col-sm-4 col-md-4">
                                    <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt=""
                                        width="auto" height="auto">
                                </div>
    
                                <div class="col-8">
    
                                    <p class="fw-bold">{{ $data->judul_film }}</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p>Cinema</p>
                                        </div>
                                        <div class="col-6"> <b>
                                                <p> XXI</p>
                                            </b></div>
                                    </div>
    
                                    <div class="row ">
                                        <div class="col-5 col-lg-5 col-sm-5 col-md-5">
                                            <p>Date & Time

                                        </p>
                                        </div>
                                        <div class="col-6"> <b>
                                                <p> {{ \Carbon\Carbon::now()->format('l d M ,') }}  {!! $data->jam_tayang !!}</p>
                                            </b></div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-6 col-lg-6 col-sm-6 col-md-6">
                                            <p>Studio </p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-sm-6 col-md-6"> <b>
                                                <p class="text-center">{{ $data->jenis_studio }}</p>
                                            </b>
                                        </div>
                                    </div>
    
    
                                </div>
    
                                {{-- <div class="book" id="gap_form">
                                        @csrf --}}
                                           <div class="pt-3">
                                                <input class="form-control btn btn-secondary text-dark" type="text"
                                                    placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" readonly
                                                 name="kursi" id="seat">
                                            </div>
                
                                            <div class="pt-3" class="totalchecked">
                                                <input class="form-control" type="text" placeholder="Jumlah Kursi Yang Anda Pilih"
                                                name="jumlah_kursi" aria-label="Disabled input example" class="totalchecked"  readonly id="count_seat">
                                            </div>

                                            <div class="pt-3">
                                                <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih" 
                                                name="status_bayar" value="0" id="status_bayar">
                                            </div>
                                            <div class="pt-3">
                                                <input class="form-control" type="text" placeholder="harga Yang Anda Pilih" readonly
                                                name="harga" aria-label="Disabled input example"  id="price">
                                            </div>
                                            
                                            <div class="container text-center mt-3">
                                                <button class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">BOOK NOW</button>
                                            </div>
                
                                            {{-- <div class="container text-center mt-3">
                                                    <button type="submit" class="btn btn-primary" id="pay-button" disabled>BOOK NOW </button>
                                            </div>   --}}
                                           
                                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="exampleModalToggleLabel">{{ auth()->user()->name }}</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" style="padding: 0;">
                                                        <ul class="list-group">
                                                                <div class="card"style="margin-bottom:30%;" >
                                                                        <img src="/img/movie.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                          {{-- <div class="ratio ratio-16x9" style="background: red;"> --}}
                                                                                <div class="container " style="padding-bottom: 0%">
                                                                                        <div class="accordion accordion-flush border border-5" id="accordionFlushExample">
                                                                                            <div class="accordion-item">
                                                                                                <h2 class="accordion-header" id="flush-headingOne">
                                                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                                                        <p class="pt-3"><strong> Total</strong> &nbsp; Rp. </p> 
                                                                                                            <p class="pt-3"><input class="form-control" type="text" readonly
                                                                                                             name="harga" aria-label="Disabled input example"  id="price2" style=" background: transparent; border: none; color:black;"></p>
                                                                                                         </div>
                                                                                                        </div>
                                                                                                    </button>
                                                                                
                                                                                
                                                                                                </h2>
                                                                                
                                                                                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                                                                                    data-bs-parent="#accordionFlushExample">
                                                                                                    <div class="accordion-body pt-2">
                                                                                                       <div class="row">
                                                                                                        <div class="col-6">
                                                                                                                <p class="" id="exampleModalToggleLabel">{{ auth()->user()->name }}</p>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                                <p class="" id="exampleModalToggleLabel">{{ auth()->user()->email}}</p>
                                                                                                        </div>
                                                                                                       </div>
                                                                                                        
                                                                                                       
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>                                                          

                                                                {{-- <div class="card" >
                                                                        <img src="/img/movie.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                                <h2 class="modal-title fs-5" id="exampleModalToggleLabel"><b>Total</b></h2>
                                                                                     <input class="form-control" type="text" placeholder="harga Yang Anda Pilih"
                                                                                     name="harga" aria-label="Disabled input example" readonly  id="price2">

                                                                        </div>
                                                                </div>
                                                 --}}

                                                                <div class="">
                                                                        <input class="form-control btn btn-secondary text-dark" type="hidden"
                                                                            placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" readonly
                                                                         name="kursi" id="seat2">
                                                                    </div>
                                        
                                                                    <div class="" class="totalchecked">
                                                                        <input class="form-control" type="hidden" placeholder="Jumlah Kursi Yang Anda Pilih"
                                                                        name="jumlah_kursi" aria-label="Disabled input example" readonly class="totalchecked"  id="count_seat2">
                                                                    </div>
                        
                                                                    <div class="">
                                                                        <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih" 
                                                                        name="status_bayar" value="0" id="status_bayar">
                                                                    </div>
                                                                    <div class="">
                                                                        <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih"
                                                                        name="harga" aria-label="Disabled input example" readonly  id="price2">
                                                                    </div>  
                                                                
                                                                    <div class="container">
                                                                        <h4>Select Method</h4>
                                                                </div>

                                                                {{-- <div class="mb-3">
                                                                        <label for="id_film" class="form-label">Id Film</label>
                                                                        <input class="form-control" list="judul_film" id="id_film" name="id_film" placeholder="Type to search...">
                                                                            <datalist id="judul_film">
                                                                            @foreach ($data1 as $js)
                                                                                <option value="{{ $js->id_film }}" selected>{{ $js->judul_film }}</option>
                                                                            @endforeach
                                                                            </datalist>
                                                                    </div> --}}

                                                                <li class="list-group-item" style="padding: 0.75rem 5rem;">
                                                                  <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
                                                                  <label class="form-check-label" for="firstRadio" id="BNI" >BNI</label>
                                                                  {{-- <img src="/img/bni-logo.png" class="card-img-top" alt="" style="width: 30%"> --}}

                                                                </li>
                                                                <li class="list-group-item" style="padding: 0.75rem 5rem;">
                                                                  <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                                                                  <label class="form-check-label" for="secondRadio">BCA</label>
                                                                </li>
                                                                <li class="list-group-item" style="padding: 0.75rem 5rem;">
                                                                  <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
                                                                  <label class="form-check-label" for="thirdRadio">BRI</label>
                                                                </li>
                                                       
                                                       </ul>
                                                    </div>
                                                   
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Next</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="book" id="gap_form" >
                                                @csrf
                                              <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Detail Pembayaran</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" >
                                                     
                                                                <img src="/img/movie.png" class="card-img-top" alt="...">
                                                        {{-- </div> --}}

                                                        <div class="">
                                                                <input class="form-control btn btn-secondary text-dark" type="hidden"
                                                                    placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" readonly
                                                                 name="kursi" id="seat3">
                                                            </div>
                                
                                                            <div class="" class="totalchecked">
                                                                <input class="form-control" type="hidden" placeholder="Jumlah Kursi Yang Anda Pilih"
                                                                name="jumlah_kursi" aria-label="Disabled input example" readonly class="totalchecked"  id="count_seat3">
                                                            </div>
                
                                                            <div class="">
                                                                <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih" 
                                                                name="status_bayar" value="0" id="status_bayar">
                                                            </div>

                                                            <div class="" class="totalchecked">
                                                               <h5>Virtual account number</h5>
                                                               <input class="form-control" type="text"
                                                               name="id_payment" aria-label="Disabled input example" value="AAA{{ auth()->user()->phone }}" readonly id="id_payment">
                                                            </div>

                                                            <div class="">
                                                                <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih" 
                                                                name="status" aria-label="Disabled input example" readonly  value="0" id="status_bayar">
                                                            </div>

                                                            <div class="">
                                                                <input class="form-control" type="text" placeholder="harga Yang Anda Pilih"
                                                                name="harga" aria-label="Disabled input example" readonly id="price3">
                                                            </div>

                                                            {{-- <div class="input-group mb-3">
                                                                <input type="file" class="form-control" id="inputGroupFile02">
                                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                              </div>   --}}
                                                              
                                                              <div class="mb-3">
                                                                <label for="image" class="form-label">Post Image</label>
                                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                                                    name="image" onchange="previewImage()">
                                                                @error('image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>  
                           
                                                            
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" role="button"  id="pay-button" disabled>Done</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                              
                            </div>    
                        </div>
                    </div>
    
                </div>
            </div>
   
    {{-- </form> --}}

    {{-- <script type="text/javascript">
       
        //                  // For example trigger on button clicked, or any time you need
        // var payButton = document.getElementById('pay-button');
        // payButton.addEventListener('click', function () {
        //   // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        //   window.snap.pay('{{ $snapToken }}');
        //   // customer will be redirected after completing payment pop-up
        // });
      </script> --}}

    <script>
        
        $(document).ready(function() {
                $('#kursi').wrap(
                            '@foreach($data2 as $d) @endforeach'
                        );

            $('.seats').click(function() {
                var test = new Array();
                var book ="H1";
                $("input[name='kursi']:checked").each(function() {
                                test.push($(this).data('value'));          
                }); 

                var check =    $(":checkbox:checked").length;
           document.getElementById('seat').value = test ;
           document.getElementById('seat2').value = test ;
           document.getElementById('seat3').value = test ;

           document.getElementById('count_seat').value=  check;
           document.getElementById('count_seat2').value=  check;
           document.getElementById('count_seat3').value=  check;
         
  
                var input = document.getElementsByName("kursi");
                var total = 0;
                for (var i = 0; i < input.length; i++) {
                    if (input[i].checked) {
                        total += parseFloat(input[i].value);
                    }
                }
                document.getElementById("price").value =  total.toFixed(2).replace(/\.00/g, '');
                document.getElementById("price2").value =  total.toFixed(2).replace(/\.00/g, '');
                document.getElementById("price3").value =  total.toFixed(2).replace(/\.00/g, '');

                document.querySelector('#seats').addEventListener('change', () => {
                    var seat = document.getElementById("seats");
                    var checkeds = seat.getElementsByTagName("INPUT");
                    var counter = 0;
                    for (let i = 0; i < checkeds.length; i++) {
                        if (checkeds[i].checked) {
                            counter++;
                        }
                    }
                    if (counter >= 1) {
                        document.getElementById("pay-button").disabled = false;
                        $('#gap_form').wrap(
                            '<form id="Form2" enctype="multipart/form-data"  action="{{ route('cart.store', $data->id_jadwal) }}" method="POST" ></form>'
                        );
                        // MASUKIN SCRIPT MINDTRANS DISINI !
                    } else {
                        document.getElementById("pay-button").disabled = true;
                    }
                });
            });
        });
     
    </script>
@endsection