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
    protected $allowedFields    = ['article_title', 'article_url', 'article_thumbnail', 'article_description', 'article_body', 'created_at', 'updated_at'];

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
            'article_description' => $faker->text(180),
            'article_body' => $faker->paragraphs(5, true)
        ];
    }
}
