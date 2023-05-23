<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        users::create([
            'firstname' => 'admin',
            'lastname' => 'test',
            'alamat' => 'jl.zxc',
            'notelp' => '0819238122',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        users::create([
            'firstname' => 'user',
            'lastname' => 'test',
            'alamat' => 'jl.zxc',
            'notelp' => '0819238122',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);

        // $this->call([
        //     ProductSeeder::class,
        //     CategoriesSeeder::class
        // ]);
    }
}
