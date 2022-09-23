<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/film" class="nav-link">
          <i class="nav-icon bi bi-people-fill" style="color:rgb(255, 255, 255)"></i>
          <p style="color:rgb(255, 255, 255)">
            BERANDA
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/crudFilm" class="nav-link">
          <i class="fa-solid fa-film" style="color:rgb(255, 255, 255)"></i>
          <p style="color:rgb(255, 255, 255)">
            FILM
          </p>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a href="/logout" method="post" class="nav-link">
          <i class="fa-solid fa-film" style="color:rgb(255, 255, 255)"></i>
          <p style="color:rgb(255, 255, 255)">
            LOGOUT
          </p>
        </a>
      </li> --}}

      <li class="nav-item" style="padding-top:170%;">
          <form action="/logout" method="post" class="nav-link">
            @csrf
            <button type="submit" class="nav-link text-start" style=" margin-left: 40px">
              <p style="color: rgb(255, 255, 255)">
                Logout
              </p> <i class="fa-sharp fa-solid fa-right-from-bracket" style="color: #fff"></i>
            </button>
            </form>
      </li>
    </ul>
  </nav>

  <script>
    $('#ok').click(function(){
      $('#sip').toggle("slow");

    });
    var toggler = document.getElementsByClassName("caret");
    var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
   
  </script>