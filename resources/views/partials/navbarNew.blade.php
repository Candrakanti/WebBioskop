<!DOCTYPE html>
<html lang="en">
<head>
  <title>SEENEMA | {{$title}}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('landingPage/vendors/owl-carousel/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landingPage/vendors/owl-carousel/css/owl.theme.default.css') }}">
  <link rel="stylesheet" href="{{ asset('landingPage/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landingPage/vendors/aos/css/aos.css') }} ">
  <link rel="stylesheet" href="{{ asset('landingPage/css/style.min.css') }}">

  <style>
    html,body {
   height: 600%;
   margin: 0;
}
  </style>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100" >
  <header id="header-section" >
    <nav class="navbar mb-5 navbar-expand-lg pl-3 pl-sm-0 bg-white" id="navbar" class="pb-5">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="{{asset('landingPage/images/Group2.svg') }}"  alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src=" {{asset('landingPage/images/Group2.svg') }}" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ ($title === "Home")? 'active' : '' }}" href="/" >HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Movie")? 'active' : '' }}"  href="/movie" >MOVIE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($title === "Ticket")? 'active' : '' }}"  href="/ticket"">TICKET</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Mycgv")? 'active' : '' }}" href="/mycgv">MYSEENEMA</a>
          </li>
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  
  <script src="{{ asset('landingPage/vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('landingPage/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('landingPage/vendors/owl-carousel/js/owl.carousel.min.js') }} "></script>
  <script src="{{ asset('landingPage/vendors/aos/js/aos.js') }} "></script>
  <script src="{{asset('landingPage/js/landingpage.js')}}"></script>
</body>
</html>