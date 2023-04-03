@extends('wo.layout')

@section('content')

<!-- tombol add -->
<a class="btn btn-primary float-add shadow " href="#">Add</a>
<!-- end tombol add -->

<div class="row" style="margin-bottom:10px;">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">{{$title}}</h3>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="alert alert-secondary" role="alert">
    <p>Anda belum menambahkan data paket!</p>
  </div>

  <div class="col">
    @for($i = 0; $i<=10; $i++)
    <div class="card" style="margin-bottom: 10px;">
      <img src="/assets/img/paket1.jpg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">nama acara</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">nama paket</h6>
        <p class="card-text">tanggal acara : </p>
        <p class="card-text">lokasi : </p>
        <p class="card-text">keterangan : </p>
        <a href="#" class="card-link">Edit</a>
        <a href="#" class="card-link">Hapus</a>
      </div>
    </div>
    @endfor
  </div>
</div>








<!-- <p>
@foreach($items as $item)
ID User: {{$item->id_user}}<br>
Nama Paket: {{$item->nama_paket}} <a href="{{route('wo.portofolio.create', ['id'=>$item->id_user])}}">Add Portofolio</a> <br>
<ul>
@foreach($item->portofolio_wo as $port)
<li>{{$port->id}}</li>
<li>{{$port->nama_acara}}</li>
<li>{{$port->tanggal_acara}}</li>
<li>{{$port->lokasi}}</li>
<li>{{$port->keterangan}}</li>
<li>{{$port->foto}}</li>
<br>
<a href="#">Edit</a> | <a href="#">Delete</a>
@endforeach
</ul>
<hr>
@endforeach
</p> -->

@endsection
