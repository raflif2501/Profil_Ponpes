<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontens', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('tanggal');
            $table->string('gambar');
            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->string('gambar4')->nullable();
            $table->string('gambar5')->nullable();
            $table->string('gambar6')->nullable();
            $table->string('gambar7')->nullable();
            $table->string('gambar8')->nullable();
            $table->string('gambar9')->nullable();
            $table->string('gambar10')->nullable();
            $table->string('isi');
            $table->string('isi1')->nullable();
            $table->string('isi2')->nullable();
            $table->string('isi3')->nullable();
            $table->string('isi4')->nullable();
            $table->string('isi5')->nullable();
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
        Schema::dropIfExists('konten');
    }
}
