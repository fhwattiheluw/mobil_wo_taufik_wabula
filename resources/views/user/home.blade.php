@extends('user/template')

@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')

  <div class="row">
    <div class="col s6">
    <a href="{{route('user.weddings')}}" class="card z-depth-3 waves-effect waves-light center" style="padding:20px; color: white; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1), transparent), url(/assets/img/bg-paket2.jpg) no-repeat center; background-size: cover; width: 100%;">
      <h5>Wedding Organizer</h5>
    </a>
  </div>
  <div class="col s6">
    <a href="{{route('user.pakets')}}" class="card z-depth-3 waves-effect waves-light center" style="padding:20px; color: white; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1), transparent), url(/assets/img/bg-wedding.jpg) no-repeat center; background-size: cover; width: 100%;">
      <h5>Paket Wedding</h5>
    </a>
  </div>
  </div>

  <div class="row">
  <h5 class="black-text">Paket Wedding</h5>
  <div class="divider"></div>
  <div class="section">
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

  <h5 style="color: black;">Wedding organizer</h5>
  <div class="divider"></div>
  <div class="section">
    <div class="row">

      @foreach($wo as $worg)
      <a href="{{route('user.wo.about',['id_wo'=>$paket->id])}}" class="col s4 waves-effect waves-light">
        <div class="row holign-wrapper">
                <div class="col offset-s1 s10">
                  <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img z-depth-3"> <!-- notice the "circle" class -->
                </div>
                <div class="col s12 center">
                  <span class="black-text">
                    {{$worg->nama}}
                  </span>
                </div>
              </div>
      </a>
      @endforeach
    </div>
  </div>

	  
            
@endsection