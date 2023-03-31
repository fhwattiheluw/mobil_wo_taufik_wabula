@extends('wo.layout')

@section('content')
<a class="btn btn-primary" href="/wo/packets/create">Add</a>

<div class="row" style="padding-top: 30px;">
  <div class="col-sm-6 col-md-4">
  @foreach($items as $item)
    <div class="thumbnail">
      <img src="/assets/img/bg-paket2.jpg" alt="Paket">
      <div class="caption">
        <h3>{{$item->nama_paket}}</h3>
        <p>{{$item->spesifikasi}}</p>
        <p><a href="#" class="btn btn-warning" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
      </div>
    </div>
  @endforeach
  </div>
</div>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>Data disini</p>
  </div>

  <!-- Table -->
  <table class="table">
    <tr>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Spesifikasi</th>
        <th>Status</th>
    </tr>
    <tr>
        @foreach($items as $item)
            <td>{{$item->nama_paket}}</td>
            <td>{{$item->jenis}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->spesifikasi}}</td>
            <td>{{$item->status}}</td>
            <td><a class="btn btn-info">Detail</a></td>
            <td><a class="btn btn-warning">Edit</</a></td>
            <td><a class="btn btn-danger">Hapus</</a></td>
        @endforeach
    </tr>
  </table>
</div>
@endsection