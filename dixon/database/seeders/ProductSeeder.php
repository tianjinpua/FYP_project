<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([

            [
                "name"=>'bg mobile',
                "price"=>"200",
                "description"=>"A dasdsadasdas",
                "category"=>"mobile",
                "gallery"=>"img\download.jpg",
            ],
            [
                "name"=>'cg mobile',
                "price"=>"200",
                "description"=>"A dasdsadasdas",
                "category"=>"mobile",
                "gallery"=>"public\abc.jpg",
            ]


        ]);
    }
}
