@extends('wo.layout')

@section('content')
<h3>{{$title}}</h3>
<!-- {{-- menampilkan error validasi --}} -->
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('wo.profil.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">informasi</h6>

            <img src="{{url(Storage::url('public/img/'.$item->foto))}}" alt="Profil" class="img-fluid shadow" style="border-radius: 100%; margin-bottom: 10px; width: 100px;">

            <div class="form-floating mb-3">
                <input class="form-control" id="data-nama" name="nama" type="text" value="{{ $item->nama }}" aria-label="input example">
                <label for="data-nama">Nama Pengguna</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="data-email" name="email" type="text" value="{{ $item->email }}" aria-label="input example">
                <label for="data-email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="data-hp" name="nomor_hp" type="text" value="{{ $item->nomor_hp }}" aria-label="input example">
                <label for="data-hp">Nomor HP</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="data-alamat" name="alamat" type="text" value="{{ $item->alamat }}" aria-label=" input example">
                <label for="data-alamat">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="file" id="foto" name="foto" aria-label="input example">
                <label for="foto">Foto</label>
                @error('foto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid gap-2">
                <!-- <a href="{{route('wo.profil.edit')}}" type="button" class="btn btn-primary">Ubah profil</a> -->
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('wo.profil.pass.edit')}}" class="text-center">Ubah kata sandi</a>
            </div>

        </div>
    </div>
</form>

@endsection