<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;
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
<<<<<<< HEAD
        $posts = DB::table('posts')->orderBy('id','DESC')->paginate(10);
        return view('feed')->with(['posts'=>$posts]);
=======
        $posts = Post::with('author')
            ->latest()
            ->get();

        return view('feed')->with('posts', $posts);
>>>>>>> 3bf5725f65a683036d87d2f92d7da5f9916debd4
    }
}
