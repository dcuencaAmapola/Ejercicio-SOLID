<?php

namespace App\Lessons;

class Video implements LessonInterface
{
    public function display($post)
    {
        return view('video', compact('post'));
    }
}
