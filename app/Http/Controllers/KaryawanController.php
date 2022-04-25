<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan tabel karyawan
        return view('/Pendagu/Karyawan/index',[
            'users' => User::all()->where('level', 'karyawan'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menampilkan halaman tambah data karyawan
        return view('/Pendagu/Karyawan/create');
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
            'name'      => 'required|max:255',
            'email'     => 'required|max:255|unique:users',
            'password'  => 'required',
        ]);
        
        $ValidateData['level'] = 'karyawan';
        
        User::create($ValidateData);
        return redirect('/Karyawan')->with('sukses', 'Satu data telah berhasil ditambahkan.');
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
        return view('/Pendagu/Karyawan/update', [
            'user' => User::find($id),
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
        $user = User::find($id);

        $rules = [
            'name'      => 'required|max:255',
            'password'  => 'required',
        ];

        if($request->email != $user->email){
            $rules['email'] = 'required|max:255|unique:users';
        }
        
        $ValidateData = $request->validate($rules);

        User::where('id', $id)->update($ValidateData);
        return redirect('/Karyawan')->with('sukses', 'Salah satu data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/Karyawan')->with('sukses', 'Satu data berhasil dihapus.');
    }
}
