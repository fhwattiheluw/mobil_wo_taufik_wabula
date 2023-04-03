@extends('wo.layout')

@section('content')
<h3>{{$title}}</h3>
<p>
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
</p>
@endsection
