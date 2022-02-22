<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\Component;

class CategoriesMenu extends Component
{
    public $categories = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $categories = Category::has('posts')->get();
        if (count($categories) == 0) {
            $categories = Category::all();
        }

        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categories-menu');
    }
}
