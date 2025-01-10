<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    public function add_author(Request $request){
        $data = $request->validate([
            "username"=> "string|required",
            "password"=> "string|required",
        ]);

        $author = Author::create([
            "username"=> $data["username"],
            "password"=> $data["password"],
        ]);

        return response()->json([
            "message"=> "Author created successfully",
            "author"=> $author,
        ]);
    }

    public function get_author($post_id){
        $author_info = Post::find($post_id)->author;
        return response()->json([
            "message"=> "Author found",
            "author"=> $author_info,
            ]);
    }
}
