<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function byAuthor($slug)
    {
        $user = User::where('slug', $slug)->first();
        $posts = $user->posts()->latest()->simplePaginate(3);

        $feedName = 'Posts by ' . $user->name;
        $about = 'Lets read most recent posts by ' . $user->name . '. Total: ' . count($posts);

        $params = [
            'feedName' => $feedName,
            'mainFeature' => [],
            'featured' => [],
            'posts' => $posts,
            'about' => $about
        ];
        return view('welcome', $params);
    }

    public function byMonth($date)
    {
        $dateObj = Carbon::createFromFormat('F-Y', $date);
        $monthNumber = $dateObj->format('n');
        $year = $dateObj->format('Y');

        $posts = Post::whereMonth('created_at', $monthNumber)->whereYear('created_at', $year)->latest()->simplePaginate(3);

        $feedName = 'Posts in ' . $dateObj->format('F Y');
        $about = 'Lets read most recent posts in ' . $dateObj->format('F Y') . '. Total: ' . count($posts);

        $params = [
            'feedName' => $feedName,
            'mainFeature' => [],
            'featured' => [],
            'posts' => $posts,
            'about' => $about
        ];
        return view('welcome', $params);
    }
}
