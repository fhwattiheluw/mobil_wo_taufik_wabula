<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketWoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_wo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('nama_paket')->nullable(false);
            $table->enum('jenis', ['silver','gold', 'platinum'])->default('silver');
            $table->unsignedDecimal('harga', 10, 0)->nullable(false);
            $table->text('spesifikasi')->nullable(false);
            $table->enum('status', ['aktif', 'nonaktif'])->default('nonaktif');
            $table->string('foto_paket')->nullable(false);
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
        Schema::dropIfExists('paket_wo');
    }
}
