<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
         $this->middleware('auth')->except('homePage');
    }

    public function homePage()
    {
        return view('index');
    }

    /**
     * List posts on feed page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::with('author')
            ->latest()
            ->get();

        return view('feed')->with('posts', $posts);
    }
}
