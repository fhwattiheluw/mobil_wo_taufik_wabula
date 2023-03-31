<?php use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin WO</title>
  <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/wo">Home</a>
      <a class="navbar-brand" href="/wo/packets">Pakets</a>
      <a class="navbar-brand" href="#">Portofolio</a>
      <form action="/wo/logout" method="post">
        @csrf
        <button class="navbar-brand" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
      </form>
    </div>
  </div><!-- /.container-fluid -->
</nav>


<!-- <span class="label label-info">{{Auth::user()->nama}}</span> -->

<div class="container" style="padding-top: 20px;">
    @yield('content')
</div>
</body>
</html>