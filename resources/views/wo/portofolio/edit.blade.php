@extends('wo.layout')

@section('content')
<h3>{{$title}}</h3>
<form class="form" action="{{route('wo.portofolio.edit', $item->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <input type="hidden" name="id_user" value="{{$item->id}}">
  Paket
  <select name="id_paket" id="id_paket">
    <option value="">Pilih paket wo...</option>
    @foreach($pakets as $paket)
      <option value="{{$paket->id}}" @if($item->id_paket_wo == $paket->id) selected @endif>{{$paket->nama_paket}}</option>
    @endforeach
  </select> 
  <br>
  Nama Acara <input type="text" name="nama_acara" placeholder="Nama Acara"><br>
  Tanggal <input type="date" name="tanggal_acara" value=""><br>
  Lokasi <input type="text" name="lokasi" placeholder="Lokasi"><br>
  Keterangan <br><textarea name="keterangan" ></textarea><br>
  Foto <input type="file" id="foto" name="foto" ><br>
  <button type="submit">Save</button><br>
</form>
@endsection