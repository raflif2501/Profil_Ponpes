<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Struktur;
use Illuminate\Support\Facades\DB;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = Struktur::create([
        'nama' => 'Abus Suyuf Ibnu Abdillah',
        'jabatan' => 'Pengasuh',
        'gelar' => 'KH.',
        ]);

        $content = Struktur::create([
        'nama' => 'Moh. Saifa Abidillah',
        'jabatan' => 'Dewan Pengasuh I',
        'gelar' => 'Gus',
        ]);
        $content = Struktur::create([
        'nama' => 'Moh. Saifa Ibadillah',
        'jabatan' => 'Dewan Pengasuh II',
        'gelar' => 'Gus',
        ]);
        $content = Struktur::create([
        'nama' => 'Moh. Saifa Abudillah',
        'jabatan' => 'Dewan Pengasuh III',
        'gelar' => 'Gus',
        ]);

        $content = Struktur::create([
        'nama' => 'Moh. Shodiq',
        'jabatan' => 'Penasehat',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Asad Abdul Ghani',
        'jabatan' => 'Ketua',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Sauqi Fauzan Adhim',
        'jabatan' => 'Sekretaris I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'M. Ardian H.U',
        'jabatan' => 'Sekretaris II',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Syihab Muh Ubaidillah',
        'jabatan' => 'Bendahara I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Fathor Rozi',
        'jabatan' => 'Bendahara I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Imam Faruq',
        'jabatan' => 'Pendidikan I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Khoidil Awwali',
        'jabatan' => 'Pendidikan II',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Moh. Anwar',
        'jabatan' => 'Pendidikan III',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Imam Ghazali',
        'jabatan' => 'Pendidikan IV',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Ahmad Sholahuddin',
        'jabatan' => 'Keamanan I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Ahmad Zaidi',
        'jabatan' => 'Keamanan II',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'A.Krisno Sanjaya',
        'jabatan' => 'Keamanan III',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Moh. Jailani',
        'jabatan' => 'Kesehatan I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Khairul Musthafa',
        'jabatan' => 'Kesehatan II',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'A. Junaidi',
        'jabatan' => 'Dhalem Bere',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Hermanto',
        'jabatan' => 'Dhalem',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Bambang Haryono',
        'jabatan' => 'Dhalem Dhaje',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'M.Arif',
        'jabatan' => 'Kesejahteraan I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Ach. Walid Khujairi',
        'jabatan' => 'Kesejahteraan II',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Khairul Amin',
        'jabatan' => 'Kesejahteraan III',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Khairul Anwar',
        'jabatan' => 'Petugas Koperasi I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Ahmad Junaidi',
        'jabatan' => 'Petugas Koperasi II',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Abd. Roziq Al Humaidi',
        'jabatan' => 'Perkeber I',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Hermanto',
        'jabatan' => 'Perkeber II',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Zakariya Nur Roziqi',
        'jabatan' => 'Perkeber III',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Rojil Ghufroni',
        'jabatan' => 'Perkeber IV',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Zizki Alif',
        'jabatan' => 'Perkeber V',
        'gelar' => 'Ust.',
        ]);
        $content = Struktur::create([
        'nama' => 'Moh, Ibrahim Ali Akbar',
        'jabatan' => 'Perkeber VI',
        'gelar' => 'Ust.',
        ]);
    }
}
