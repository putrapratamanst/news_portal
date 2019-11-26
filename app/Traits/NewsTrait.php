<?php

namespace App\Traits;

use App\Models\News;
use Illuminate\Support\Facades\DB;

trait NewsTrait
{
    public function getListNews()
    {
        $data = News::get();

        return $data;
    }

    public function saveData($params)
    {
        $news           = new News();
        $news->title    = $params['title'];
        $news->content  = $params['content'];
        $news->save();
    }

    public function detailData($id)
    {
        $news = News::where('id', $id)->first();
        return $news;
    }

    public function updateData($params)
    {
        $data = self::detailData($params['id']);
        $data->title = $params['title'];
        $data->content = $params['content'];
        $data->save();
    }

    public function deleteData($id)
    {
        $news = News::where('id', $id)->first();
        if($news)
        {
            $comment = $this->getListComment($id);
            if($comment){
                foreach ($comment as $key => $value) {
                    $value->delete(); 
                }
            }
            $news->delete();
        }
    }

}
