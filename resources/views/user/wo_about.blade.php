@extends('user/wo_template')


@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')

  <h5>Tentang</h5>

  <div class="card">
    <div class="card-content">
      <div class="col s12 center">
        <img src="{{url(Storage::url('public/img/'.$about[0]->foto))}}" alt="" class="circle responsive-img z-depth-3" style="width: 150px; height: 150px;">
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
  </table>
    </div>
  </div>


@endsection
