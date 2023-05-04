@extends('wo.layout')

@section('content')

@if(Session::has('success'))
<div class="position-fixed z-3">
  <div class="toast align-items-center text-bg-success border-0 fade show  " role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        {{Session::get('success')}}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif

<!-- tombol add -->
<a class="btn btn-primary float-add shadow " href="{{route('wo.portofolio.create')}}">Add</a>
<!-- end tombol add -->

<div class="row" style="margin-bottom:10px;">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">{{$title}}</h3>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col">

    @if($items->isEmpty())
    <div class="alert alert-secondary" role="alert">
      <p>Anda belum menambahkan data paket!</p>
    </div>
    @endif

    @foreach($items as $item)
    <div class="card" style="margin-bottom: 10px;">
        <img src="{{url(Storage::url('public/img/'.$item->foto))}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{$item->nama_acara}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->paket_wo->nama_paket}} <span class="badge text-bg-primary">{{$item->paket_wo->jenis}}</span> </h6>
          <p class="card-text">tanggal acara : {{$item->tanggal_acara}}</p>
          <p class="card-text">lokasi : {{$item->lokasi}}</p>
          <p class="card-text">keterangan : {{$item->keterangan}}</p>

          <!-- kalau tidak diperlukan fungsi detail ini hapus aja -->

          <!-- <a href="#" class="card-link">Hapus</a> -->
          <form action="{{route('wo.portofolio.delete', $item->id)}}" method="post">
            @csrf
            @method('delete')
            <!-- <a href="{{route('wo.portofolio.show',$item->id)}}" class="btn btn-link card-link">Detail</a> -->
            <a href="{{route('wo.portofolio.edit',$item->id)}}" class="btn btn-link card-link">Edit</a>
            <button type="submit" class="btn btn-link card-link">Delete</button>
          </form>
        </div>
    </div>
   @endforeach

  </div>
</div>

@endsection
