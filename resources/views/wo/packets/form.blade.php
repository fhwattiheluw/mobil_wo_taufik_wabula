                    @extends('wo.layout')

                    @section('content')
                    <!-- jika berhasil save data -->
                    @if(Session::has('success'))
                    <div class="position-relative">
                        <div class="toast align-items-center text-bg-success border-0 fade show " role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="d-flex">
                        <div class="toast-body">
                          {{Session::get('success')}}
                      </div>
                      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
              </div>
                    </div>
              @endif

              <form class="card" action="{{route('wo.paket.add')}} " method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h5 class="card-title">Tambah paket</h5>
                    <div class="mb-3">
                        <label for="nama_paket" class="col-sm-2 form-label">Nama paket</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" name="nama_paket" id="nama_paket" placeholder="nama paket" value="{{ old('nama_paket') }}">
                          <div class="invalid-feedback">
                              @error('nama_paket'){{$message}}@enderror
                          </div>

                      </div>
                  </div>
                  <div class="mb-3">
                    <label for="jenis" class="col-sm-2 form-label">Jenis</label>
                    <div class="form-check">
                      <input class="form-check-input @error('jenis') is-invalid @enderror " type="radio" name="jenis" value="gold">
                      <label class="form-check-label">
                        GOLD
                    </label>
                    <div class="invalid-feedback">

                    </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input @error('jenis') is-invalid @enderror" type="radio" name="jenis" value="silver">
                  <label class="form-check-label" for="flexRadioDefault1">
                    SILVER
                </label>
            </div>
            <div class="form-check">
              <input class="form-check-input @error('jenis') is-invalid @enderror" type="radio" name="jenis" value="brown">
              <label class="form-check-label" for="flexRadioDefault1">
                BROWN
            </label>
            <div class="invalid-feedback">
              @error('jenis'){{$message}}@enderror
          </div>
      </div>

  </div>
  <div class="mb-3">
    <label for="harga" class="col-sm-2 form-label">Harga</label>
    <div class="col-sm-10">
      <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga Rp." name="harga" value="{{ old('harga') }}">
      <div class="invalid-feedback">
          @error('harga'){{$message}}@enderror
      </div>
  </div>
</div>
<div class="mb-3">
    <label for="spesifikasi" class="col-sm-2 form-label">Spesifikasi</label>
    <div class="col-sm-10">
      <textarea class="form-control  @error('spesifikasi') is-invalid  @enderror" name="spesifikasi" id="spesifikasi">{{ old('spesifikasi') }}</textarea>
      <div class="invalid-feedback">
          @error('spesifikasi'){{$message}}@enderror
      </div>
  </div>
</div>
<div class="mb-3">
    <label for="status" class="col-sm-2 form-label">Status</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status" id="aktif" value="aktif" checked>
      <label class="form-check-label" for="flexRadioDefault1">
        Aktif
    </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" id="aktif" value="nonaktif" >
  <label class="form-check-label" for="flexRadioDefault1">
    Non-Aktif
</label>
</div>
</div>
<div class="col-mb-3">
    <label for="status" class="col-sm-2 form-label">Gambar</label>
    <input class="form-control @error('foto_paket') is-invalid @enderror" type="file" src="{{ old('foto_paket')}}" alt="gambar" name="foto_paket">
    <div class="invalid-feedback">
      @error('foto_paket'){{$message}}@enderror
  </div>
</div>
</div>

<div class="card-footer">
  <div class="mb-3">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</div>  
</div>



</form>
@endsection