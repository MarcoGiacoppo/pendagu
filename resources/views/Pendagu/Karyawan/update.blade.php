@extends('/Pendagu/Layouts/Konten-Main')

@section('content')
<div class="row">
    <div class="col-lg-6 shadow p-4 bg-white m-auto">
        <h3 class="text-center">Edit Data Karyawan</h3>
        <form action="/Karyawan/{{ $user->id }}" method="POST">
          @method('put')
          @csrf
            <div class="mb-3">
              <label for="namalengkap" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="namalengkap" name="name" value="{{ old('name', $user->name) }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', $user->email) }}" name="email" >
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password', $user->password) }}">
              @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <button class="btn btn-primary">Ubah</button>
          </form>
    </div>
</div>   
@endsection