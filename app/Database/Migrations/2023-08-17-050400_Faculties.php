<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faculties extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'comment' => 'nama fakultas',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => 'CURRENT_TIMESTAMP',
                'comment' => 'Waktu pembuatan record',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'default' => 'CURRENT_TIMESTAMP',
                'on update' => 'CURRENT_TIMESTAMP',
                'comment' => 'Waktu terakhir record diperbarui',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'comment' => 'Waktu record dihapus (soft delete)',
            ],
        ]);
    
        $this->forge->addKey('id', true);
        $this->forge->createTable('faculties');
    }
    
    public function down()
    {
        $this->forge->dropTable('faculties');
    }
    
}
