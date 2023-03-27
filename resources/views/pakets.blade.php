<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <H1>Halaman Paket WO</H1>
  @foreach($pakets as $paket)
    <h2>Paket {{ $paket->nama_paket }}</h2>
    <p>oleh <a href="/wo/{{ $paket->id_user }}"> {{ $paket->user->nama }} </p></p>
    <p><a href="/paket-wo/{{ $paket->id }}">Detail</a></p>
    <hr>
  @endforeach
</body>
</html>