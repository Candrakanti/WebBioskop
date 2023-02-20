@extends('layouts.main')

@section('container')

<div class="contact-in">
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5110.49192495496!2d107.55802492352579!3d-6.89043319920927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bd6aaaaaab%3A0xf843088e2b5bf838!2sSMKN%2011%20Bandung!5e0!3m2!1sid!2sid!4v1673754669758!5m2!1sid!2sid" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="contact-form">
        <div class="container">
            <span class="big-circle"></span>
            <div class="form">
              <div class="contact-info">
                <h3 class="title"><b>Contact Info</b></h3>
                <p class="text">
                  Laporkan jika terjadi kesalahan
                </p>
      
                <div class="info">
                  <div class="information">
                    <img src="img/ema.png" style="width: 32px" class="icon" alt="" />
                    <p>seenema@gmail.com</p>
                  </div>
                  <div class="information">
                    <img src="img/phh.jpg" class="icon" alt="" />
                    <p>123-456-789</p>
                  </div>
                </div>
      
                <div class="social-media">
                  <p>Connect with us :</p>
                  <div class="social-icons">
                    <a href="https://www.facebook.com/">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/?lang=id">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/">
                      <i class="fab fa-instagram"></i>
                    </a>
                    {{-- <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a> --}}
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection