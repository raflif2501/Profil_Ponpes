<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'Rafli Firdaus Falaka',
        'email' => 'raflifirdausfalaka@gmail.com',
        'password' => bcrypt('rafliPONPES;'),
        ]);
    }
}
