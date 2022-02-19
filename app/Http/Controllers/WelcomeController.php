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

        $params = ['mainFeature' => $mainFeature];
        return view('welcome', $params);
    }
}
