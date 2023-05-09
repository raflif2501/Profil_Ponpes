<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'  => 'superadmin',
        ]);
        Role::create([
            'name'  => 'admin',
        ]);
        Role::create([
            'name'  => 'user',
        ]);

        $admin = User::create([
            'name'     => 'Rafli Firdaus Falaka',
            'email'    => 'raflifirdausfalaka@gmail.com',
            'password' => bcrypt('rafliNS;'),
        ]);
        $admin->assignRole('superadmin');

        $admin = User::create([
            'name'     => 'Wahyu Ramadhan',
            'email'    => 'wahyuramadhan@gmail.com',
            'password' => bcrypt('wahyuNS;'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name'     => 'Ashilah Satya Riyanti',
            'email'    => 'satyaashilah@gmail.com',
            'password' => bcrypt('shilaNS;'),
        ]);
        $user->assignRole('user');
    }
}
