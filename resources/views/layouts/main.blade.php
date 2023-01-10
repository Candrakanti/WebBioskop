<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fontawesome.com/icons/pen-to-square?s=duotone">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  

    {{-- <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-J2rfx6Vxst6_Ivc_"></script> --}}

    {{-- TAILWIND DAN FLOWBITE --}}

    {{-- END TAILWIND DAN FLOWBITE --}}

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>SeeNema </title>
</head>

<body>

    @include('layouts.navbarNew')

    <div class="container">
        @yield('container')
    </div>

    <div class="container " style="padding-top: 10%">
        <div class="row">
            <footer class="border-top">
                <p class="text-center text-muted pt-4">Copyright ©2021 <a
                        href="https://www.instagram.com/penuh.rekayasa/?next=%2F" class="px-1" target="_blank">
                        SEENEMA </a> All rights reserved.</p>
                <p class="text-center text-muted pt-2">Dibuat Oleh: <a class="px-1" target="_blank"> 12 RPL 1 WEB
                        BIOSKOP </a></p>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"></script>

     
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

</body>

</html>
