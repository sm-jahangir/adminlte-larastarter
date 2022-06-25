<?php

namespace App\View\Components;

use App\Models\Slider;
use Illuminate\View\Component;

class MainsliderComponent extends Component
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
        $sliders = Slider::all();
        return view('components.mainslider-component', compact('sliders'));
    }
}
