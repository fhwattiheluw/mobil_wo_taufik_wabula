<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/assets/materialize/css/materialize.min.css" media="screen,projection"/>

    <!-- QUERYMINE Page Center Css -->
    @yield('css-main')

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <!-- navbar -->
    <div class="">
      <nav class="orange darken-1">
    <div class="nav-wrapper">
      <a href="#" data-target="menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a href="#" class="brand-logo center">nikahan</a>
    </div>
  </nav>
    </div>

  <!-- sidenav mobile -->
    <ul class="sidenav" id="menu">
    <li><a href="{{route('user.home')}}"><i class="material-icons" style="color: #ff6d00 ;">home</i>Beranda</a></li>
    <li><a href="{{route('user.pakets')}}"><i class="material-icons" style="color: #ff6d00 ;">redeem</i>Paket wedding</a></li>
    <li><a href="{{route('user.weddings')}} "><i class="material-icons" style="color: #ff6d00 ;">local_library</i>Wedding organizer</a></li>
    <!-- <li><a href="{{route('login')}} "><i class="material-icons" style="color: #ff6d00 ;">person_pin</i>login WO</a></li> -->
  </ul>

  @yield('nav_wo') <!-- navbar bottom khusus untuk tampilan WO -->
    @yield('content-main')



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"  src="/assets/materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
  </body>
</html>
