@extends('user/wo_template')

@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')
<!-- gambar -->
    <!-- <div class="parallax-container">
      <div class="parallax"img src="images/parallax1.jpg"></div>
    </div> -->
  <h4 style="color: #e65100;">Tentang kami</h4>   
  <div class="card">
    <div class="card-content">
      <table>
    <tr>
      <td>Nama</td><td>:</td><td>{{$about[0]->nama}}</td>
    </tr>
    <tr>
      <td>No WA</td><td>:</td><td>{{$about[0]->nomor_hp}}</td>
    </tr>
    <tr>
      <td>Email</td><td>:</td><td>{{$about[0]->email}}</td>
    </tr>
    <tr>
      <td>Alamat </td><td>:</td><td>{{$about[0]->alamat}}</td>
    </tr>
    <tr>
      <td>nama</td><td>:</td><td>{{$about[0]->foto}}</td>
    </tr>
  </table>
    </div>
  </div>
  
            
@endsection