<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket</title>
</head>
<body>
    <h1>{{ $paket->nama_paket }}</h1>
    <p>{{ $paket->harga }}</p>
    <p>{{ $paket->spesifikasi }}</p>
    <p>{{ $paket->status }}</p>
    <p>{{ $paket->foto_paket1 }}</p>
</body>
</html>