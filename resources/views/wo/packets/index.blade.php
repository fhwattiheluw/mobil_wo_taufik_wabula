@extends('wo.layout')

@section('content')
<a class="btn btn-primary float-add shadow " href="{{route('wo.paket.create')}} ">Add</a>

<div class="row">
  <div class="col">
    @foreach($items as $item)
    <p>{{url(Storage::url('public/img/ica.jpeg'))}}</p>
    <div class="card" style="margin-bottom:10px;">
      <p>{{url(public_path('storage\img'))}}</p>
      <img src="{{url(Storage::url('public/img/ica.jpeg'))}}" class="card-img-top" >
      <!-- <img src="{{url(Storage::url($item->foto_paket))}}" class="card-img-top" > -->
      <div class="card-body">
        <h5 class="card-title">{{$item->nama_paket}}</h5>
        <p class="card-text">{{$item->spesifikasi}}</p>
        <p class="card-text">{{$item->harga}}</p>
        <p><span class="badge text-bg-primary">{{$item->jenis}}</span></p>
        <a href="{{route('wo.edit',$item->id)}}" class="card-link">Edit</a>
        <form action="{{route('wo.delete',$item->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="hidden" name="id" value="{{$item->id}}">
          <input type="submit" class="btn btn-danger" value="Delete">
        </form>
      </div>
    </div>
    @endforeach
  </div>
</div> 
@endsection