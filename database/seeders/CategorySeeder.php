<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['category_name' => 'Electronics', 'description' => 'Devices and gadgets']);
        Category::create(['category_name' => 'Clothing', 'description' => 'Apparel and fashion']);
        Category::create(['category_name' => 'Food', 'description' => 'Groceries and consumables']);
        Category::create(['category_name' => 'Books', 'description' => 'Educational and entertainment books']);
        Category::create(['category_name' => 'Furniture', 'description' => 'Home and office furnishings']);
    }
}
