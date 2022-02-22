<?php

namespace App\View\Components;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\View\Component;

class ArchivePosts extends Component
{
    public $months;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->months = Post::get()->groupBy(function ($d) {
            return Carbon::parse($d->created_at)->format('F Y');
        });
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.archive-posts');
    }
}
