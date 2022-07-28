<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Lessons\Lesson;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    public function index(PostRepositoryInterface $post)
    {
        $posts = $post->data();

        return response()->json($posts);
    }

    public function store(PostRequest $request)
    {
        $post = new PostRequest(
            $post->create($request->all())
        );
        return response()->json($post, 201);
    }

    public function show(Post $post, Lesson $lesson)
    {
        $lesson = $lesson->render($post->type);
        return $lesson->display($post);
    }
}
