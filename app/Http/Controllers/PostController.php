<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all() {

        // $Posts = Post::with(['user'])->where('user_id',1)->get();
        // $posts = Post::orderBy('created_at', 'desc')->get(); //TODO latest id

        $Posts = Post::with(['comments', 'user', 'comments.user'])->latest()->get();
        return response()->json([ 'posts' => $Posts ]);
    }
    
    public function single($post_id) {
        // $input = ($request->all() == null ? json_decode($request->getContent().true))
    // public function show(Post $post_id)     from ABRAM 
        $Post = Post::with(['comments', 'user'])->where('id', $post_id)->get();
        return response()->json([ 
            'post' => $Post
        ]);
    }

    public function create(Request $request) {
        $post = Post::create([
            'title'=> $request['title'],
            'body'=> $request['body'],
            'user_id'=> $request['user_id']
        ]);
    }
}
