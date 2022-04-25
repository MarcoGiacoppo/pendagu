<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // Data Users
        DB::table('users')->insert([
            [
                'name' => 'administrator',
                'email' => 'admin123@gmail.com',
                'password' => Hash::make('admin123'),
                'level' => 'admin',
            ],
            [
                'name' => 'Bayu Giacoppo',
                'email' => 'bayugiacoppo@gmail.com',
                'password' => Hash::make('bayugiacoppo'),
                'level' => 'admin',
            ],
            [
                'name' => 'Darma',
                'email' => 'darma123@gmail.com',
                'password' => Hash::make('darma123'),
                'level' => 'karyawan',
            ],
            [
                'name' => 'Sentosa',
                'email' => 'sentosa123@gmail.com',
                'password' => Hash::make('sentosa123'),
                'level' => 'karyawan',
            ],
            [
                'name' => 'Andi',
                'email' => 'andi123@gmail.com',
                'password' => Hash::make('andi123'),
                'level' => 'karyawan',
            ],
        ]);

        // Data Barang Masuk
        DB::table('barang_masuks')->insert([
            [
                'kode_barang' => 'C001',
                'nama_barang' => 'Coca Cola',
                'jenis_barang' => 'Drinks',
                'petugas' => 'Andi',
            ],
            [
                'kode_barang' => 'A001',
                'nama_barang' => 'Aqua',
                'jenis_barang' => 'Drinks',
                'petugas' => 'Darma',
            ],
            [
                'kode_barang' => 'C002',
                'nama_barang' => 'Chitato',
                'jenis_barang' => 'Snacks',
                'petugas' => 'Sentosa',
            ],
            [
                'kode_barang' => 'S001',
                'nama_barang' => 'Sutra',
                'jenis_barang' => 'Kondom',
                'petugas' => 'Bayu Giacoppo',
            ],
        ]);

        // Data Barang Keluar
        DB::table('barang_keluars')->insert([
            [
                'kode_barang' => 'C001',
                'nama_barang' => 'Coca Cola',
                'jenis_barang' => 'Drinks',
                'petugas' => 'Andi',
            ],
            [
                'kode_barang' => 'A001',
                'nama_barang' => 'Aqua',
                'jenis_barang' => 'Drinks',
                'petugas' => 'Darma',
            ],
            [
                'kode_barang' => 'C002',
                'nama_barang' => 'Chitato',
                'jenis_barang' => 'Snacks',
                'petugas' => 'Sentosa',
            ],
            [
                'kode_barang' => 'S001',
                'nama_barang' => 'Sutra',
                'jenis_barang' => 'Kondom',
                'petugas' => 'Bayu Giacoppo',
            ],
        ]);
    }
}
