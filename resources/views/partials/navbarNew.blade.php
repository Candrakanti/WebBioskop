<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <img class="label ms" src="img/SeeNemass.png" alt="" width="150" height="150" style="margin-left: 200px;" >
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mb-3">
          <li class="nav-item ">
            <a class="nav-link" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MOVIE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">TICKET</a>
          </li>
          <li>
            <a class="nav-link" href="/mycgv">MYCGV</a>
          </li>
            <li class="nav-item">
                {{-- <a href="/login" class="nav-link "> <i class="fa-solid fa-right-to-bracket"></i> Login</a> --}}
                <a href="/login" class="nav-link {{ ($title === "Login")? 'active' : '' }} "> <i class="fa-solid fa-right-to-bracket"></i> Login</a>
        </ul>
    </div>
    </div>
  </nav>
  <div class="container mb-1">
    <hr class="border border-danger border-2 opacity-50">
</div>

