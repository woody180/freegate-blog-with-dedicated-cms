<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArticleBlogcategory extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->addField([
            'ab_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'article_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
            'bloc_category_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ]
        ]);
        
        $this->forge->addKey('ab_id', true);
        
        $this->forge->addForeignKey('article_id', 'article', 'article_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('bloc_category_id', 'blogcategory', 'blog_category_id', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('article_blog_category_junction');
        
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('article_blog_category_junction');
    }
}
