@extends('user/wo_template')

@section('css')
<!-- lokasi CSS -->
<style type="text/css">
</style>
@endsection

@section('content')
<h5>{{$title}}</h5>


<div class="row">
  <div class="col s12">
    @foreach($porto as $porto)
    <div class="card">
      <div class="card-image">
        <img src="{{url(Storage::url('public/img/'.$porto->foto))}}">
        <span class="card-title">{{$porto->nama_acara}}</span>
      </div>
      <div class="card-content">
        <p>Nama acara : {{$porto->nama_acara}}</p>
        <p>tanggal : {{$porto->tanggal_acara}}</p>
        <p>keterangan : {{$porto->keterangan}}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
$(document).ready(function(){
  $('.materialboxed').materialbox();
});
</script>
@endsection
