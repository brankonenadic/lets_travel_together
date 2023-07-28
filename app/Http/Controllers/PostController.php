<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.blog');
    }

    public function createPost()
    {
        return view('posts.createPost');
    }

}
