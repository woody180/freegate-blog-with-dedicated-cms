<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TagsArticles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
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
            'tag_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ]
        ]);
        
        $this->forge->addKey('id', true);
        
        $this->forge->addForeignKey('article_id', 'article', 'article_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tag_id', 'tags', 'id', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('tags_articles');
    }

    public function down()
    {
        $this->forge->dropTable('tags_articles');
    }
}
