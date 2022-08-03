<?php

namespace App\View\Components;

use App\Models\Product;
use App\Models\Category;
use Illuminate\View\Component;

class BagShoesComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $bagshoes = Category::find(17);
        $featuredProduct = Product::where('featured', true)->get();
        $popularProduct = Product::where('popular', true)->get();
        $trendingProduct = Product::where('trending', true)->get();
        return view('components.bag-shoes-component', compact('bagshoes', 'featuredProduct', 'popularProduct', 'trendingProduct'));
    }
}
