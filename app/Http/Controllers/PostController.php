<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){
        $post = Post::all();
        return view ('home', ['data' => $post]);
    }
}
