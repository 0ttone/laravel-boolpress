<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
      public function homepage(){
            
            $allPosts = Post::all();
            return view('home');
        }
}
