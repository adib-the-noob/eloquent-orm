<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_post(Request $request, $author_id){
        $data = $request->validate([
            "title"=> "string|required",
            "cat"=> "string|required",
        ]);
        $autor = Author::find($author_id);
        $post = new Post([
            "title"=> $data["title"],
            "cat"=> $data["cat"],
        ]);
        $post->author_id = $author_id;
        $post->save();
        return response()->json([
            "message"=> "Post created successfully",
            "post"=> $post,
        ]);
    }

    public function get_posts(Request $request, $author_id){
        $author = Author::find($author_id);
        $posts = Post::where("author_id", $author_id)->get();
        return response()->json([
            "author"=> $author,
            "posts"=> $posts,
        ]);

    }

}
