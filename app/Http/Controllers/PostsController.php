<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function byAuthor($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        $posts = $user->posts()->latest()->simplePaginate(3);
        $count = $user->posts()->count();

        $feedName = 'Posts by ' . $user->name;
        $about = 'Lets read most recent posts by ' . $user->name . '. Total: ' . $count;

        $params = [
            'feedName' => $feedName,
            'posts' => $posts,
            'about' => $about
        ];
        return view('welcome', $params);
    }

    public function byMonth($date)
    {
        try {
            $dateObj = Carbon::createFromFormat('M-Y', $date);
        } catch (\Exception $e) {
            abort(404);
        }

        $monthNumber = $dateObj->format('n');
        $year = $dateObj->format('Y');
        $dateText = $dateObj->format('F Y');

        $posts = Post::whereMonth('created_at', $monthNumber)->whereYear('created_at', $year)->latest()->simplePaginate(3);
        $count = Post::count();

        $feedName = 'Posts in ' . $dateText;
        $about = 'Lets read most recent posts in ' . $dateText . '. Total: ' . $count;

        $params = [
            'feedName' => $feedName,
            'posts' => $posts,
            'about' => $about
        ];
        return view('welcome', $params);
    }

    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->latest()->simplePaginate(3);
        $count = $category->posts()->count();

        $feedName = 'Posts in ' . $category->name;
        $about = 'Lets read most recent posts in ' . $category->name . ' category. Total: ' . $count;

        $params = [
            'feedName' => $feedName,
            'posts' => $posts,
            'about' => $about
        ];
        return view('welcome', $params);
    }
}
