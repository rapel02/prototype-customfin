<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
    		[
	            'name' => "Peti Wow",
                'price' => 1500000,
                'image_path' => "product.jpg",
                'user_id'=> 0,
                'slug' => "peti-wow-0-1",
                "description" => "Peti yang sangat mewah. Belum pernah ada di dunia"
	        ],
	        [
	            'name' => "Peti Kayu",
                'price' => 500000,
                'image_path' => "no-image.png",
                'user_id'=> 0,
                'slug' => "peti-kayu-0-2",
                "description" => "Peti biasa aja"
            ],
            [
	            'name' => "Peti Antik",
                'price' => 2750000,
                'image_path' => "product-3.jpeg",
                'user_id'=> 0,
                'slug' => "peti-antik-0-3",
                "description" => "Peti yang sangat mewah. Belum pernah ada di dunia"
	        ],
        ]);
    }
}
