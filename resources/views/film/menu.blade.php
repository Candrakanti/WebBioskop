<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item text-center">
        <a href="/pegawai" class="nav-link">
          <b style="color: rgb(255, 255, 255)">
            BERANDA
          </b>
        </a>
      </li>
      <li class="nav-item text-center">
        <a href="/kartupelajar/" class="nav-link">
            <i class="fas fa-id-card" style="color: rgb(255, 255, 255)"></i>
          <b style="color: rgb(255, 255, 255)">
            Film
          </b>
        </a>
      </li>
      
{{-- 
      <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
        <span data-feather="home"></span>
        Dashboard
      </a> --}}
     

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