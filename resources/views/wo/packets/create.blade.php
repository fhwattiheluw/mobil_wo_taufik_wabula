@extends('wo.layout')

@section('content')
<h3>Add Data Packet</h3>
<form class="form" action="" method="post">
    @csrf

  <div class="form-group">
    <div class="col-sm-10">
      <input type="hidden" class="form-control" name="id_user" id="id_user" value="{{Auth::user()->id}}">
    </div>
  </div>
  <div class="form-group">
    <label for="nama_paket" class="col-sm-2 control-label">Nama paket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_paket" id="nama_paket" placeholder="nama paket">
    </div>
  </div>
  <div class="form-group">
    <label for="jenis" class="col-sm-2 control-label">Jenis</label>
    <div class="radio-inline col-sm-10">
        <label>
            <input type="radio" name="jenis" id="silver" value="silver">Silver
        </label>
    </div>
    <div class="radio-inline col-sm-10">
        <label>
            <input type="radio" name="jenis" id="gold" value="gold">Gold
        </label>
    </div>
    <div class="radio-inline col-sm-10">
        <label>
            <input type="radio" name="jenis" id="paltinum" value="platinum">Platinum
        </label>
    </div>
  </div>
  <div class="form-group">
    <label for="harga" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Rp.">
    </div>
  </div>
  <div class="form-group">
    <label for="spesifikasi" class="col-sm-2 control-label">Spesifikasi</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="spesifikasi" id="spesifikasi"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="status" class="col-sm-2 control-label">Status</label>
    <div class="radio-inline col-sm-10">
        <label>
            <input type="radio" name="status" id="aktif" value="aktif" checked>Aktif
        </label>
    </div>
    <div class="radio-inline col-sm-10">
        <label>
            <input type="radio" name="status" id="nonaktif" value="nonaktif">Non Aktif
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

