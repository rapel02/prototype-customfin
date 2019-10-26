<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transaction')->insert([
    		[
	            'user_id' => 1,
                'product_id' => 1,
                'qty' => 1,
                'status'=> 1,
                'address' => "Binus Syahdan"
	        ],
	        [
	            'user_id' => 1,
                'product_id' => 2,
                'qty' => 2,
                'status'=> 2,
                'address' => "Bumi Nusantara"
            ],
            [
                'user_id' => 1,
                'product_id' => 3,
                'qty' => 3,
                'status'=> 3,
                'address' => "Binus Malang"
            ],
            [
                'user_id' => 1,
                'product_id' => 1,
                'qty' => 4,
                'status'=> 4,
                'address' => "Binus Square"
            ],
            [
                'user_id' => 1,
                'product_id' => 3,
                'qty' => 1,
                'status'=> 0,
                'address' => "Binus Anggrek"
            ]
        ]);
    }
}
