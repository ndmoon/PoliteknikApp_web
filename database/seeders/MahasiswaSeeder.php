<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Mahasiswa::create([
            'nim'=>'2111081008',
            'nama_lengkap'=>'Libryan Adetya Syafiithree',
            'tempat_lahir'=>'Barulak',
            'tgl_lahir'=>'2002-09-23',
            'email'=>'libryanadetya2309@gmail.com',
            'prodi'=>'TRPL',
            'alamat'=>'Padang',
        ]);
    }
}
