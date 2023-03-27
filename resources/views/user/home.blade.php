@extends('user/template')

@section('css')
@endsection

@section('content')
	@foreach($pakets as $paket)
		
		<div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="/assets/img/paket1.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">{{ $paket->nama_paket }}<i class="material-icons right">zoom_out_map</i></span>
        <p><a href="/user/home/{{ $paket->id_user }}">{{ $paket->user->nama }}</a></p>
      </div>
      <div class="card-reveal">      
        <span class="card-title grey-text text-darken-4">{{ $paket->nama_paket }}<i class="material-icons right">close</i></span>
        <p>{{ $paket->jenis_paket }}</p>
        <p>Rp.{{ $paket->harga }}</p>
        <p>{{ $paket->spesifikasi }}</p>
        <p><a href="">Booking</a></p>
      </div>
    </div>
  	
	@endforeach

	  
            
@endsection