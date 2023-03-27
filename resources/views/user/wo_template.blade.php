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
  <nav class="pink darken-1 nav-extended">
    <div class="nav-wrapper">
      <a href="#" data-target="menu" class="sidenav-trigger"><i class="material-icons">chevron_left</i></a> 
      <a href="#" class="brand-logo center">Logo</a>
    </div>
    <div class="nav-content"> <!-- ini adalah navigasi tabs  -->
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="{{route('user.wo.about',['id_wo'=>$id])}}">Tentang</a></li>
        <li class="tab"><a href="{{route('user.wo.porto',['id_wo'=>$id])}}">Portofolio</a></li>
        <li class="tab"><a href="{{route('user.wo.paket',['id_wo'=>$id])}}">Paket</a></li>
      </ul>
    </div>
  </nav>

  </ul>

    @yield('content')


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