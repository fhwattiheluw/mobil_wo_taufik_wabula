@extends('wo.layout')

@section('content')
<a class="btn btn-primary float-add shadow " href="/wo/packets/create">Add</a>

<div class="row">
  <div class="col">
    @foreach($items as $item)
    <div class="card" style="margin-bottom:10px;">
      <img src="{{url(Storage::url($item->foto_paket1))}}" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title">{{$item->nama_paket}}</h5>
        <p class="card-text">{{$item->spesifikasi}}</p>
        <p class="card-text">{{$item->harga}}</p>
        <p><span class="badge text-bg-primary">{{$item->jenis}}</span></p>
        <a href="#" class="card-link">Edit</a>
        <a href="#" class="card-link">Hapus</a>
      </div>
    </div>
    <!-- <div class="thumbnail">
      <img src="/assets/img/bg-paket2.jpg" alt="Paket">
      <div class="caption">
        <h3>{{$item->nama_paket}}</h3>
        <p>{{$item->spesifikasi}}</p>
        <p><a href="#" class="btn btn-warning" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
      </div>
    </div> -->
    @endforeach
  </div>
</div>

<!-- <div class="panel panel-default">
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
    <p>Data disini</p>
  </div>
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
</div> -->
@endsection