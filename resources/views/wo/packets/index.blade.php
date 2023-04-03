@extends('wo.layout')

@section('content')

<!-- jika berhasil save data -->
@if(Session::has('succes'))
<div class="position-fixed z-3">
  <div class="toast align-items-center text-bg-success border-0 fade show  " role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        {{Session::get('succes')}}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif

@if(Session::has('error'))
<div class="position-fixed z-3">
  <div class="toast align-items-center text-bg-danger border-0 fade show " role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        {{Session::get('error')}}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif
<!-- end jika berhasil save data -->
<a class="btn btn-primary float-add shadow " href="{{route('wo.paket.create')}} ">Add</a>

<div class="row">
  <div class="col">
    @foreach($items as $item)
    <div class="card" style="margin-bottom:10px;">
      <img src="{{url(Storage::url('public/img/'.$item->foto_paket))}}" class="card-img-top" >
      <!-- <img src="{{url(Storage::url($item->foto_paket))}}" class="card-img-top" > -->
      <div class="card-body">
        <h5 class="card-title">{{$item->nama_paket}}</h5><span class="badge text-bg-primary">{{$item->jenis}}</span>
        <p class="card-text">{{$item->spesifikasi}}</p>
        <p class="card-text">{{$item->harga}}</p>

        <!-- <a href="{{route('wo.delete',$item->id)}}" class="card-link">Delete</a> -->
        <form action="{{route('wo.delete',$item->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="hidden" name="id" value="{{$item->id}}">
          <input type="submit" class="btn btn-danger" value="Delete">
          <a href="{{route('wo.edit',$item->id)}}" type="button" class="btn btn-info">Edit</a>
        </form>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
