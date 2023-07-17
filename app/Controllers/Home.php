<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = new \App\Models\ArticleModel();
        
        return view('home', [
            'featured' => $model->featured(),
            'articles' => $model->getAll(), // Default articles per pages - 20
            'pager' => $model->pager->getPageCount() > 1 ? $model->pager->links() : NULL
        ]);
    }
}
