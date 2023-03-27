@extends('user/wo_template')

@section('css')
<!-- lokasi CSS -->
@endsection

@section('content')
<!-- gambar -->
    <!-- <div class="parallax-container">
      <div class="parallax"img src="images/parallax1.jpg"></div>
    </div> -->
  <h3>Tentang</h3>   
  <p class="flow-text">Nama : {{$about[0]->nama}} </p>
  <p class="flow-text">No Hp : {{$about[0]->nomor_hp}} </p>
  <p class="flow-text">Email : {{$about[0]->email}} </p>
  <p class="flow-text">Alamat : {{$about[0]->alamat}} </p>
  <p class="flow-text">foto : {{$about[0]->foto}} </p>
  
            
@endsection