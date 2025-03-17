<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['category_name' => 'Electronics']);
        Category::create(['category_name' => 'Clothing']);
        Category::create(['category_name' => 'Food']);
        Category::create(['category_name' => 'Books']);
        Category::create(['category_name' => 'Furniture']);
    }
}
