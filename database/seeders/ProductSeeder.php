<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\product;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create([
            "categories_id" => "1",
            "nama_produk" => "Happy Cat Minkas Perfect Mix",
            "slug" => "perfect-mix",
            "harga" => "125000"
        ]);

        product::create([
            "categories_id" => "1",
            "nama_produk" => "Happy Cat Minkas Junior Care",
            "slug" => "junior-care",
            "harga" => "170000"
        ]);

        // product::create([
        //     "categories_id" => "1",
        //     "nama_produk" => "Happy Cat Sensitive Skin & Coat",
        //     "harga" => "160000"
        // ]);

        // product::create([
        //     "categories_id" => "1",
        //     "nama_produk" => "Happy Cat Hairball Control",
        //     "harga" => "148000"
        // ]);

        // product::create([
        //     "categories_id" => "1",
        //     "nama_produk" => "Royal Canin Kitten",
        //     "harga" => "71000"
        // ]);

        // product::create([
        //     "categories_id" => "1",
        //     "nama_produk" => "Royal Canin Persian Adult",
        //     "harga" => "85000"
        // ]);

        // product::create([
        //     "categories_id" => "1",
        //     "nama_produk" => "Royal Canin Hair & Skin Care",
        //     "harga" => "80500"
        // ]);

        // product::create([
        //     "categories_id" => "1",
        //     "nama_produk" => "Me-O Persian Adult",
        //     "harga" => "80500"
        // ]);

        // product::create([
        //     "categories_id" => "2",
        //     "nama_produk" => "Whiskas Adult Wet Food Pouch",
        //     "harga" => "20000"
        // ]);

        // product::create([
        //     "categories_id" => "2",
        //     "nama_produk" => "Whiskas Junior Wet Food Pouch",
        //     "harga" => "20000"
        // ]);

        // product::create([
        //     "categories_id" => "2",
        //     "nama_produk" => "Royal Canin Beauty Wet Food Pouch",
        //     "harga" => "23000"
        // ]);

        // product::create([
        //     "categories_id" => "2",
        //     "nama_produk" => "Royal Canin Kitten Wet Food Pouch",
        //     "harga" => "23000"
        // ]);

        // product::create([
        //     "categories_id" => "2",
        //     "nama_produk" => "Pro Plan Kitten Wet Food Pouch",
        //     "harga" => "17000"
        // ]);

        // product::create([
        //     "categories_id" => "2",
        //     "nama_produk" => "Pro Plan Sensitive Wet Food Pouch",
        //     "harga" => "17000"
        // ]);

        // product::create([
        //     "categories_id" => "2",
        //     "nama_produk" => "Pro Plan Adult Wet Food Pouch",
        //     "harga" => "16000"
        // ]);

        // product::create([
        //     "categories_id" => "2",
        //     "nama_produk" => "Me-O Adult Wet Food Pouch",
        //     "harga" => "17000"
        // ]);

        // product::create([
        //     "categories_id" => "3",
        //     "nama_produk" => "Me-O Creamy Treats Salmon",
        //     "harga" => "19500"
        // ]);

        // product::create([
        //     "categories_id" => "3",
        //     "nama_produk" => "Friskies Party Mix Classic",
        //     "harga" => "22000"
        // ]);

        // product::create([
        //     "categories_id" => "3",
        //     "nama_produk" => "Me-O Creamy Treats Chicken & Liver",
        //     "harga" => "19500"
        // ]);

        // product::create([
        //     "categories_id" => "3",
        //     "nama_produk" => "Friskies Party Mix Beachside",
        //     "harga" => "22000"
        // ]);

        // product::create([
        //     "categories_id" => "3",
        //     "nama_produk" => "Temptations Tasty Chicken Flavour",
        //     "harga" => "21000"
        // ]);

        // product::create([
        //     "categories_id" => "3",
        //     "nama_produk" => "Purina Dentalife Chicken",
        //     "harga" => "23000"
        // ]);

        // product::create([
        //     "categories_id" => "4",
        //     "nama_produk" => "Virbac Nutriplus Gel",
        //     "harga" => "120000"
        // ]);

        // product::create([
        //     "categories_id" => "4",
        //     "nama_produk" => "Fish O Plus Softgel",
        //     "harga" => "25000"
        // ]);

        // product::create([
        //     "categories_id" => "5",
        //     "nama_produk" => "Pet Collar",
        //     "harga" => "20000"
        // ]);

        // product::create([
        //     "categories_id" => "5",
        //     "nama_produk" => "Pet Brush Grooming",
        //     "harga" => "14000"
        // ]);

        // product::create([
        //     "categories_id" => "5",
        //     "nama_produk" => "Pet Bed",
        //     "harga" => "60000"
        // ]);

        // product::create([
        //     "categories_id" => "5",
        //     "nama_produk" => "Pet Litter Box",
        //     "harga" => "70000"
        // ]);

        // product::create([
        //     "categories_id" => "5",
        //     "nama_produk" => "Pet Bowl",
        //     "harga" => "50000"
        // ]);

        // product::create([
        //     "categories_id" => "5",
        //     "nama_produk" => "Pet Cargo",
        //     "harga" => "135000"
        // ]);

        // product::create([
        //     "categories_id" => "5",
        //     "nama_produk" => "Pet Carrier Astronaut",
        //     "harga" => "175000"
        // ]);

        // product::create([
        //     "categories_id" => "5",
        //     "nama_produk" => "Espree Bright White Cat Shampoo",
        //     "harga" => "180000"
        // ]);


    }
}
