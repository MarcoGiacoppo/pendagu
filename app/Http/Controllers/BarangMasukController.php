<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Menampilkan tabel barang masuk
         return view('/Pendagu/Barang_Masuk/index', [
             'barangmasuks' => BarangMasuk::all(),
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //Menampilkan halaman tambah data barang masuk
         return view('/Pendagu/Barang_Masuk/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Proses penambahan data karyawan
        $ValidateData=$request->validate([
            'kode_barang'   => 'required|max:255|unique:barang_masuks',
            'nama_barang'   => 'required|max:255',
            'jenis_barang'  => 'required|max:255',
            'petugas'      => 'required',
        ]);
        
        BarangMasuk::create($ValidateData);
        return redirect('/Barang-masuk')->with('sukses', 'Satu data telah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Menampilkan tabel karyawan
        return view('/Pendagu/Barang_Masuk/update', [
            'barangmasuk' => BarangMasuk::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barangmasuk = BarangMasuk::find($id);

        $rules = [
            'nama_barang'   => 'required|max:255',
            'jenis_barang'  => 'required|max:255',
            'tanggalmasuk'  => 'required',
            'petugas'      => 'required',
        ];

        if($request->kode_barang != $barangmasuk->kode_barang){
            $rules['kode_barang'] = 'required|max:255|unique:barang_masuks';
        }
        
        $ValidateData = $request->validate($rules);

        BarangMasuk::where('id', $id)->update($ValidateData);
        return redirect('/Barang-masuk')->with('sukses', 'Salah satu data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BarangMasuk::destroy($id);
        return redirect('/Barang-masuk')->with('sukses', 'Satu data berhasil dihapus.');
    }
}
