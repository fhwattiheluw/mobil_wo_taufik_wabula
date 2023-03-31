@extends('wo.layout')

@section('content')
<a class="btn btn-primary float-add shadow " href="{{route('wo.paket.form_tambah')}} ">Add</a>

<div class="row">
  <div class="col">
    @foreach($items as $item)
    <div class="card" style="margin-bottom:10px;">
      <img src="{{url(Storage::url($item->foto_paket1))}}" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title">{{$item->nama_paket}}</h5>
        <p class="card-text">{{$item->spesifikasi}}</p>
        <p class="card-text">{{$item->harga}}</p>
        <p><span class="badge text-bg-primary">{{$item->jenis}}</span></p>
        <a href="#" class="card-link">Edit</a>
        <a href="#" class="card-link">Hapus</a>
      </div>
    </div>
    @endforeach
  </div>
</div> 
@endsection