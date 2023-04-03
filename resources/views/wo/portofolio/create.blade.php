@extends('wo.layout')

@section('content')
<h3>{{$title}}</h3>
<form class="form" action="{{route('wo.portofolio.create',['id'=>$id])}}" method="post">
  @csrf
  <input type="hidden" name="id_paket_wo" id="id_paket_wo" value="{{$id}}" disabled><br>
  Nama Acara <input type="text" name="nama_acara" placeholder="Nama Acara"><br>
  Tanggal <input type="date" name="tanggal_acara" value=""><br>
  Lokasi <input type="text" name="lokasi" placeholder="Lokasi"><br>
  Keterangan <br><textarea name="keterangan" ></textarea><br>
  Foto <input type="file" name="foto" ><br>
  <button type="submit">Save</button><br>
</form>
@endsection
