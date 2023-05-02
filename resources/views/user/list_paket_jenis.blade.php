@extends('user/template')

@section('css-main')
<!-- lokasi CSS -->
@endsection

@section('content-main')
<div class="container">
  <h5 class="black-text">Paket Wedding organizer</h5>

  <ul class="collection">
    <li class="collection-item avatar ">
      <i class="material-icons circle yellow accent-4">business_center</i>
      <span class="title">PLATINUM</span>
      <p>PAKET</p>
      <a href="#!" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle grey lighten-1">business_center</i>
      <span class="title">GOLD</span>
      <p>PAKET</p>
      <a href="#!" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle  brown lighten-1">business_center</i>
      <span class="title">SILVER</span>
      <p>PAKET</p>
      <a href="#!" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
  </ul>

  <div class="divider"></div>
  <div class="section">
    @foreach($pakets as $paket)

    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <!-- <img class="activator" src="/assets/img/paket1.jpg"> -->
        <img class="activator" src="{{url(Storage::url('public/img/'.$paket->foto_paket))}}">

      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">{{ $paket->nama_paket }}<span class="new badge" data-badge-caption="paket">{{$paket->jenis}}</span></span>
        <p><a href="{{route('user.wo.about',['id_wo'=>$paket->id_user])}}">{{ $paket->user->nama }}</a></p> <!-- redirect ke halaman tentang WO -->
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">{{ $paket->nama_paket }}<i class="material-icons right">close</i></span>
        <p>{{ $paket->jenis }}</p>
        <p>Rp.{{ $paket->harga }}</p>
        <p>{{ $paket->spesifikasi }}</p>
        <p><a class="waves-effect pink lighten-3 btn btn-small" href="https://api.whatsapp.com/send?phone={{ $paket->user->nomor_hp }}&text=Apakah bisa pesan nama paket : {{ $paket->nama_paket }}, jenis paket : {{ $paket->jenis }}, harga Rp.{{ $paket->harga }}"><i class="material-icons right">book</i>Booking</a></p>
      </div>
    </div>

    @endforeach
  </div>
</div>


@endsection
