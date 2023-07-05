<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ArticleModel;
use App\Models\BlogCategoryModel;
use CodeIgniter\Test\Fabricator;

class Installer extends Seeder
{
    public function run()
    {
        // Remove all data before insert again
        $modelCats = new BlogCategoryModel();
        $modelCats->purgeDeleted();
        
        // Remove all data before insert again
        $modelArticles = new ArticleModel();
        $modelArticles->purgeDeleted();
        
        // Insert categories
        $fabricator = new Fabricator($modelCats::class);
        $categoriesArray = $fabricator->create(10);
        
        // Insert articles
        $fabricator = new Fabricator($modelArticles::class);
        $articlesArray = $fabricator->create(10);
        
        
        // Fill junction table
        foreach ($categoriesArray as $index => $cat) {
            dd($cat);
        }
    }
}
