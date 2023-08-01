<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\Generator;
use Faker\Provider\Image;

class BlogCategoryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'blogcategory';
    protected $primaryKey       = 'blog_category_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['blog_category_title', 'blog_category_url', 'blog_category_description', 'blog_category_thumbnail', 'blog_category_banner', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
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
        $title = $faker->words(rand(2,5), true);
        $url = url_title(strtolower($title));
        $imageID = rand(55, 400);
        return [    
            'blog_category_title' => $title,
            'blog_category_url' => $url,
            'blog_category_description' => $faker->text(50),
            'blog_category_thumbnail' => 'https://picsum.photos/id/'.$imageID.'/550/350',
            'blog_category_banner' => 'https://picsum.photos/id/'.$imageID.'/1900/550'
        ];
    }



    public function list()
    {
        return $this
            ->select('blog_category_id, blog_category_title, blog_category_url')
            ->findAll();
    }

}
