<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Thor-4: Ragnarek',
            'description' => 'Information about film',
            'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/thor-ragnarok-1080p-free-desktop-wallpapers.jpg',
            'price' => 15.88
         ]);
 
         DB::table('products')->insert([
             'name' => 'Alita',
             'description' => 'Information about film.',
             'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/thumb-1920-1001399.jpg',
             'price' => 15.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'Avatar',
             'description' => 'Information about film.',
             'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/5XPPB44RQGfkBrbJxmtdndKz05n.jpg',
             'price' => 15.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'Bumblebee',
             'description' => 'Information about film.',
             'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/urPYbqQnMMu5Ug09nI0KAGabbDX-scaled.jpg',
             'price' => 14.99
         ]);
 
         DB::table('products')->insert([
             'name' => 'Avengers',
             'description' => 'Information about film.',
             'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/p076vyls.jpg',
             'price' => 5.00
         ]);
 
         DB::table('products')->insert([
             'name' => 'Scy Scraper',
             'description' => 'Information about film.',
             'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/kQwLX3EUgxopPiuDrab6OhKaOqu.jpg',
             'price' => 15.99
         ]);

         DB::table('products')->insert([
            'name' => 'X-Mans',
            'description' => 'Information about film.',
            'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/1UD1.jpg',
            'price' => 5.99
        ]);

        DB::table('products')->insert([
            'name' => 'Escape plan 3',
            'description' => 'Information about film.',
            'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/FdAuC70x2aDI2DNp7b4KMnAMVRApGBMsLBg3JHlUVMDxlRcOh8M3fp_goG7KbWmNukX2D4_2dUN8-MDOsrzQqkUhmt65cZjF_Mwi_KiaGiMRPCUg.jpg',
            'price' => 5.99
        ]);

        DB::table('products')->insert([
            'name' => 'Passenger',
            'description' => 'Information about film.',
            'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/65844904f5c9f5ba1_0-scaled.jpg',
            'price' => 15.99
        ]);

        DB::table('products')->insert([
            'name' => 'Captain Marvel',
            'description' => 'Information about film.',
            'photo' => 'https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/715250b1084a52d56a46e985dd5d90a8.jpg',
            'price' => 15.99
        ]);
    }
}
