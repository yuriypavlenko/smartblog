<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index ()
    {
        $mainFeature = Post::where('main_featured', true)->first();
        $featured = Post::where('featured', true)->where('main_featured', false)->inRandomOrder()->limit(2)->get();
        $posts = Post::latest()->simplePaginate(3);

        $params = [
            'mainFeature' => $mainFeature,
            'featured' => $featured,
            'posts' => $posts
        ];
        return view('welcome', $params);
    }
}
