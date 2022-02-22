<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view ($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', compact('post'));
    }
}
