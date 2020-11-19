<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\MyPosts;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function addPost()
    {
        $post = new myPosts();
        $post->title = "First_Post Title";
        $post->body= "First_Post Body";
        $post->save();
        return "post has been saved";
    }

    public function addComment($id)
    {
        $post = MyPosts::find($id);
        $comment = new Comment();
        $comment->comment = 'this is First_Post Comment';
        $post->comments()->save($comment);
        return "comment has bee saved";
    }

    public function getCommentsByPosts($id)
    {
        $comments = MyPosts::find($id)->comments;
        return $comments;
    }
}
