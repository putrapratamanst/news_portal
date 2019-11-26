<?php

namespace App\Traits;

use App\Models\Comment;

trait CommentTrait
{
    public function getListComment($id)
    {
        $data = Comment::where('news_id', $id)->get();

        return $data;
    }

    public function saveDataComment($params)
    {
        $comment            = new Comment();
        $comment->news_id   = $params['id'];
        $comment->name      = $params['name'];
        $comment->comment   = $params['comment'];
        $comment->save();
    }

    public function detailDataComment($id)
    {
        $comment = Comment::where('id', $id)->first();
        return $comment;
    }

    public function updateDataComment($params)
    {
        $data           = self::detailDataComment($params['id']);
        $data->name     = $params['name'];
        $data->comment  = $params['comment'];
        $data->save();

        return $params['id'];
    }

    public function deleteDataComment($id)
    {
        $comment = Comment::where('id', $id)->first();
        if($comment)
        {
            $comment->delete();
        }
    }
    

}
