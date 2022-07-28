<?php
namespace App\Lessons;

class Lessons
{
    public function render($type){
        switch ($type) {
            case 'video':
                return new Video();
                break;
            case 'post':
                return new Post();
                break;
        }
    }
}
