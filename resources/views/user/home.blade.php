@extends('user/template')

@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')

  <div class="section">
    <h5 class="orange accent-3" style="padding:20px; color: white;">Wedding Organizer</h5>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h5 class="orange accent-3" style="padding:20px; color: white;">Paket Wedding</h5>
    @foreach($pakets as $paket)
    
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="/assets/img/paket1.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">{{ $paket->nama_paket }}<i class="material-icons right">zoom_out_map</i></span>
        <p><a href="{{route('user.wo.about',['id_wo'=>$paket->id_user])}}">{{ $paket->user->nama }}</a></p> <!-- redirect ke halaman tentang WO -->
      </div>
      <div class="card-reveal">      
        <span class="card-title grey-text text-darken-4">{{ $paket->nama_paket }}<i class="material-icons right">close</i></span>
        <p>{{ $paket->jenis_paket }}</p>
        <p>Rp.{{ $paket->harga }}</p>
        <p>{{ $paket->spesifikasi }}</p>
        <p><a class="waves-effect pink lighten-3 btn btn-small" href="https://api.whatsapp.com/send?phone={{ $paket->user->nomor_hp }}&text=Apakah bisa pesan paket ini ?"><i class="material-icons right">book</i>Booking</a></p>
      </div>
    </div>
    
  @endforeach
    
  </div>
	  
            
@endsection