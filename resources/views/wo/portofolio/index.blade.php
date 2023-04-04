@extends('wo.layout')

@section('content')

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
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->paket_wo->nama_paket}}</h6>
          <p class="card-text">tanggal acara : {{$item->tanggal_acara}}</p>
          <p class="card-text">lokasi : {{$item->lokasi}}</p>
          <p class="card-text">keterangan : {{$item->keterangan}}</p>

          <!-- kalau tidak diperlukan fungsi detail ini hapus aja -->
          <a href="{{route('wo.portofolio.show',$item->id)}}" class="card-link">Detail</a>
          
          <a href="{{route('wo.portofolio.edit',$item->id)}}" class="card-link">Edit</a>
          <!-- <a href="#" class="card-link">Hapus</a> -->
          <form action="{{route('wo.portofolio.delete', $item->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
    </div>
   @endforeach
    
  </div>
</div>

@endsection
