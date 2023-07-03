<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BlogCategory extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->addField([
            'blog_category_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'blog_category_title' => [
                'type' => 'VARCHAR',
                'constraint' => 155
            ],
            'blog_category_url' => [
                'type' => 'VARCHAR',
                'constraint' => 155
            ],
            'blog_category_description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'blog_category_thumbnail' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'blog_category_banner' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'blog_category_published' => [
                'type' => 'INT',
				'constraint' => 1,
				'default' => 1
            ],
            'blog_category_meta_keywords' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
				'null' => true
            ],
            'blog_category_meta_description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
				'null' => true
            ],
        ]);
        
        
        $this->forge->addKey('blog_category_id', true);
        $this->forge->createTable('blogcategory');
        
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('blogcategory');
    }
}
