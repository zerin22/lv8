<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //SHOW ALL POST LIST
    public function index()
    {
        //$posts = Post::all();
        //  $posts = Post::paginate(5);
        $posts = Post::simplePaginate(5);
        // dd($posts);
        return view('posts.index', compact('posts'));

    }
}
