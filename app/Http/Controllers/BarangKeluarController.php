<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Menampilkan tabel barang keluar
         return view('/Pendagu/Barang_keluar/index', [
             'barangkeluars' => BarangKeluar::all(),
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //Menampilkan halaman tambah data barang keluar
         return view('/Pendagu/Barang_keluar/create');
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
            'kode_barang'   => 'required|max:255|unique:barang_keluars',
            'nama_barang'   => 'required|max:255',
            'jenis_barang'  => 'required|max:255',
            'petugas'      => 'required',
        ]);
        
        BarangKeluar::create($ValidateData);
        return redirect('/Barang-keluar')->with('sukses', 'Satu data telah berhasil ditambahkan.');
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
        return view('/Pendagu/Barang_keluar/update', [
            'barangkeluar' => BarangKeluar::find($id),
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
        $barangkeluar = BarangKeluar::find($id);

        $rules = [
            'nama_barang'   => 'required|max:255',
            'jenis_barang'  => 'required|max:255',
            'tanggalkeluar'  => 'required',
            'petugas'      => 'required',
        ];

        if($request->kode_barang != $barangkeluar->kode_barang){
            $rules['kode_barang'] = 'required|max:255|unique:barang_keluars';
        }
        
        $ValidateData = $request->validate($rules);

        BarangKeluar::where('id', $id)->update($ValidateData);
        return redirect('/Barang-keluar')->with('sukses', 'Salah satu data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BarangKeluar::destroy($id);
        return redirect('/Barang-keluar')->with('sukses', 'Satu data berhasil dihapus.');
    }
}
