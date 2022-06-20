<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate([
            'name' =>  'Women’s Clothing',
            'slug'  =>  Str::slug('Women’s Clothing'),
            'icon_image' => 'thum2.png',
            'parent_id' => 0,
        ]);

        // SubCategory
        Category::updateOrCreate([
            'name' =>  'JEWELRY & WATCHES Sub Category',
            'slug'  =>  Str::slug('JEWELRY & WATCHES Sub Category'),
            'parent_id' => 1,
        ]);
        // SubCategory
        Category::updateOrCreate([
            'name' =>  'JEWELRY & WATCHES Sub Category 2',
            'slug'  =>  Str::slug('JEWELRY & WATCHES Sub Category 2'),
            'parent_id' => 1,
        ]);

        // SubCategory Child || Assign to Category id 2
        Category::updateOrCreate([
            'name' =>  'Man Fashion',
            'slug'  =>  Str::slug('Man Fashion-3'),
            'parent_id' => 2,
        ]);
        Category::updateOrCreate([
            'name' =>  'Computer & Office',
            'slug'  =>  Str::slug('Computer & Office-3'),
            'parent_id' => 2,
        ]);
        Category::updateOrCreate([
            'name' =>  ' Men’s Clothing',
            'slug'  =>  Str::slug(' Men’s Clothing-3'),
            'parent_id' => 2,
        ]);
        Category::updateOrCreate([
            'name' =>  'Bags & Shoes',
            'slug'  =>  Str::slug('Bags & Shoes-3'),
            'parent_id' => 2,
        ]);
        Category::updateOrCreate([
            'name' =>  'Toys & Kids & Baby',
            'slug'  =>  Str::slug('Toys & Kids & Baby-3'),
            'parent_id' => 2,
        ]);

        // SubCategory Child || Assign to Category id 3
        Category::updateOrCreate([
            'name' =>  'Man Fashion',
            'slug'  =>  Str::slug('Man Fashion-4'),
            'parent_id' => 3,
        ]);
        Category::updateOrCreate([
            'name' =>  'Computer & Office',
            'slug'  =>  Str::slug('Computer & Office-4'),
            'parent_id' => 3,
        ]);
        Category::updateOrCreate([
            'name' =>  ' Men’s Clothing',
            'slug'  =>  Str::slug(' Men’s Clothing-4'),
            'parent_id' => 3,
        ]);
        Category::updateOrCreate([
            'name' =>  'Bags & Shoes',
            'slug'  =>  Str::slug('Bags & Shoes-4'),
            'parent_id' => 3,
        ]);
        Category::updateOrCreate([
            'name' =>  'Toys & Kids & Baby',
            'slug'  =>  Str::slug('Toys & Kids & Baby-4'),
            'parent_id' => 3,
        ]);



        Category::updateOrCreate([
            'name' =>  'Man Fashion',
            'slug'  =>  Str::slug('Man Fashion'),
            'icon_image' => 'thum3.png',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Computer & Office',
            'slug'  =>  Str::slug('Computer & Office'),
            'icon_image' => 'thum4.png',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  ' Men’s Clothing',
            'slug'  =>  Str::slug(' Men’s Clothing'),
            'icon_image' => 'thum6.png',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Bags & Shoes',
            'slug'  =>  Str::slug('Bags & Shoes'),
            'icon_image' => 'thum7.png',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Toys & Kids & Baby',
            'slug'  =>  Str::slug('Toys & Kids & Baby'),
            'icon_image' => 'thum8.png',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Automobiles',
            'slug'  =>  Str::slug('Automobiles'),
            'icon_image' => 'thum9.png',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Jewelry & Watches',
            'slug'  =>  Str::slug('Jewelry & Watches'),
            'icon_image' => 'thum10.png',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'Consumer Electronics',
            'slug'  =>  Str::slug('Consumer Electronics'),
            'icon_image' => 'thum2.png',
            'parent_id' => 0,
        ]);
        Category::updateOrCreate([
            'name' =>  'all Accessories',
            'slug'  =>  Str::slug('all Accessories'),
            'icon_image' => 'thum3.png',
            'parent_id' => 0,
        ]);
    }
}
