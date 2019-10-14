<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(PostsRequest $postsRequest)
    {
        $post = Post::create([
            'body' => $postsRequest->body,
            'author_id' => $postsRequest->author_id,
        ]);

        return redirect(route('feed'));
    }
}
