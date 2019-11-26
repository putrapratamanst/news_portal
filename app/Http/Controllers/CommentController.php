<?php

namespace App\Http\Controllers;

use App\Traits\CommentTrait;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{
    use CommentTrait;

    public function tambah(Request $request)
    {
        $id   = $request->route('id');

        return view('comment/tambah', ['id' => $id]);
    }

    public function createComment(Request $request)
    {
        $params = $request->all();
        $this->saveDataComment($params);

        return redirect()->action('NewsController@viewNews', ['id' => $params['id']]);
    }
    
    public function detailComment(Request $request)
    {
        $id   = $request->route('id');
        $data = $this->detailDataComment($id);

        return view('comment/detail', ['data' => $data]);
    }

    public function viewComment(Request $request)
    {
        $id   = $request->route('id');
        $data = $this->detailData($id);

        return view('comment/view', ['data' => $data]);
    }

    public function updateComment(Request $request)
    {
        $params      = $request->all();
        $dataComment = $this->detailDataComment($params['id']);
        $this->updateDataComment($params);

        return redirect()->action('NewsController@viewNews', ['id' => $dataComment['news_id']]);
    }

    public function deleteComment(Request $request)
    {
        $id          = $request->route('id');
        $dataComment = $this->detailDataComment($id);
        $this->deleteDataComment($id);

        return redirect()->action('NewsController@viewNews', ['id' => $dataComment['news_id']]);
    }

}
