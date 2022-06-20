<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class MaincategoryComponent extends Component
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
        $categories = Category::where('parent_id', 0)->get();
        // $categories = Category::all();
        return view('components.maincategory-component', compact('categories'));
    }
}
