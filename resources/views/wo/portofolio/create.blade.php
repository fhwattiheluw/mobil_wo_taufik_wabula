@extends('wo.layout')

@section('content')
<form action="{{route('wo.portofolio.create')}}" method="post" enctype="multipart/form-data" class="card">
  @csrf
  <div class="card-body">
    <h5 class="card-title">{{$title}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Form data portofolio</h6>
    <!-- konten formulir -->
    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">

    <div class="mb-3">
      <label class="form-label">Paket</label>
      <select class="form-control @error('id_paket_wo')is-invalid @enderror" name="id_paket_wo" id="id_paket_wo">
        <option value="">Pilih paket wo...</option>
        @foreach($pakets as $paket)
        <option value="{{$paket->id}}">{{$paket->nama_paket}}|{{$paket->jenis}}</option>
        @endforeach
      </select>
       @error('id_paket_wo')
       <div class="invalid-feedback">
        {{$message}}
      </div>
       @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Nama Acara</label>
      <input type="text" class="form-control @error('nama_acara')is-invalid @enderror" name="nama_acara" placeholder="Nama Acara" value="{{old('nama_acara')}} ">
      @error('id_paket_wo')
      <div class="invalid-feedback">
       {{$message}}
     </div>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Tanggal</label>
      <input type="date" class="form-control @error('tanggal_acara')is-invalid @enderror" name="tanggal_acara" value="{{old('tanggal_acara')}} ">
      @error('tanggal_acara')
      <div class="invalid-feedback">
       {{$message}}
     </div>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Lokasi</label>
      <input type="text" class="form-control @error('lokasi')is-invalid @enderror" name="lokasi" placeholder="Lokasi" value="{{old('lokasi')}} ">
      @error('lokasi')
      <div class="invalid-feedback">
       {{$message}}
     </div>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Keterangan</label>
      <textarea name="keterangan" class="form-control @error('keterangan')is-invalid @enderror">{{old('keterangan')}}</textarea>
      @error('keterangan')
      <div class="invalid-feedback">
       {{$message}}
     </div>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Foto</label>
      <input type="file" id="foto" name="foto" class="form-control @error('foto')is-invalid @enderror" >
      @error('foto')
      <div class="invalid-feedback">
       {{$message}}
     </div>
      @enderror
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary" >Save</button>
  </div>
</form>






@endsection
