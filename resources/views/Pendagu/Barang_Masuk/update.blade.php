@extends('/Pendagu/Layouts/Konten-Main')

@section('content')
<div class="row">
    <div class="col-lg-6 shadow p-4 bg-white m-auto">
        <h3 class="text-center">Edit Data Barang Masuk</h3>
        <form method="POST" action="/Barang-masuk/{{ $barangmasuk->id }}">
          @method('put')
          @csrf
            <div class="mb-3">
              <label for="kode_barang" class="form-label">Kode Barang</label>
              <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" name="kode_barang" value="{{ old('kode_barang', $barangmasuk->kode_barang) }}">
              @error('kode_barang')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nama_barang" class="form-label">Nama Barang</label>
              <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $barangmasuk->nama_barang) }}">
              @error('nama_barang')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="jenis_barang" class="form-label">Jenis Barang</label>
              <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang" name="jenis_barang" value="{{ old('jenis_barang', $barangmasuk->jenis_barang) }}">
              @error('jenis_barang')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalmasuk" class="form-label">Tanggal Masuk</label>
              <input type="text" class="form-control @error('tanggalmasuk') is-invalid @enderror" id="tanggalmasuk" name="tanggalmasuk" value="{{ old('tanggalmasuk', $barangmasuk->tanggalmasuk) }}">
              @error('tanggalmasuk')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="petugas" class="form-label">Petugas</label>
              <input type="text" class="form-control @error('petugas') is-invalid @enderror" id="petugas" name="petugas" value="{{ old('petugas', $barangmasuk->petugas) }}">
              @error('petugas')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
    </div>
</div>
@endsection