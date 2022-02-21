<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function byAuthor($slug)
    {
        $user = User::where('slug', $slug)->first();
        $posts = $user->posts()->latest()->simplePaginate(3);

        $params = [
            'mainFeature' => [],
            'featured' => [],
            'posts' => $posts
        ];
        return view('welcome', $params);
    }
}
