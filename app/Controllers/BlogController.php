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
        echo 'Show article content: ' . $blog_url . ' - ' . $article_url;
    }
}
