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
  </head>

  <body>

    <!-- navbar -->
    <div class="navbar-fixed">
      <nav class="pink darken-1">
    <div class="nav-wrapper">
      <a href="#" data-target="menu" class="sidenav-trigger"><i class="material-icons">menu</i></a> 
      <a href="#" class="brand-logo center">Logo</a>
      <a href="#" data-target="mobile-demo" class="right sidenav-trigger"><i class="material-icons">search</i></a>
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
    <li><a href="/user/home">Home</a></li>
    <li><a href="/user/wo">List WO</a></li>
    <li><a href="collapsible.html">login WO</a></li>
  </ul>

  <div class="container" style="padding-top: 30px;">
    @yield('content')
  </div>


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