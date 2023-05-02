@extends('user/template')

@section('css')
@endsection

@section('content-main')
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



@endsection
