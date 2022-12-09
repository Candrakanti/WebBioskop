
                                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="exampleModalToggleLabel">{{ auth()->user()->name }}</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" style="padding: 0;">
                                                        <ul class="list-group">

                                                                {{-- <div class="card" >
                                                                        <img src="/img/movie.png" class="card-img-top" alt="...">
                                                                        <div class="card-body">
                                                                                <h2 class="modal-title fs-5" id="exampleModalToggleLabel"><b>Total</b></h2>
                                                                                     <input class="form-control" type="text" placeholder="harga Yang Anda Pilih"
                                                                                     name="harga" aria-label="Disabled input example" readonly  id="price2">
                                                                        </div>
                                                                </div>
                                                 --}}

                                                 <div class="card" >
                                                        <img src="/img/movie.png" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                          {{-- <div class="ratio ratio-16x9" style="background: red;"> --}}
                                                                <div class="accordion" id="accordionExample">
                                                                        <div class="accordion-item">
                                                                          <h2 class="accordion-header" id="headingOne">
                                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                               <p class="pt-3"><strong> Total </strong> </p> &nbsp;
                                                                               <p class="pt-3" > <input class="form-control" type="text" placeholder="harga Yang Anda Pilih"
                                                                                     name="harga" aria-label="Disabled input example" readonly  id="price2"></p>
                                                                            </button>

                                                                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                            <div class="accordion-body">

                                                                                <div class="row">
                                                                                 <div class="col-6">
                                                                                  <p class="" id="exampleModalToggleLabel">{{ auth()->user()->name }}</p>
                                                                                </div>

                                                                                <div class="col-6">
                                                                                   <p class="" id="exampleModalToggleLabel">{{ auth()->user()->email }}</p>
                                                                                </div>
                                                                            </div>
                                                                                
                                                                                
                                                                            </div>
                                                                          </div>
                                                                        </div>
                
                                                        </div>
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
                                                                        name="harga" aria-label="Disabled input example" readonly  id="price2">
                                                                    </div>  
                                                                
                                                                    <div class="container">
                                                                        <h3>Select Method</h3>
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
                                                                        @foreach ($data3 as $b)
                                                                        <li class="list-group-item" style="padding: 0.75rem 5rem;">
                                                                          <input class="form-check-input me-1" type="radio" name="nama_bank" value="{{$b->nama_bank}}"  >
                                                                          <label class="form-check-label" for="firstRadio">{{ $b->nama_bank }}</label>
                                                                        </li>
                                                                        @endforeach
                                                                    </div>

                                                                <div class="">
                                                                        <input class="form-control" type="text" placeholder="harga Yang Anda Pilih"
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
                                                                <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih"
                                                                name="nama_bank" aria-label="Disabled input example" readonly  id="bank2">
                                                           </div> 

                                                        <div class="">
                                                                <input class="form-control btn btn-secondary text-dark" type="hidden"
                                                                    placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" readonly
                                                                 name="kursi" id="seat3">
                                                            </div>
                                                    
                                                        <div class="">
                                                             @if($generateBK == $generateBK)
                                                                <input class="form-control btn btn-secondary text-dark" type="text"
                                                                    placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" value=" {{ $generateBK }} " readonly
                                                                 name="id_booking" id="id_booking">
                                                                 @endif
                                                                
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
                                                               <div class="">
                                                                @if($generatePY == $generatePY)
                                                                   <input class="form-control btn btn-secondary text-dark" type="text"
                                                                       placeholder="Kursi Yang Anda Pilih" aria-label="Disabled input example" value=" {{ $generatePY }} " readonly
                                                                    name="id_payment">
                                                                    @endif 
                                                               </div>
                                                            </div>

                                                            <div class="">
                                                                <input class="form-control" type="hidden" placeholder="harga Yang Anda Pilih" 
                                                                name="status_bayar" aria-label="Disabled input example" readonly  value="0" id="status_bayar">
                                                            </div>

                                                            <div class="">
                                                                <input class="form-control" type="text" placeholder="harga Yang Anda Pilih"
                                                                name="harga" aria-label="Disabled input example" readonly id="price3">
                                                            </div>

                                                            
                                                            

                                                          
                                                             {{-- Dari sini grid modal 2 --}}
                                                            <div class="row">
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
                                                            </div>

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
                                                      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" role="button"  id="final-pay" >Done</button>
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
                    // $('#gap_form').wrap(
                    //     '<form id="Form2" enctype="multipart/form-data"  action="{{ route('cart.store', $data->id_jadwal) }}" method="POST" ></form>'
                    // );
                    // MASUKIN SCRIPT MINDTRANS DISINI !
                        // For example trigger on button clicked, or any time you need
  var payButton = document.getElementById("pay-button");
  payButton.addEventListener('click', function () {
    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
    window.snap.pay('{{ $snapToken }}');
    // customer will be redirected after completing payment pop-up
  });
                } else {
                    document.getElementById("pay-button").disabled = true;
                }