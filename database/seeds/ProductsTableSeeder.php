<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 50 products on the database
        $faker = \Faker\Factory::create();

        for($i =0; $i< 50; $i++){
            Product::create(
                [
                    'title'=>$faker->title,
                    'description'=>$faker->paragraph,
                    'price'=>$faker->randomNumber(2),
                    'availability' => $faker->boolean(50)
                ]);
        }
    }
}
