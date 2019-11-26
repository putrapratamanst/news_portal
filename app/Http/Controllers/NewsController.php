<?php

namespace App\Http\Controllers;

use App\Traits\NewsTrait;
use App\Traits\CommentTrait;

use Symfony\Component\HttpFoundation\Request;

class NewsController extends Controller
{
    use NewsTrait;
    use CommentTrait;
    
    public function indexNews()
    {
        $list = $this->getListNews();        

        return view('news/index', ['list' => $list]);
    }

    public function tambah()
    {
        return view('news/tambah');
    }

    public function createNews(Request $request)
    {
        $params   = $request->all();
        $this->saveData($params);

        return redirect()->action('NewsController@indexNews');
    }
    
    public function detailNews(Request $request)
    {
        $id   = $request->route('id');
        $data = $this->detailData($id);
       

        return view('news/detail', ['data' => $data]);
    }

    public function viewNews(Request $request)
    {
        $id          = $request->route('id');
        $data        = $this->detailData($id);
        $listComment = $this->getListComment($id);
        return view('news/view', ['data' => $data, 'listComment' => $listComment]);
    }

    public function updateNews(Request $request)
    {
        $params   = $request->all();
        $this->updateData($params);

        return redirect()->action('NewsController@indexNews');
    }

    public function deleteNews(Request $request)
    {
        $id   = $request->route('id');
        $this->deleteData($id);

        return redirect()->action('NewsController@indexNews');
    }

}
