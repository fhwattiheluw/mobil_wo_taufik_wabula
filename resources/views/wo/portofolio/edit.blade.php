@extends('wo.layout')

@section('content')
<h3>{{$title}}</h3>
<form class="form" action="{{route('wo.portofolio.edit', $item->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <input type="hidden" name="id" value="{{$item->id}}">
  <input type="hidden" name="id_user" value="{{$item->id_user}}">
  Paket
  <select name="id_paket_wo" id="id_paket">
    <option value="">Pilih paket wo...</option>
    @foreach($pakets as $paket)
      <option value="{{$paket->id}}" @if($item->id_paket_wo == $paket->id) selected @endif>{{$paket->nama_paket}}</option>
    @endforeach
  </select> 
  <br>
  Nama Acara <input type="text" name="nama_acara" value="{{$item->nama_acara}}" placeholder="Nama Acara"><br>
  Tanggal <input type="date" name="tanggal_acara" value="{{$item->tanggal_acara}}"><br>
  Lokasi <input type="text" name="lokasi" placeholder="Lokasi" value="{{$item->lokasi}}"><br>
  Keterangan <br><textarea name="keterangan" >{{$item->keterangan}}</textarea><br>
  Foto <input type="file" id="foto" name="foto" ><br>
  <button type="submit">Save</button><br>
</form>
@endsection