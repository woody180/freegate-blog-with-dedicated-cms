<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\Generator;
use Faker\Provider\Image;

class ArticleModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'article';
    protected $primaryKey       = 'article_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['article_title', 'article_url', 'article_thumbnail', 'article_banner', 'article_description', 'article_body', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    
    
    
    public function fake(Generator &$faker)
    {
        $title = $faker->words(rand(2,4), true);
        $url = url_title(strtolower($title));
        return [    
            'article_title' => $title,
            'article_url' => $url,
            'article_thumbnail' => 'https://picsum.photos/id/'.rand(55, 400).'/550/350',
            'article_banner' => 'https://picsum.photos/id/'.rand(55, 400).'/1920/850',
            'article_description' => $faker->text(180),
            'article_body' => $faker->paragraphs(5, true)
        ];
    }



    public function getArticle(string $url)
    {
        return 
        $this
        ->select('
            article.*, 
            GROUP_CONCAT(b.blog_category_id) as blog_category_id,
            GROUP_CONCAT(b.blog_category_url) as blog_category_url,
            GROUP_CONCAT(b.blog_category_title) as blog_category_title 
        ')
        ->join('article_blog_category_junction c', 'article.article_id = c.article_id')
        ->join('blogcategory b', 'b.blog_category_id = c.blog_category_id')
        ->where('article.article_published', 1)
        ->where('article.article_url', $url)
        ->first();
    }
    
    
    
    public function getAll(int $perPage = 20)
    {
        return 
        $this->select('
            article.article_title,
            article.article_url,
            article.article_thumbnail,
            article.article_banner,
            article.article_description,
            article.article_published, 
            article.created_at,
            GROUP_CONCAT(b.blog_category_id) as blog_category_id,
            GROUP_CONCAT(b.blog_category_url) as blog_category_url,
            GROUP_CONCAT(b.blog_category_title) as blog_category_title 
        ')
        ->join('article_blog_category_junction c', 'article.article_id = c.article_id')
        ->join('blogcategory b', 'b.blog_category_id = c.blog_category_id')
        ->where('article.article_published', 1)
        ->groupBy('
            article.article_title,
            article.article_url,
            article.article_thumbnail,
            article.article_banner,
            article.article_description,
            article.article_published, 
            article.created_at
        ')->paginate($perPage);
    }
    
    
    
    
    public function getWhere(string $blog_url, int $perPage = 20)
    {
        return 
        $this->select('
            article.article_title,
            article.article_url,
            article.article_thumbnail,
            article.article_banner,
            article.article_description,
            article.article_published, 
            article.created_at,
            GROUP_CONCAT(b.blog_category_id) as blog_category_id,
            GROUP_CONCAT(b.blog_category_url) as blog_category_url,
            GROUP_CONCAT(b.blog_category_title) as blog_category_title 
        ')
        ->join('article_blog_category_junction c', 'article.article_id = c.article_id')
        ->join('blogcategory b', 'b.blog_category_id = c.blog_category_id')
        ->where('article.article_published', '1')
        ->where('blog_category_url', $blog_url)
        ->groupBy('
            article.article_title,
            article.article_url,
            article.article_thumbnail,
            article.article_banner,
            article.article_description,
            article.article_published, 
            article.created_at
        ')->paginate($perPage);
    }
    
    
    
    // Featured articles
    public function featured()
    {
        return $this->select('
                article.article_title,
                article.article_url,
                article.article_thumbnail,
                article.article_banner,
                article.article_description,
                article.article_published, 
                article.created_at,
                GROUP_CONCAT(b.blog_category_id) as blog_category_id,
                GROUP_CONCAT(b.blog_category_url) as blog_category_url,
                GROUP_CONCAT(b.blog_category_title) as blog_category_title 
            ')
            ->join('article_blog_category_junction c', 'article.article_id = c.article_id')
            ->join('blogcategory b', 'b.blog_category_id = c.blog_category_id')
            ->where('article.article_published', '1')
            ->where('article_featured', 1)
            ->groupBy('
                article.article_title,
                article.article_url,
                article.article_thumbnail,
                article.article_banner,
                article.article_description,
                article.article_published, 
                article.created_at
            ')->get()->getResultObject();
    }
}
