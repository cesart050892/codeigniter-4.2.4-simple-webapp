<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ingredient extends Migration
{
    private $name = "ingredient";

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
            'name' => [
                'type' => 'varchar',
                'constraint' => 50
            ],
            'quantity' => [
                'type' => 'varchar',
                'constraint' => 10
            ],
            'recipe_id' => [
                'type' => 'bigint',
                'constraint' => 11,
                'unsigned' => true,
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
        $this->forge->addForeignKey('recipe_id', 'recipe', 'id', 'cascade', 'cascade');

        // Create Table
        $this->forge->createTable($this->name, true);
    }

    public function down()
    {
        $this->forge->dropTable($this->name);
    }
}
