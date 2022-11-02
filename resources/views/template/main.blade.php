<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>SeeNema </title>
</head>

<body>
    @include('partials.navbarNew')

    <section id="playing">
        <div class="container" style="margin-bottom: 5%">

            <div class="row pt-5">
                <div class="col-8">

                    <div class="row text-end">
                        <div class="col-3 col-lg-2 col-md-2 col-sm-2 ">
                            <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">PLAYING</a>
                        </div>
                        <div class="col-3  col-lg-2 col-md-2 col-sm-2">
                            <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">UPCOMING</a>
                        </div>
                    </div>

                </div>

                <div class="col-3 col-lg-4 col-md-4 col-sm-4">
                    <li class="nav-item dropdown" style="  list-style-type: none !important;">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pilih Kota
                        </a>

                        <ul class="dropdown-menu">
                            @foreach ($data as $dt)
                                <p>{{ $dt->kota }}</p>
                            @endforeach

                        </ul>
                    </li>

                </div>

                <div class="col-3 col-lg-4 col-md-4 col-sm-4">
                    <li class="nav-item dropdown" style="  list-style-type: none !important;">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pilih Kota
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($data as $dt)
                                {{-- <p>{{ $dt->detail_kota }}</p> --}}
                                @foreach ($dt->detail_kota as $dt)
                                    <p>{{ $dt['value'] }}</p>
                                @endforeach
                            @endforeach
                        </ul>
                    </li>

                </div>


            </div>
    </section>

    <div class="container ">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
