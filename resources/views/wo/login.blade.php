<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/assets/materialize/css/materialize.min.css" media="screen,projection" />

  <!-- QUERYMINE Page Center Css -->

  <style>
    html,
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
    }
  </style>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="blue accent-4">

  <!-- Form Section -->

  <form action="/wo/login" method="POST"> <!-- Change The Form Method From Here-->
    <!--csrf untuk proteksi saat mengirim data -->
    @csrf

    <div class="card-panel z-depth-3">

      <!-- Form Logo Section  -->

      <div class="row margin">
        <div class="col s12 m12 l12 center">
          <img src="/assets/img/user.png" alt="" class="responsive-img circle" style="width:100px;">
          <p>Wedding organizer</p>
        </div>
      </div>
      <div class="center" style="font-size:14px;color:red"><br>
        @error('login')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <!-- Form Username Input Section -->

      <div class="col s12 m12 l12">
        <div class="input-field">
          <i class="material-icons prefix">person</i>
          <input type="text" name="email" id="username">
          <label for="username">Email</label>
          @error('email')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <!-- Form Password Input Section -->

      <div class="col m12 l12">
        <div class="input-field">
          <i class="material-icons prefix">lock</i>
          <input type="password" name="password" id="password">
          <label for="password">Password</label>
          @error('password')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <br><br>

      <!-- Form Button Section  -->

      <div class="center">
        <input type="submit" value="Login" name="login" class="blue darken-3 btn waves-effect waves-light " style="width:100%;">

      </div>

      <!-- Form "Register Now" And "Forgot Password" Link Section. -->

      <div class="center" style="font-size:14px;"><br>
        <a href="{{route('wo.signup')}} ">Belum punya akun!</a>

      </div><br>
    </div>
  </form>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/assets/materialize/js/materialize.min.js"></script>
</body>

</html>
