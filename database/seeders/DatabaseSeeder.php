<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\PaketWo;
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
            'nomor_hp' => '+628123456789',
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
            'nomor_hp' => '+628123456790',
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
            'nomor_hp' => '+628123456791',
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
            'nomor_hp' => '+628123456792',
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
            'nomor_hp' => '+628123456793',
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
            'nomor_hp' => '+628123456794',
            'alamat' => 'Jl. Thamrin No. 3',
            'foto' => 'wo3.jpg',
            'jenis_user' => 'wo',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Seed database paket_wo
        // Ambil user pertama sebagai penjual paket
        $user1 = User::where('email', 'wo1@mail.com')->first();

        // Generate data paket untuk user pertama
        $paket1 = new PaketWo();
        $paket1->id_user = $user1->id;
        $paket1->nama_paket = 'Paket A';
        $paket1->jenis = 'silver';
        $paket1->harga = 1000000.00;
        $paket1->spesifikasi = 'Paket A spesifikasi';
        $paket1->status = 'aktif';
        $paket1->foto_paket = 'bg-paket2.jpg';
        $paket1->save();

        $paket2 = new PaketWo();
        $paket2->id_user = $user1->id;
        $paket2->nama_paket = 'Paket B';
        $paket1->jenis = 'gold';
        $paket2->harga = 1500000.00;
        $paket2->spesifikasi = 'Paket B spesifikasi';
        $paket2->status = 'aktif';
        $paket2->foto_paket = 'bg-paket2.jpg';
        $paket2->save();

        // Ambil user kedua sebagai penjual paket
        $user2 = User::where('email', 'wo2@mail.com')->first();

        // Generate data paket untuk user kedua
        $paket3 = new PaketWo();
        $paket3->id_user = $user2->id;
        $paket3->nama_paket = 'Paket C';
        $paket1->jenis = 'platinum';
        $paket3->harga = 2000000.00;
        $paket3->spesifikasi = 'Paket C spesifikasi';
        $paket3->status = 'aktif';
        $paket3->foto_paket = 'bg-paket2.jpg';
        $paket3->save();

        $paket4 = new PaketWo();
        $paket4->id_user = $user2->id;
        $paket4->nama_paket = 'Paket D';
        $paket1->jenis = 'platinum';
        $paket4->harga = 2500000.00;
        $paket4->spesifikasi = 'Paket D spesifikasi';
        $paket4->status = 'aktif';
        $paket4->foto_paket = 'bg-paket2.jpg';
        $paket4->save();

        //seed database tabel portofolio_wo
        // Ambil user pertama sebagai penjual paket
        $user1 = User::where('email', 'wo1@mail.com')->first();

        // Generate data paket untuk user pertama
        $paket1 = new PaketWo();
        $paket1->id_user = $user1->id;
        $paket1->nama_paket = 'Paket A';
        $paket1->jenis = 'silver';
        $paket1->harga = 1000000.00;
        $paket1->spesifikasi = 'Paket A spesifikasi';
        $paket1->status = 'aktif';
        $paket1->foto_paket = 'bg-paket2.jpg';
        $paket1->save();

        $paket2 = new PaketWo();
        $paket2->id_user = $user1->id;
        $paket2->nama_paket = 'Paket B';
        $paket1->jenis = 'gold';
        $paket2->harga = 1500000.00;
        $paket2->spesifikasi = 'Paket B spesifikasi';
        $paket2->status = 'aktif';
        $paket2->foto_paket = 'bg-paket2.jpg';
        $paket2->save();

        // Ambil user kedua sebagai penjual paket
        $user2 = User::where('email', 'wo2@mail.com')->first();

        // Generate data paket untuk user kedua
        $paket3 = new PaketWo();
        $paket3->id_user = $user2->id;
        $paket3->nama_paket = 'Paket C';
        $paket1->jenis = 'platinum';
        $paket3->harga = 2000000.00;
        $paket3->spesifikasi = 'Paket C spesifikasi';
        $paket3->status = 'aktif';
        $paket3->foto_paket = 'bg-paket2.jpg';
        $paket3->save();

        $paket4 = new PaketWo();
        $paket4->id_user = $user2->id;
        $paket4->nama_paket = 'Paket D';
        $paket1->jenis = 'platinum';
        $paket4->harga = 2500000.00;
        $paket4->spesifikasi = 'Paket D spesifikasi';
        $paket4->status = 'aktif';
        $paket4->foto_paket = 'bg-paket2.jpg';
        $paket4->save();

        //seeder data portofolio
        DB::table('portofolio_wo')->insert([
          'id_user' => '2',
          'id_paket_wo' => '1',
          'nama_acara' => 'Pernikahan Dini',
          'tanggal_acara' => '2023-04-02',
          'lokasi' => 'Islamic Center',
          'keterangan' => 'Acara ini berlangsung 2 hari yakni pertama pernikahan dan kedua walimatul ursy',
          'foto' => 'porto1.jpg'
        ]);
        DB::table('portofolio_wo')->insert([
          'id_user' => '1',
          'id_paket_wo' => '1',
          'nama_acara' => 'Aqikahan Ananda Bilqis',
          'tanggal_acara' => '2023-03-02',
          'lokasi' => 'Cafee Resto Manise',
          'keterangan' => 'Acara ini berlangsung 1 hari',
          'foto' => 'porto1.jpg'
        ]);
        DB::table('portofolio_wo')->insert([
          'id_user' => '2',
          'id_paket_wo' => '2',
          'nama_acara' => 'Pernikahan Ani dan Dani',
          'tanggal_acara' => '2023-04-02',
          'lokasi' => 'Gedung Ashari',
          'keterangan' => 'Acara ini berlangsung 2 hari yakni pertama pernikahan dan kedua walimatul ursy',
          'foto' => 'porto1.jpg'
        ]);
        DB::table('portofolio_wo')->insert([
          'id_user' => '2',
          'id_paket_wo' => '3',
          'nama_acara' => 'Tasyakuran Kapolda',
          'tanggal_acara' => '2023-04-02',
          'lokasi' => 'Gedung Ashari',
          'keterangan' => 'Acara ini adalah Tasyakuran Kapolda Maluku atas kenaikan pangkat yang berlangsung 2 hari.',
          'foto' => 'porto1.jpg'
        ]);
    }
}
