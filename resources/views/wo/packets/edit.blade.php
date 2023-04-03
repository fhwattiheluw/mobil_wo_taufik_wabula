@extends('wo.layout')

@section('content')
<form class="form card" action="{{route('wo.edit',$item->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card-body">
    <h5 class="card-title">{{$title}}</h5>
    <div class="mb-3">
      <div class="col-sm-10">
        <input type="hidden" class="form-control" name="id" id="id" value="{{$item->id}}">
      </div>
    </div>

    <div class="mb-3">
      <label for="nama_paket" class="col-sm-2 form-label">Nama paket</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" name="nama_paket" id="nama_paket" value="{{old('nama_paket',$item->nama_paket)}}" placeholder="nama paket">
        <div class="invalid-feedback">
          @error('nama_paket'){{$message}}@enderror
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="jenis" class="col-sm-2 form-label">Jenis</label>
      <div class="radio-inline col-sm-10">
        <label>
          <input type="radio" class="form-check-input @error('jenis') is-invalid @enderror"  name="jenis" id="silver" value="silver"  @if($item->jenis == 'silver') checked @endif>Silver
        </label>
      </div>
      <div class="radio-inline col-sm-10">
        <label>
          <input type="radio" class="form-check-input @error('jenis') is-invalid @enderror" name="jenis" id="gold" value="gold" @if($item->jenis == 'gold') checked @endif>Gold
        </label>
      </div>
      <div class="radio-inline col-sm-10">
        <label>
          <input type="radio" class="form-check-input @error('jenis') is-invalid @enderror" name="jenis" id="paltinum" value="platinum"  @if($item->jenis == 'platinum') checked @endif>Platinum
        </label>
      </div>
      <div class="invalid-feedback">
        @error('jenis'){{$message}}@enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="harga" class="col-sm-2 form-label">Harga</label>
      <div class="col-sm-10">
        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" placeholder="Harga Rp." value="{{$item->harga}}">
        <div class="invalid-feedback">
          @error('jenis'){{$harga}}@enderror
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="spesifikasi" class="col-sm-2 form-label">Spesifikasi</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="spesifikasi" id="spesifikasi">{{$item->spesifikasi}}</textarea>
      </div>
    </div>
    <div class="mb-3">
      <label for="status" class="col-sm-2 form-label">Status</label>
      <div class="radio-inline col-sm-10">
        <label>
          <input type="radio" name="status" id="aktif" value="aktif" @if($item->status == 'aktif') checked @endif>Aktif
        </label>
      </div>
      <div class="radio-inline col-sm-10">
        <label>
          <input type="radio" name="status" id="nonaktif" value="nonaktif" @if($item->status == 'nonaktif') checked @endif>Non Aktif
        </label>
      </div>
    </div>
    <div class="mb-3">
      <label for="status" class="col-sm-2 form-label">Gambar</label>
      <input type="file" class="form-control @error('foto_paket') is-invalid @enderror"  name="foto_paket" id="foto_paket" alt="foto_paket">
      <div class="invalid-feedback">
        @error('foto_paket'){{$message}}@enderror
      </div>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>
@endsection
