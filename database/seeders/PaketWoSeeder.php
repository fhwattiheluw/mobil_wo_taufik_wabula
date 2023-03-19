<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\PaketWo;
use Illuminate\Database\Seeder;

class PaketWoSeeder extends Seeder
{
    public function run()
    {
        // Ambil user pertama sebagai penjual paket
        $user1 = User::where('email', 'wo1@mail.com')->first();

        // Generate data paket untuk user pertama
        $paket1 = new PaketWo();
        $paket1->id_user = $user1->id;
        $paket1->nama_paket = 'Paket A';
        $paket1->harga = 1000000.00;
        $paket1->spesifikasi = 'Paket A spesifikasi';
        $paket1->status = 'aktif';
        $paket1->foto_paket1 = 'paket-a-foto1.jpg';
        $paket1->foto_paket2 = 'paket-a-foto2.jpg';
        $paket1->save();

        $paket2 = new PaketWo();
        $paket2->id_user = $user1->id;
        $paket2->nama_paket = 'Paket B';
        $paket2->harga = 1500000.00;
        $paket2->spesifikasi = 'Paket B spesifikasi';
        $paket2->status = 'aktif';
        $paket2->foto_paket1 = 'paket-b-foto1.jpg';
        $paket2->save();

        // Ambil user kedua sebagai penjual paket
        $user2 = User::where('email', 'wo2@mail.com')->first();

        // Generate data paket untuk user kedua
        $paket3 = new PaketWo();
        $paket3->id_user = $user2->id;
        $paket3->nama_paket = 'Paket C';
        $paket3->harga = 2000000.00;
        $paket3->spesifikasi = 'Paket C spesifikasi';
        $paket3->status = 'aktif';
        $paket3->foto_paket1 = 'paket-c-foto1.jpg';
        $paket3->foto_paket2 = 'paket-c-foto2.jpg';
        $paket3->foto_paket3 = 'paket-c-foto3.jpg';
        $paket3->foto_paket4 = 'paket-c-foto4.jpg';
        $paket3->save();

        $paket4 = new PaketWo();
        $paket4->id_user = $user2->id;
        $paket4->nama_paket = 'Paket D';
        $paket4->harga = 2500000.00;
        $paket4->spesifikasi = 'Paket D spesifikasi';
        $paket4->status = 'aktif';
        $paket4->foto_paket1 = 'paket-d-foto1.jpg';
        $paket4->save();
    }
}
