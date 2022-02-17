<?php

namespace App\Controllers;

use App\Models\Post;
use App\View\View;

class PostController
{
    public function list()
    {
        $posts = Post::all();

        return new View('post.posts', ['posts' => $posts, 'title' => 'посты']);
    }

    public function read($id)
    {
        $post = Post::where('id', $id)->get();

        return new View('post.post', ['post' => $post]);
    }
}