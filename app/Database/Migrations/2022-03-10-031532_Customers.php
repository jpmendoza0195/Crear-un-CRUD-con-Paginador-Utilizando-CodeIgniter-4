<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'last_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'gender'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'ip_address'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'phone'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
