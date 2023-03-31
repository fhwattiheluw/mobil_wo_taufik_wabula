<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/assets/materialize/css/materialize.min.css" media="screen,projection"/>

    <!-- QUERYMINE Page Center Css -->
    @yield('css')

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style type="text/css">
     /* html { 
        background: url('/assets/img/bg-wedding.jpg') fixed no-repeat center; 
  -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }*/

      h4 {
        font-size: 25px;
      }

    </style>
  </head>

  <body style=" background: url('/assets/img/bg-wedding.jpg') fixed no-repeat center; 
  -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        ">

    <!-- sidenav mobile -->
  <!-- navbar -->
    <div class="navbar-fixed">
      <nav class="orange darken-1">
    <div class="nav-wrapper">
      <a href="#" data-target="menu" class="sidenav-trigger"><i class="material-icons">menu</i></a> 
      <a href="#" class="brand-logo center">nikahan</a>
       <!-- <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form> -->
    </div>
  </nav>
    </div>

  <!-- sidenav mobile -->
    <ul class="sidenav" id="menu">
    <li><a href="{{route('user.home')}}"><i class="material-icons" style="color: #ff6d00 ;">home</i>Beranda</a></li>
    <li><a href="{{route('user.pakets')}}"><i class="material-icons" style="color: #ff6d00 ;">redeem</i>Paket wedding</a></li>
    <li><a href="{{route('user.weddings')}} "><i class="material-icons" style="color: #ff6d00 ;">local_library</i>Wedding organizer</a></li>
    <li><a href="collapsible.html"><i class="material-icons" style="color: #ff6d00 ;">person_pin</i>login WO</a></li>
  </ul>

    <div class="navbar-fixed">
        <nav style="bottom: 0;" class="orange lighten-5"> <!-- navbar bottom -->
          <div class="nav-wrapper center">
            <ul id="nav-mobile" >
              <li style="padding-right: 35px; " class="{{ (Request::segment(3) == 'about') ? 'active' : '' }}"><a href="{{route('user.wo.about',['id_wo'=>$id_wo])}}" class="orange-text text-darken-1"><i class="material-icons" >person_pin</i></a></li>
              <li style="padding-right: 35px;" class="{{ (Request::segment(3) == 'porto') ? 'active' : '' }}"><a href="{{route('user.wo.porto',['id_wo'=>$id_wo])}}" class="orange-text text-darken-1"><i class="material-icons">photo_album</i></a></li>
              <li style="padding-right: 35px;" class="{{ (Request::segment(3) == 'paket') ? 'active' : '' }}"><a href="{{route('user.wo.paket',['id_wo'=>$id_wo])}}" class="orange-text text-darken-1"><i class="material-icons" style="color: #ff6d00 ;">business_center</i></a></li>
              <li>
                <a class="btn-floating btn-large  green accent-4" style="padding-bottom: 20px;">
        <i class="large material-icons">message</i></a>
              </li>
            </ul>
          </div>
        </nav>
    </div>

  <div style="background-color: rgba(255, 255, 255, 0.5); width: 100%; margin: 0px; min-height: 700px;">
    <div class="container">

    @yield('content')

    </div>  
  </div>  
  


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"  src="/assets/materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
        $('.sidenav').sidenav();
      }); 
    </script>

    @yield('js')


  </body>
</html>