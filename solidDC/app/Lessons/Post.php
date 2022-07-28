<?php

namespace App\Lessons;

class Post implements LessonInterface
{
    public function display($post)
    {
        return view('post', compact('post'));
    }
}
