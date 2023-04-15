@extends('wo.layout')

@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$title}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">informasi</h6>

    <img src="{{url(Storage::url('public/img/'.$item->foto))}}" alt="Profil" class="img-fluid shadow" style="border-radius: 100%; margin-bottom: 10px; width: 100px;">

    <!-- <img src="{{url(Storage::url('public/img/'.$item->foto))}}" alt="Profil" width="500px">     -->
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

    <div class="d-grid gap-2">
      <a href="{{route('wo.profil.edit')}}" type="button" class="btn btn-primary">Ubah profil</a>
      <a href="{{route('wo.profil.pass.edit')}}" class="text-center">Ubah kata sandi</a>
    </div>

  </div>
</div>

@endsection