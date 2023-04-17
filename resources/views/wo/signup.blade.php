<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/assets/materialize/css/materialize.min.css" media="screen,projection" />

  <!-- QUERYMINE Page Center Css -->

  <style>
    /* html,
    body {
      height: 100%;
    }

    html {
      display: table;
      margin: auto;
    }

    body {
      display: table-cell;
      vertical-align: middle;
    } */
  </style>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="white">

  <div class="container" style="margin-top: 30px;">
    <form action="#" method="POST">
      <div class="row">
        <div class="col s12 m12 l12 center">
          <img src="/assets/img/user.png" alt="" class="responsive-img circle" style="width:100px;">
          <p>Daftar Wedding organizer</p>
        </div>
      </div>
      <div class="center" style="font-size:14px;color:red"><br>
        @error('login')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <!-- form -->
      <div class="row">
        <div class="col offset-s1 s10 offset-s1">
          <div class="input-field">
            <input type="text" name="nama" id="username">
            <label for="nama">Nama</label>
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="col offset-s1 s10 offset-s1">
          <div class="input-field">
            <input type="text" name="email" id="username">
            <label for="username">Email</label>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="col offset-s1 s10 offset-s1">
          <div class="input-field">
            <input type="password" name="password" id="password">
            <label for="password">Password</label>
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
      </div>


      <br><br>

      <!-- Form Button Section  -->
      <div class="col offset-s1 s10 offset-s1">
        <div class="center">
          <input type="submit" value="signup" name="Daftar" class="blue darken-3 btn waves-effect waves-light "><br><br>
            <a href="{{route('login')}}">sudah punya akun!</a>
        </div>
      </div>

    </form>
  </div>

  <!-- Form Section -->



  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
</body>

</html>
