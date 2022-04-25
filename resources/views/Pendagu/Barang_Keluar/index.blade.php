@extends('/Pendagu/Layouts/Konten-Main')

@section('content')
    {{-- Alert --}}
    @if (session()->has('sukses'))
    <div class="alert alert-success alert-dismissible px-4 fade show justify-content-between align-items-center" role="alert" style="display: flex;">
        <p class="m-0">{{ session('sukses') }}</p>
        <button type="button" class="btn" onclick="return this.parentNode.style.display = 'none'"><i class="fa-solid fa-xmark"></i></button>
    </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Barang Keluar</h1>
        <div>
            <a href="/Barang-keluar/create" class="btn btn-sm btn-primary shadow-sm"><i class="fa-solid fa-plus"></i> Tambah Data</a>
            <a href="#" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-page-length='5'>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Tanggal Keluar</th>
                                <th>Petugas</th>
                                <th>option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangkeluars as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->jenis_barang }}</td>
                                <td>{{ $item->tanggalkeluar }}</td>
                                <td>{{ $item->petugas }}</td>
                                <td class="d-flex">
                                    <a href="/Barang-keluar/{{ $item->id }}/edit" class="btn btn-warning rounded-circle"><i class="fa-solid fa-pen"></i></a>
                                    <form action="/Barang-keluar/{{ $item->id }}" method="POST" class="ml-2">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger rounded-circle" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>              
    </div>
@endsection