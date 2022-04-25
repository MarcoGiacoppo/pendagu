@extends('/Pendagu/Layouts/Konten-Main')

@section('content')
<div class="row">
    <div class="col-lg-6 shadow p-4 bg-white m-auto">
        <h3 class="text-center">Edit Data Barang Keluar</h3>
        <form method="POST" action="/Barang-keluar/{{ $barangkeluar->id }}">
          @method('put')
          @csrf
            <div class="mb-3">
              <label for="kode_barang" class="form-label">Kode Barang</label>
              <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" name="kode_barang" value="{{ old('kode_barang', $barangkeluar->kode_barang) }}">
              @error('kode_barang')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nama_barang" class="form-label">Nama Barang</label>
              <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $barangkeluar->nama_barang) }}">
              @error('nama_barang')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="jenis_barang" class="form-label">Jenis Barang</label>
              <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang" name="jenis_barang" value="{{ old('jenis_barang', $barangkeluar->jenis_barang) }}">
              @error('jenis_barang')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalkeluar" class="form-label">Tanggal keluar</label>
              <input type="text" class="form-control @error('tanggalkeluar') is-invalid @enderror" id="tanggalkeluar" name="tanggalkeluar" value="{{ old('tanggalkeluar', $barangkeluar->tanggalkeluar) }}">
              @error('tanggalkeluar')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="petugas" class="form-label">Petugas</label>
              <input type="text" class="form-control @error('petugas') is-invalid @enderror" id="petugas" name="petugas" value="{{ old('petugas', $barangkeluar->petugas) }}">
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