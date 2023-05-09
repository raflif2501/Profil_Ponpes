<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santris');
            $table->foreignId('orang_id')->constrained('orangs');
            $table->string('wali');
            $table->string('tempat3');
            $table->date('tgl3');
            $table->string('alamat3');
            $table->string('telp3');
            $table->string('pendidikan3');
            $table->string('pekerjaan3');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('walis');
    }
}
