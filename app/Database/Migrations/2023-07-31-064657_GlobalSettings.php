<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GlobalSettings extends Migration
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
            'logo' => [
                'type' => 'VARCHAR',
                'constraint' => 192,
                'null' => true
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => true
            ],
            'keywords' => [
                'type' => 'text',
                'null' => true
            ],
            'primarycolor' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'secondarycolor' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'offline' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('global_settings');
    }

    public function down()
    {
        $this->forge->dropTable('global_settings');
    }
}
