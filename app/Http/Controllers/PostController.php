<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    { 
        $posts = Post::with('user')->get();
        $posts = Post::paginate(5);
        /* $posts = Post::all(); */
        /* $posts = auth()->user()->posts()->paginate(5); */
        return view('posts.blog', compact('posts'));
    }

    public function createPost()
    {
        return view('posts.createPost');
    }

}
