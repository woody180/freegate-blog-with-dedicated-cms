<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ArticleModel;
use App\Models\BlogCategoryModel;
use App\Models\ArticleBlogCategoryModel;
use CodeIgniter\Test\Fabricator;

class Installer extends Seeder
{
    public function run()
    {
        $this->db->disableForeignKeyChecks();
        
        // Junction table model
        $junctionModel = new ArticleBlogCategoryModel();
        
        $modelCats = new BlogCategoryModel();
        $modelCats->truncate(); // Delete all records
        
        $modelArticles = new ArticleModel();
        $modelArticles->truncate(); // Delete all records

        $articleBlogCategoryModel = new ArticleBlogCategoryModel();
        $articleBlogCategoryModel->truncate(); // Delete all records
        
        $this->db->enableForeignKeyChecks();
        
        // Insert categories
        $fabricator = new Fabricator($modelCats::class);
        $categoriesArray = $fabricator->create(10);
               
        // Insert articles
        $fabricator = new Fabricator($modelArticles::class);
        $articlesArray = $fabricator->create(10);
        
        
        // Fill junction table
        foreach ($categoriesArray as $index => $cat)
        {
            $junctionModel->insert([
                'article_id' => $articlesArray[$index]->article_id,
                'bloc_category_id' => $cat->blog_category_id
            ]);
        }
    }
}
