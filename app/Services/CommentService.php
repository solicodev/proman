<?php

namespace App\Services;

use App\Models\Comment;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

/**
 * Class CommentService.
 */
class CommentService
{
    public function store(array $param) :Comment
    {
        $comment = new Comment();
        $comment->title = $param['title'];
        $comment->comments_type = $param[Task::class];
        $comment->comments_id = $param[Comment::class];
        $comment->name = Auth::user()->Name;
        $comment->text = $param['text'];
        $comment->status = 'accepted';

        $comment->save();
        return $comment;
    }
}
