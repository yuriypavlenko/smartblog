<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index ()
    {
        $mainFeature = Post::where('main_featured', true)->first();
        $featured = Post::where('featured', true)->where('main_featured', false)->inRandomOrder()->limit(2)->get();
        $posts = Post::latest()->simplePaginate(3);

        $feedName = 'From the Firehose';
        $about = 'Lets read most recent posts';

        $params = [
            'mainFeature' => $mainFeature,
            'featured' => $featured,
            'posts' => $posts,
            'feedName' => $feedName,
            'about' => $about
        ];
        return view('welcome', $params);
    }
}
