@extends('user/wo_template')

@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')

  <h5>paket</h5>


 <ul class="collection">
    <li class="collection-item avatar ">
      <i class="material-icons circle yellow accent-4">business_center</i>
      <span class="title">PLATINUM</span>
      <p>PAKET</p>
       <a href="{{route('user.wo.paket.list',['id_wo' => $about[0]->id,'paket'=> 'platinum'] )}}" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle grey lighten-1">business_center</i>
      <span class="title">GOLD</span>
      <p>PAKET</p>
       <a href="{{route('user.wo.paket.list',['id_wo' => $about[0]->id,'paket'=> 'gold'] )}}" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle  brown lighten-1">business_center</i>
      <span class="title">SILVER</span>
      <p>PAKET</p>
       <a href="{{route('user.wo.paket.list',['id_wo' => $about[0]->id,'paket'=> 'silver'] )}}" class="secondary-content btn orange darken-1 waves-effect waves-light"><i class="material-icons">arrow_forward</i></a>
    </li>
  </ul>

  <div class="row">
    @foreach($pakets as $paket)
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="/assets/img/paket1.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">{{ $paket->nama_paket; }}<i class="material-icons right">zoom_out_map</i></span>
            <p><a href="#">{{ $paket->user->nama; }}</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">{{ $paket->nama_paket }}<i class="material-icons right">close</i></span>
            <p>{{ $paket->spesifikasi }}</p>
            <p><a href="https://api.whatsapp.com/send?phone={{ $paket->user->nomor_hp }}&text=Apakah%bisa%pesan%paket%ini%?">Booking</a></p>
          </div>
        </div>
    @endforeach
  </div>

@endsection

@section('js')
  <script type="text/javascript">
      $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>
@endsection
