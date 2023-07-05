<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Article extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        
        $this->forge->addField([
            'article_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'article_title' => [
                'type' => 'VARCHAR',
                'constraint' => 155,
            ],
            'article_url' => [
                'type' => 'VARCHAR',
                'constraint' => 155
            ],
            'article_thumbnail' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
				'null' => true
            ],
            'article_description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'article_body' => [
                'type' => 'LONGTEXT',
                'null' => true
            ],
            'article_putlished' => [
                'type' => 'INT',
				'constraint' => 1,
				'default' => 1
            ],
            'article_meta_keywords' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
				'null' => true
            ],
            'article_meta_description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
				'null' => true
            ],
            'article_display_socials' => [
                'type' => 'INT',
				'constraint' => 1,
				'default' => 1
            ],
            'article_display_comments' => [
                'type' => 'INT',
				'constraint' => 1,
				'default' => 1
            ],
            'article_display_publish_date' => [
                'type' => 'INT',
				'constraint' => 1,
				'default' => 1
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ]
        ]);
        
        
        $this->forge->addKey('article_id', true);
        $this->forge->createTable('article');
        
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('article');
    }
}
