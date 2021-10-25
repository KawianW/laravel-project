<?php

namespace Database\Seeders;

use App\Models\Products as ModelsProducts;
use Illuminate\Database\Seeder;
use Products;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new ModelsProducts([
            'imagePath' => 'https://image.intertoys.nl/wcsstore/IntertoysCAS/images/catalog/full/1033735_001.jpg',
            'title' => 'fantasia 1',
            'description' => 'a cool book - it made me the person I am today',
            'category_id' => '1',
            'price' => 12
        ]);
        $products->save();

        $products = new ModelsProducts([
            'imagePath' => 'https://image.intertoys.nl/wcsstore/IntertoysCAS/images/catalog/full/1019749_001.jpg',
            'title' => 'fantasia 2',
            'description' => 'a cool book - it made me the person I am today',
            'category_id' => '2',
            'price' => 10
        ]);
        $products->save();

        $products = new ModelsProducts([
            'imagePath' => 'https://media.s-bol.com/JN0W0ELR2lpo/825x1200.jpg',
            'title' => 'fantasia 3',
            'description' => 'a cool book - it made me the person I am today',
            'category_id' => '3',
            'price' => 14
        ]);
        $products->save();
    }
}
