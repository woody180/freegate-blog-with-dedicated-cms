<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Navigation extends Migration
{
    public function up()
    {
        $this->forge->createDatabase('freegate', true);
        
        $this->db->disableForeignKeyChecks();
        
        $this->forge->addField([
            'nav_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nav_title' => [
                'type' => 'VARCHAR',
                'constraint' => 155
            ],
            'nav_url' => [
                'type' => 'VARCHAR',
                'constraint' => 155
            ],
            'nav_parent' => [
                'type' => 'INT',
                'constraint' => 5,
                'default' => 0
            ]
        ]);
        
        $this->forge->addKey('nav_id', true);
        $this->forge->createTable('navigation');
        
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('navigation');
    }
}
