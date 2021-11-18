<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<=7;$i++){
            Product::create(
                [
                    'name'=>'Product '.$i,
                    'price'=>1.2+$i,
                    'image'=>'img'.$i.'.png'
                ]
            );
        }

    }
}
