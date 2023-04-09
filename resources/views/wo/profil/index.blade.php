@extends('wo.layout')

@section('content')

<h3>{{$title}}</h3>
<img src="{{url(Storage::url('public/img/'.$item->foto))}}" alt="Profil" width="500px"><br>
Nama : {{ $item->nama }}<br>
Email : {{$item->email}}<br>
Nomor HP : {{$item->nomor_hp}}<br>
Alamat : {{$item->alamat}}<br>

<a href="{{route('wo.profil.edit')}}">Edit</a>

<!-- =========================== -->

<div class="card" >
  <div class="card-body">
    <h5 class="card-title">{{$title}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">informasi</h6>
    <div class="form-floating mb-3">
  <input class="form-control" id="data-nama" type="text" value="{{ $item->nama }}" aria-label="readonly input example" readonly>
   <label for="data-nama">nama pengguna</label>
    </div>
    <div class="form-floating mb-3">
    <input class="form-control" id="data-email" type="text" value="{{$item->email}}" aria-label="readonly input example" readonly>
    <label for="data-email">email pengguna</label>
    </div>
    <div class="form-floating mb-3">
    <input class="form-control" id="data-hp" type="text" value="{{$item->nomor_hp}}" aria-label="readonly input example" readonly>
    <label for="data-hp">no HP pengguna</label>
    </div>
    <div class="form-floating mb-3">
    <input class="form-control" id="data-alamat" type="text" value="{{$item->alamat}}" aria-label="readonly input example" readonly>
    <label for="data-alamat">alamat pengguna</label>
    </div>
    <a href="{{route('wo.profil.edit')}}" class="card-link">edit</a>
  </div>
</div>

@endsection
