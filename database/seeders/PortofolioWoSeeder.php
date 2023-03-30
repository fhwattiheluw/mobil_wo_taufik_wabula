<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\PortofolioWo;
use Illuminate\Database\Seeder;

class PortofolioWoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::where('email', 'wo1@mail.com')->first();
        
        $porto1 = new PortofolioWo();
        $porto1->id_user = $user1->id;
        $porto1->nama_portofolio = "portofolio1";
        $porto1->deskripsi = "Ini adalah portofolio";
        $porto1->foto_portofolio = 'porto-a-foto2.jpg';
        $porto1->save();
        
        $porto2 = new PortofolioWo();
        $porto2->id_user = $user1->id;
        $porto2->nama_portofolio = "portofolio2";
        $porto2->deskripsi = "Ini adalah portofolio";
        $porto2->foto_portofolio = 'porto-a-foto3.jpg';
        $porto2->save();

        $user3 = User::where('email', 'wo3@mail.com')->first();
        $porto3 = new PortofolioWo();
        $porto3->id_user = $user3->id;
        $porto3->nama_portofolio = "portofolio3";
        $porto3->deskripsi = "Ini adalah portofolio";
        $porto3->foto_portofolio = 'porto-a-foto3.jpg';
        $porto3->save();

        $porto4 = new PortofolioWo();
        $porto4->id_user = $user3->id;
        $porto4->nama_portofolio = "portofolio3";
        $porto4->deskripsi = "Ini adalah portofolio";
        $porto4->foto_portofolio = 'porto-a-foto3.jpg';
        $porto4->save();
    }
}
