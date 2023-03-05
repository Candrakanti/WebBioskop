@extends('layouts.main')

@section('container')
    {{-- <form method="POST" action="{{ route('booking', $data->id_jadwal) }}">
        @csrf --}}
        
        {{-- {!! QrCode::generate('Make me into a QrCode!'); !!}
       
        <div> <a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate('Generate any QR Code!')) !!} " download>Downloads</a></div>
         --}}
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
                                <p class="text-center"> {{ $data->jenis_studio }} : RP. {!! $data->harga !!}</p>
                            </div>

                            @if ($data->jenis_studio === 'Regular')

                                <div class="seats" id="seats" name="harga">

                                        @foreach(range('A',$data->jumlah_row) as $v)
                                        {{-- <h1>{{ $d->status_bayar }}</h1> --}}
                                        <div class="row">
                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <nav class="nav flex-column">               
                                                                <a class="nav-link text-dark border-0" href="#">{{ $v}} </a>
                                                              </nav>
                                                </div>
                                              
                                                 
                                           

                                                <div class="col-4 col-lg-4 col-sm-4">
                                                        @for($i = 1; $i<=$data->jumlah_kursi_perrow; $i++)
                                                        <input type="checkbox" class="ms-1"   name="kursi[]"  data-value=" {{  $v}}{{  $i}}" value="{{ $data->harga }}"  style="width:32px; height:25px;"
                                                        @if($data->id_jadwal == $data->id_jadwal)
                                                        @foreach($data2 as $key=>$d)
        
                                                       @if($d->id_jadwal == $data->id_jadwal and $d->kursi == $v.$i )
                                                       @if($d->tanggal_booking == Carbon\Carbon::now()->format('Y-m-d') )
                                                     
                                                       @foreach($book as $p)
                                                     
                                                       @if($p->status_bayar == "1" or $p->status_bayar == "0")
                                                       disabled
                                                       @endif
                                                       @endforeach

                                                     
                                                       @endif
                                                       @endif
                                                        @endforeach
                                                          @endif
                                                        >
                                                        @endfor

                                                        <div class="row ms-1 ">
                                                            @for($i = 1; $i<=$data->jumlah_kursi_perrow; $i++)
                                                            <input type="text" class="border border-0 p-2 mb-2 text-bg-light"  disabled placeholder="{{ $v }}{{ $i }}" style="width:40px; height:20px;">
                                                            @endfor
                                                    </div>
                                                </div>
                                                {{-- <div class="col-4">
                                                        @for($i = 6; $i<=10; $i++)
                                                        <input type="checkbox" class="ms-1"   name="kursi[]"  data-value=" {{  $v}}{{$i}}" value="{{ $data->harga }}"  style="width:32px; height:25px;"
                                                        @if($data->id_jadwal == $data->id_jadwal)
                                                        @foreach($data2 as $key=>$d)
        
                                                       @if($d->id_jadwal == $data->id_jadwal and $d->kursi == $v.$i )
                                                       @if($d->tanggal_booking == Carbon\Carbon::now()->format('Y-m-d') and $p )

                                                     
                                                       disabled
                                                
                                                       @endif
                                                       @endif
                                                        @endforeach
                                                          @endif
                                                        >
                                                        @endfor
                                                        <div class="row ms-1">
                                                            @for($i = 6; $i<=10; $i++)
                                                            <input type="text" class="border border-0 p-2 mb-2 ms1 text-bg-light"  disabled placeholder="{{ $v }}{{ $i }}" style="width:40px; height:25px;">
                                                            @endfor
                                                    </div>
                                                </div> --}}

                                            
                                        </div>
                                            @endforeach  

                                </div>

                                {{-- BUAT VELVET STUDIO --}}
                                @else
                                <div class="seats" id="seats" name="harga">

                                        {{-- <h1>contoh</h1>
                                    
                                        @if($data->id_jadwal == $data->id_jadwal)
                                      @foreach($data2 as $d)
                                      @if($d->id_jadwal === $data->id_jadwal)
                                    <h1>{{ $d->kursi }}</h1>
                                      @endif
                                      @endforeach
                                        @endif
                                    
                                     <H1>Selesai</H1>
<h1>{{ $data->jam_tayang }}</h1> --}}
                                        @foreach(range('A',$data->jumlah_row) as $v)
                                        <div class="row">
                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <nav class="nav flex-column">               
                                                                <a class="nav-link text-dark border-0" href="#">{{ $v}} </a>
                                                              </nav>
                                                </div>
                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                    
                                                     <div class="container">
                                                                <div class="container">
                                                                        <div class="row">
                                                                           
                                                                                @for($i = 1; $i<=$data->jumlah_kursi_perrow; $i++)
                                                                                <input type="checkbox" class="ms-1"   name="kursi[]"  data-value=" {{  $v}}{{  $i}}" value="{{ $data->harga }}"  style="width:40px; height:25px;"
                                                                                @if($data->id_jadwal == $data->id_jadwal)
                                                                                @foreach($data2 as $key=>$d)
                                
                                                                               @if($d->id_jadwal == $data->id_jadwal and $d->kursi == $v.$i )
                                                                               @if($d->tanggal_booking == Carbon\Carbon::now()->format('Y-m-d'))
                                                                               @if( $d->jam_booking  == $data->jam_tayang  )
                                                                             
                                                                               disabled
                                                                        
                                                                               @endif
                                                                               @endif
                                                                               @endif
                                                                                @endforeach
                                                                                  @endif
                                                                                >
                                                                                @endfor
                                                                        </div>
                                                                              
                                                                        <div class="row">
                                                                                @for($i = 1; $i<=$data->jumlah_kursi_perrow; $i++)
                                                                                <input type="text" class="border border-0 p-2 mb-2 ms-1 " disabled placeholder="{{ $v }} {{ $i }}" style="width:40px; height:25px;">
                                                                                @endfor
                                                                        </div>

                                                                </div>                                                                                                                  
                                                     </div>
                                                            
                                                      {{-- TARO SINI VELVET SEAT --}}
                                                      {{-- SAMPE SINI --}}
                                                 
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
                                                <p>{{ $data->nama_bioskop }} , {{ $data->alamat }}</p>
                                            </b></div>
                                    </div>
    
                                    <div class="row ">
                                        <div class="col-5 col-lg-5 col-sm-5 col-md-5">
                                            <p>Date & Time :

                                        </p>
                                        </div>
                                        <div class="col-6"> <b>
                                                <p> {{ \Carbon\Carbon::now()->format('l d M') }}  , {{ $data->jam_tayang }}</p>
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
                                                 name="kursi[]" id="seat">
                                            </div>

                                            <div class="pt-3">
                                                <input class="form-control btn btn-secondary text-dark" type="hidden"
                                                  readonly value="{{ Auth::user()->id }}"
                                                 name="id_customer" id="seat">
                                            </div>
                                               
                                            <div class="pt-3" class="totalchecked">
                                                <input class="form-control" type="text" placeholder="Jumlah Kursi Yang Anda Pilih"
                                                name="jumlah_kursi" aria-label="readonly input example" class="totalchecked"  readonly id="count_seat">
                                            </div>

                                            <div class="pt-3">
                                                <input class="form-control" type="hidden" 
                                                name="status_bayar" value="0" id="status_bayar">
                                            </div>

                                            <div class="pt-3">
                                                <input class="form-control" type="text" 
                                                name="judul_film" value="{{ $data->judul_film }}">
                                            </div>

                                            <div class="pt-3">
                                                <input class="form-control" type="hidden" 
                                                name="id_jadwal" value="{{ $data->id_jadwal}}">
                                            </div>

                                            <div class="pt-3">
                                                <input class="form-control" type="hidden" 
                                                name="jam_tayang" value="{{ $data->jam_tayang}}">
                                            </div>

                                            <div class="pt-3">
                                              
                                             Rp. <span class="badge rounded-pill text-bg-secondary border-0">
                                                <input class="form-control" type="text" readonly
                                                name="harga" aria-label="Disabled input example"style=" background: transparent; border: none; color:black;" id="price">
                                                </span>  
                                            </div>
                                           
                                            <div class="container text-center mt-3">
                                                    <button type="submit" class="btn btn-primary" id="pay-button" disabled data-bs-toggle="modal" href="#exampleModalToggle"  role="button">BOOK NOW </button>
                                            </div>  

                                         
                                {{-- </div> --}}

                                       {{-- MODAL PEMBAYARAN MANUAL DARI SINI --}}
                                       
                                       <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="exampleModalToggleLabel">SEENEMA - Bioskop </h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="padding: 0;">
                                                <ul class="list-group">
                                         <div class="card" >
                                                <img src="/img/movie.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                      

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

                                                                <div class="">
                                                                        <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih"
                                                                        name="nama_bank" aria-label="Disabled input example" readonly  id="bank2">
                                                                   </div>
                                                    
                                                                
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
                                                                name="harga"  style=" background: transparent; border: none; color:black;" aria-label="Disabled input example" readonly  id="price2">
                                                            </div>  
                                                        
                                                            <div class="container">
                                                                <h3>Pilih Metode Bayar </h3>
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

                                                            <div class="checkout" id="checkout">
                                                                {{-- @foreach ($data3 as $b) --}}
                                                                <li class="list-group-item" style="padding: 0.75rem 5rem;">
                                                                  <input class="form-check-input me-1" type="radio" name="payment_type" value="{{"mandiri"}}"  >
                                                                  <label class="form-check-label" for="firstRadio">{{ "mandiri" }}</label>
                                                                </li>
                                                                {{-- @endforeach --}}
                                                            </div>

                                                        <div class="">
                                                                <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih"
                                                                aria-label="Disabled input example" disabled id="bank" >
                                                        </div> 
                                               
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
                                                
                                                <div class="">
                                                        <input class="form-control" type="hidden"
                                                        name="payment_type" aria-label="Disabled input example" readonly  id="bank2">
                                                        {{-- <input class="form-control" type="hidden"
                                                        name="id_bank" aria-label="Disabled input example" readonly  id="id_bank"> --}}
                                                   </div> 

                                                <div class="">
                                                        <input class="form-control btn btn-secondary text-dark" type="hidden"
                                                            placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" readonly
                                                         name="kursi" id="seat3">
                                                    </div>
                                            
                                                <div class="">
                                                     @if($generateBK == $generateBK)
                                                        <input class="form-control btn btn-secondary text-dark" type="hidden"
                                                            placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" value=" {{ $generateBK }} " readonly
                                                         name="id_booking" id="id_booking">
                                                         @endif
                                                        
                                                    </div>
                        
                                                    {{-- <div class="" class="bukti_bayar">
                                                        <img name="bukti_bayar" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(50)->generate('Generate any QR Code!')) !!} ">
                                                    </div> --}}

                                                    <div class="" class="totalchecked">
                                                        <input class="form-control" type="hidden"
                                                        name="jumlah_kursi" aria-label="Disabled input example" readonly class="totalchecked"  id="count_seat3">
                                                    </div>
        
                                                    <div class="">
                                                        <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih" 
                                                        name="status_bayar" value="0" id="status_bayar">
                                                    </div>

                                                    <div class="pt-3">
                                                        <input class="form-control" type="hidden" 
                                                        name="jam_booking" value="{{ $data->jam_tayang}}">
                                                    </div>

                                                    <div class="" class="totalchecked">
                                                       <h5>Virtual account number</h5>
                                                       <div class="">
                                                        @if($generatePY == $generatePY)
                                                           <input class="form-control btn btn-secondary text-dark" type="text"
                                                               placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" value=" {{ $generatePY }} " readonly
                                                            name="id_payment">
                                                            @endif 
                                                       </div>
                                                    </div>

                                                    <div class="">
                                                        <p>Jumlah Yang Harus Dibayar : RP.</p>
                                                        <input class="form-control" type="hidden" 
                                                         name="status_bayar" aria-label="Disabled input example" readonly  value="0" id="status_bayar">
                                                    </div>

                                                    <div class="">
                                                        <input class="form-control" type="text"
                                                        name="harga" aria-label="Disabled input example" readonly id="price3">
                                                    </div>

                                                    
                                                    

                                                  
                                                     {{-- Dari sini grid modal 2 --}}
                                                    {{-- <div class="row">
                                                        <div class="col-5 col-lg-5 col-md-5 col-xs-5">
                                                                <div class="mb-3">
                                                                        <label for="image" class="form-label"> Masukkan bukti bayar anda!</label>
                                                                        <img class="img-preview img-fluid mb-3 col-sm-5" style="width: 100%">
                                                                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                                                            name="bukti_bayar" >
                                                                        @error('image')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>  
                                                        </div>

                                                        <div class="col-7 col-lg-7 col-md-7 col-xs-7" id="image">

                                                        </div>
                                                    </div> --}}

                                                      {{-- <div class="mb-3">
                                                        <label for="image" class="form-label">Post Image</label>
                                                        <img class="img-preview img-fluid mb-3 col-sm-5" style="width: 100%">
                                                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                                            name="bukti_bayar">
                                                        @error('image')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>   --}}
                   
                                                    
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-primary" data-bs-toggle="modal" role="button"  id="final-pay" > Bayar Sekarang </button>
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
                                       {{-- SAMPE SINI  --}}
   
    {{-- </form> --}}

    {{-- <script type="text/javascript">
       
                         // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{ $snapToken }}');
          // customer will be redirected after completing payment pop-up
        });

// MINDTRANS YANG BARU YANG INI

//                         var payButton = document.getElementById('pay-button');
//       payButton.addEventListener('click', function () {
//         // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
//         window.snap.pay('{{ $snapToken }}', {
//           onSuccess: function(result){
//             /* You may add your own implementation here */
//             alert("payment success!"); console.log(result);
//           },
//           onPending: function(result){
//             /* You may add your own implementation here */
//             alert("wating your payment!"); console.log(result);
//           },
//           onError: function(result){
//             /* You may add your own implementation here */
//             alert("payment failed!"); console.log(result);
//           },
//           onClose: function(){
//             /* You may add your own implementation here */
//             alert('you closed the popup without finishing the payment');
//           }
//         })
//       });
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-J2rfx6Vxst6_Ivc_"></script>
      </script> --}}

      <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
           
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

    <script>

        $(document).ready(function() {

                $('#kursi').wrap(
                            '@foreach($data2 as $d) @endforeach'
                        );

            $('.seats').click(function() {
                var test = new Array();  

                $("input[name='kursi']:checked").each(function() {
                                test.push($(this).data('value'));          
                }); 


                var check =    $(":checkbox:checked").length;


           document.getElementById('seat').value = test ;
           document.getElementById('seat2').value = test ;
           document.getElementById('seat3').value = test ;

           $('.checkout').click(function() {
                var bank = $('input[name="payment_type"]:checked').val();
           
                document.getElementById('bank').value = bank;
                document.getElementById('bank2').value = bank;

                });

           var check =    $(":checkbox:checked").length;
           document.getElementById('count_seat').value=  check;
           document.getElementById('count_seat2').value=  check;
           document.getElementById('count_seat3').value=  check;
                var input = document.getElementsByName("kursi[]");
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
                        
                                function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                timer = duration;
                }
        }, 1000);
        }

        window.onload = function () {
        var fiveMinutes = 60 * 1,
                display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
        };

                        $('#gap_form').wrap(
                                '<form id="Form2" enctype="multipart/form-data"  action="{{ route('cart.store', $data->id_jadwal) }}" method="POST" ></form>'
                        //     '<form id="Form2"  action="/mindtrans" method="GET" ></form>'
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
