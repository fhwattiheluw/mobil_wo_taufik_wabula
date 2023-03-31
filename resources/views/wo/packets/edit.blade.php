@extends('wo.layout')

@section('content')
<h3>Edit Data Packet</h3>
<form class="form" action="{{route('wo.edit',$item->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="form-group">
    <div class="col-sm-10">
      <input type="hidden" class="form-control" name="id" id="id" value="{{$item->id}}">
    </div>
  </div>
  <div class="form-group">
    <label for="nama_paket" class="col-sm-2 control-label">Nama paket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_paket" id="nama_paket" value="{{old('nama_paket',$item->nama_paket)}}" placeholder="nama paket">
    </div>
  </div>
  <div class="form-group">
    <label for="jenis" class="col-sm-2 control-label">Jenis</label>
    <div class="radio-inline col-sm-10">
        <label>
            <input type="radio" name="jenis" id="silver" value="silver"  @if($item->jenis == 'silver') checked @endif>Silver
        </label>
    </div>
    <div class="radio-inline col-sm-10">
        <label>
            <input type="radio" name="jenis" id="gold" value="gold" @if($item->jenis == 'gold') checked @endif>Gold
        </label>
    </div>
    <div class="radio-inline col-sm-10">
        <label>
            <input type="radio" name="jenis" id="paltinum" value="platinum"  @if($item->jenis == 'platinum') checked @endif>Platinum
        </label>
    </div>
  </div>
  <div class="form-group">
    <label for="harga" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Rp." value="{{$item->harga}}">
    </div>
  </div>
  <div class="form-group">
    <label for="spesifikasi" class="col-sm-2 control-label">Spesifikasi</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="spesifikasi" id="spesifikasi">{{$item->spesifikasi}}</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="status" class="col-sm-2 control-label">Status</label>
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
  <div class="form-group">
    <label for="status" class="col-sm-2 control-label">Gambar</label>
    <input type="file" name="foto_paket" id="foto_paket" alt="foto_paket">
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
@endsection

