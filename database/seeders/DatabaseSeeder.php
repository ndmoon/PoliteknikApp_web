<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'isAdmin'=> true
        ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Prodi::create([
            'nama' => 'Manajemen Informatika',
        ]);

        \App\Models\Prodi::create([
            'nama' => 'Teknik Komputer',
        ]);

        \App\Models\Prodi::create([
            'nama' => 'Teknologi Rekayasa Perangkat Lunak',
        ]);

        \App\Models\Mahasiswa::factory(100)->create();

        \App\Models\Dosen::factory(100)->create();

        \App\Models\Berita::factory(10)->create();

        \App\Models\Kategori::create([
            'nama' => 'Programming',
        ]);

        \App\Models\Kategori::create([
            'nama' => 'Networking',
        ]);

        \App\Models\Kategori::create([
            'nama' => 'Design',
        ]);
    }
}
