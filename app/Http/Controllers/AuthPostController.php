<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class AuthPostController extends Controller
{
    public function index(){
        $authors = Author::find(1);
        $posts = Post::where('author_id', $authors->id)->get();
        return response()->json([
            "authors"=> $authors,
            "post"=>$posts
        ]);
    }
}
