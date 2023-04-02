<?php use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin WO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  @yield('css')
  <style>
  .float-add{
    border-radius: 100%;
    position: fixed;
    padding: 15px;
    bottom: 0;
    right: 0;
    margin-right: 10px;
    margin-bottom: 30px;
    z-index: 1000;
  }
  </style>
</head>
<body style="padding-top:50px;">

  <nav class="navbar bg-primary fixed-top " data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Wedding organizer</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <img src="/assets/img/user.png" class="img-fluid" style="width : 50px;"><h5 class="offcanvas-title" id="offcanvasNavbarLabel">{{Auth::user()->nama}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('wo.home')}}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('wo.paket')}} ">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('wo.portofolio')}}">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('wo.logout') }}">Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- tempat membuat konten  -->
<div class="container">
  @yield('content')
</div>
<!-- end tempat membuat konten  -->

  <!-- footer-->
  <div class="row" style="margin-top:10px;">
    <div class="col text-center" style="position:relative;bottom: 0px;">
      <p>by taufik wabula</p>
    </div>
  </div>
  <!-- end footer -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
