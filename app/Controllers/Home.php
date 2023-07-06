<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = new \App\Models\ArticleModel();
        
        return view('home', [
            'articles' => $model->paginate(2),
            'pager' => $model->pager->getPageCount() > 1 ? $model->pager->links() : NULL
        ]);
    }
}
