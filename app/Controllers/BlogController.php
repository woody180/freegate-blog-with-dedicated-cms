<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use stdClass;

class BlogController extends BaseController
{
    // All blog articles
    public function blog()
    {
        echo 'List all articles';
    }
    
    
    // Show blog by category
    public function category(string $url)
    {
        $model = new \App\Models\ArticleModel();
        $data = $model->getWhere($url);
        
        if (empty($data)) 
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        

        return view('blog', [
            'articles' => $data,
            'pager' => $model->pager->getTotal() > $model->pager->getPageCount() ? $model->pager->links() : ''
        ]);
    }
    
    
    // Show article
    public function article(string $blog_url, string $article_url)
    {
        $articleModel = new \App\Models\ArticleModel();
        $article = $articleModel->getArticle($article_url);
        
        if (is_null($article->article_id)) throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

        $categoryIds = explode(',',$article->blog_category_id);
        $categoryTitles = explode(',',$article->blog_category_title);
        $categoryUrls = explode(',',$article->blog_category_url);
        
        $obj = new stdClass();
        $obj->titles = $categoryTitles;
        $obj->urls = $categoryUrls;
        $obj->ids = $categoryIds;

        return view('article', [
            'title' => ucfirst($article->article_title),
            'description' => $article->article_description,
            'article' => $article,
            'category' => $obj,
            'related' => $articleModel->related()
        ]);
    }
}
