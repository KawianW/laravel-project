<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Categories([
            'name' => 'category1',
        ]);
        $category->save();

        $category = new Categories([
            'name' => 'category2',
        ]);
        $category->save();

        $category = new Categories([
            'name' => 'category3',
        ]);
        $category->save();
    }
}