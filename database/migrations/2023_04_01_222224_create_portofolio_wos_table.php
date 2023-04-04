<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortofolioWosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolio_wo', function (Blueprint $table) {
          $table->id();
          $table->foreignId('id_user')->constrained('users');
          $table->foreignId('id_paket_wo')->constrained('paket_wo');
          $table->string('nama_acara')->nullable(false);
          $table->date('tanggal_acara')->nullable(false);
          $table->string('lokasi')->nullable(false);
          $table->text('keterangan')->nullable(true);
          $table->string('foto')->nullable(false);
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portofolio_wo');
    }
}
