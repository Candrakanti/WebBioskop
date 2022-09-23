<nav class="navbar navbar-expand-lg ">
    <div class="container d-flex justify-content-center">
        <img class="label ms" src="img/SeeNemass.png" alt="" width="150" height="150"  >
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav mb-3">
          <li class="nav-item ">

            <a class="nav-link {{ ($title === "Home")? 'active' : '' }}"  href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Movie")? 'active' : '' }}"  href="/movie">MOVIE</a>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Ticket")? 'active' : '' }}"  href="/ticket">TICKET</a>
            {{-- <a class="nav-link" href="#">TICKET</a> --}}
          </li>
          <li>
            <a class="nav-link {{ ($title === "Mycgv")? 'active' : '' }}"  href="/mycgv">MYCGV</a>
          </li>

        </ul>
    </div>
    </div>
  </nav>
  <div class="container mb-1">
    <hr class="border border-danger border-2 opacity-50">
</div>

