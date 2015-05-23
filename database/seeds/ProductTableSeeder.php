<?php

// use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      DB::table('products')->insert([
         'name' => '1 month',
         'interest' => 0.8,
         'tunable_time' => true,
         'color_hex' => '9DC99D',
      ]);

      DB::table('products')->insert([
         'name' => '2 month',
         'interest' => 0.9,
         'tunable_time' => false,
         'color_hex' => '9AD0E9',
      ]);

      DB::table('products')->insert([
         'name' => '3 month',
         'interest' => 1,
         'tunable_time' => false,
         'color_hex' => 'E99AB2',
      ]);
    }
}
