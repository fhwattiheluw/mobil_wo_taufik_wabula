@extends('user/wo_template')


@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')

  <h5>Tentang</h5>

  <div class="card">
    <div class="card-content">
      <div class="col s12 center">
        <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img z-depth-3">
      </div>
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