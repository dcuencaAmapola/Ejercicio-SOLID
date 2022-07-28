<?php

namespace App\Repositories;

use App\Post;

class PostRepository implements PostRepositoryInterface
{
    public function data()
    {
        return Post::get();
    }
}
