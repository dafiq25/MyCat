<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categories;
use Illuminate\Support\Facades\DB;



class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categories::create([
            'nama_kategori'=> "Dry Food",
            "slug" => "dry-food"
        ]);

        categories::create([
            'nama_kategori'=> "Wet Food",
            "slug" => "wet-food"
        ]);

        categories::create([
            'nama_kategori'=> "Snack",
            "slug" => "snack"
        ]);

        categories::create([
            'nama_kategori'=> "Multivitamin",
            "slug" => "multivitamin"
        ]);

        categories::create([
            'nama_kategori'=> "Accessories",
            "slug" => "accessories"
        ]);
    }
}
