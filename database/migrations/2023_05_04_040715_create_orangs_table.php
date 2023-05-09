<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santris');
            $table->string('ayah');
            $table->string('tempat1');
            $table->date('tgl1');
            $table->string('alamat1');
            $table->string('telp1');
            $table->string('pendidikan1');
            $table->string('pekerjaan1');
            $table->string('ibu');
            $table->string('tempat2');
            $table->date('tgl2');
            $table->string('alamat2');
            $table->string('telp2');
            $table->string('pendidikan2');
            $table->string('pekerjaan2');
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
        Schema::dropIfExists('orangs');
    }
}
