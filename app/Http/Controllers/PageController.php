<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home ()
    {
        return view('home');  
    }

    public function blog ()
    {
        $posts = Post::get();

        return view('blog', ['posts' => $posts]);
    }

    public function post ($slug)
    {
        //consulta a base de datos
        
        $post = $slug;

        return view('post', ['post' => $post]);
    }
}
