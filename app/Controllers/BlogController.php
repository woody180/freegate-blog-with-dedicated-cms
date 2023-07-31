<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
        echo 'List articles by category: ' . $url;
    }
    
    
    // Show article
    public function article(string $blog_url, string $article_url)
    {
        $articleModel = new \App\Models\ArticleModel();
        $article = $articleModel->getArticle($article_url) ?? throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

        return view('article', [
            'title' => ucfirst($article->article_title),
            'description' => $article->article_description,
            'article' => $article
        ]);
    }
}
