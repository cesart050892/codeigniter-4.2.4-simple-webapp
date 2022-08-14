<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Recipe extends Migration
{
    private $name = "recipe";

    public function up()
    {
        // Identificator

        $this->forge->addField([
            'id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ]
        ]);

        // Data

        $this->forge->addField([
            'title' => [
                'type' => 'varchar',
                'constraint' => 100
            ],
            'slug' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'instructions' => [
                'type' => 'text'
            ],
        ]);

        // Timestamps 

        $this->forge->addField("created_at DATETIME NULL DEFAULT NULL");
        $this->forge->addField("updated_at DATETIME NULL DEFAULT NULL");
        $this->forge->addField("deleted_at DATETIME NULL DEFAULT NULL");


        // Primary Key
        $this->forge->addKey('id', true);

        // Unique Keys
        // $this->forge->addUniqueKey('example');

        // Foreign Keys 
        // $this->forge->addForeignKey('example_fk', 'example', 'id', 'cascade', 'cascade');

        // Create Table
        $this->forge->createTable($this->name, true);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
