<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // Data dummy untuk 3 pengguna
        DB::table('users')->insert([
            'nama' => 'Pengguna 1',
            'email' => 'pengguna1@mail.com',
            'nomor_hp' => '08123456789',
            'alamat' => 'Jl. Sudirman No. 1',
            'foto' => 'pengguna1.jpg',
            'jenis_user' => 'pengguna',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'nama' => 'Pengguna 2',
            'email' => 'pengguna2@mail.com',
            'nomor_hp' => '08123456790',
            'alamat' => 'Jl. Sudirman No. 2',
            'foto' => 'pengguna2.jpg',
            'jenis_user' => 'pengguna',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'nama' => 'Pengguna 3',
            'email' => 'pengguna3@mail.com',
            'nomor_hp' => '08123456791',
            'alamat' => 'Jl. Sudirman No. 3',
            'foto' => 'pengguna3.jpg',
            'jenis_user' => 'pengguna',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Data dummy untuk 3 wo
        DB::table('users')->insert([
            'nama' => 'WO 1',
            'email' => 'wo1@mail.com',
            'nomor_hp' => '08123456792',
            'alamat' => 'Jl. Thamrin No. 1',
            'foto' => 'wo1.jpg',
            'jenis_user' => 'wo',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'nama' => 'WO 2',
            'email' => 'wo2@mail.com',
            'nomor_hp' => '08123456793',
            'alamat' => 'Jl. Thamrin No. 2',
            'foto' => 'wo2.jpg',
            'jenis_user' => 'wo',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'nama' => 'WO 3',
            'email' => 'wo3@mail.com',
            'nomor_hp' => '08123456794',
            'alamat' => 'Jl. Thamrin No. 3',
            'foto' => 'wo3.jpg',
            'jenis_user' => 'wo',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
