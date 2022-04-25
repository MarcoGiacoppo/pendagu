@extends('/Pendagu/Layouts/Konten-Main')

@section('content')
<div class="row">
    <div class="col-lg-6 shadow p-4 bg-white m-auto">
        <h3 class="text-center">Tambah Data Karyawan</h3>
        <form method="POST" action="/Karyawan">
          @csrf
            <div class="mb-3">
              <label for="namalengkap" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="namalengkap" name="name" value="{{ old('name') }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
              @error('password')
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