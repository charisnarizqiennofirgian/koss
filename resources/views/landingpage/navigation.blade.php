<nav class="navbar navbar-expand-lg fixed-top navbar-static-top navbar-light bg-light ">
  <a class="navbar-brand mr-auto mr-lg-0 d-inline" href="#">
    <img src="assets/image/logo-brand.png" alt="" srcset="">
  </a>
  <div class="container navbar-wrapper mr-auto">
    <button class="navbar-toggler p-0 border-0 ml-auto" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-2">
        <li class="nav-item active">
          <a class="nav-link" href="beranda">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboards">Dashboard</a>
        </li>
        <!-- Added -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="daftar">daftar</a>
        </li>
        @endguest
      </ul>
      <div class="ml-auto button-navbar">
        <!-- Added -->
        @auth
        <a class="btn btn-custom" href="#" onclick="document.getElementById('form-logout').submit()">Logout</a>
        <form action="{{ route('logout') }}" method="post" id="form-logout">
          @csrf
        </form>
        @endauth
        @guest
        <a class="btn btn-custom" href="login" type="button">Login</a>
        @endguest
      </div>
    </div>
  </div>
</nav>