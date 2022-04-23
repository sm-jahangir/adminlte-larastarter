<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = Product::create([
            'title' => 'Iphone 11 Pro Max',
            'slug' => Str::slug('Iphone 11 Pro Max'),
            'user_id' => 1,
            'brand_id' => 1,
            'excerpt' => 'Altec Lansing True Evo+ Truly Wireless Earphones, 4 Hours of Battery Life, Receive Up to 4 Charges on The Go, Access Siri or Google Voice Assistant via Bluetooth Through Your Smartphone, MZX659-BLK ',
            'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cur Product Tarentum ad Archytam? An est aliquid, quod te sua sponte delectet? Quos quidem tibi studiose et diligenter tractandos magnopere censeo. </p>
            <p>Odium autem et invidiam facile vitabis. Sed haec omittamus; </p>",
            'price' => 150000,
            'sale_price' => 120000,
            'stock_status' => 'In Stock',
            'product_collections' => 'Best Sellers',
            'labels' => 'Hot',
            'trending' => true,
            'popular' => true,
            'image' =>  'product-1.jpg'
        ]);
        $product1->categories()->attach(1);
        $product1->tags()->attach(1);
        $product1->colors()->attach(1);
        $product1->sizes()->attach(1);

        $product2 = Product::create([
            'title' => 'Iphone 12 Pro Max',
            'slug' => Str::slug('Iphone 12 Pro Max'),
            'user_id' => 1,
            'brand_id' => 1,
            'excerpt' => 'Altec Lansing True Evo+ Truly Wireless Earphones, 4 Hours of Battery Life, Receive Up to 4 Charges on The Go, Access Siri or Google Voice Assistant via Bluetooth Through Your Smartphone, MZX659-BLK ',
            'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cur Product Tarentum ad Archytam? An est aliquid, quod te sua sponte delectet? Quos quidem tibi studiose et diligenter tractandos magnopere censeo. </p>
            <p>Odium autem et invidiam facile vitabis. Sed haec omittamus; </p>",
            'price' => 150000,
            'sale_price' => 120000,
            'stock_status' => 'In Stock',
            'product_collections' => 'Best Sellers',
            'labels' => 'Hot',
            'trending' => true,
            'popular' => true,
            'image' =>  'product-1.jpg'
        ]);
        $product2->categories()->attach(1);
        $product2->tags()->attach(1);
        $product2->colors()->attach(1);
        $product2->sizes()->attach(1);

        $product3 = Product::create([
            'title' => 'Iphone 13 Pro Max',
            'slug' => Str::slug('Iphone 13 Pro Max'),
            'user_id' => 1,
            'brand_id' => 1,
            'excerpt' => 'Altec Lansing True Evo+ Truly Wireless Earphones, 4 Hours of Battery Life, Receive Up to 4 Charges on The Go, Access Siri or Google Voice Assistant via Bluetooth Through Your Smartphone, MZX659-BLK ',
            'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cur Product Tarentum ad Archytam? An est aliquid, quod te sua sponte delectet? Quos quidem tibi studiose et diligenter tractandos magnopere censeo. </p>
            <p>Odium autem et invidiam facile vitabis. Sed haec omittamus; </p>",
            'price' => 150000,
            'sale_price' => 120000,
            'stock_status' => 'In Stock',
            'product_collections' => 'Best Sellers',
            'labels' => 'Hot',
            'trending' => true,
            'popular' => true,
            'image' =>  'product-1.jpg'
        ]);
        $product3->categories()->attach(1);
        $product3->tags()->attach(1);
        $product3->colors()->attach(1);
        $product3->sizes()->attach(1);
    }
}
