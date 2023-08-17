<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Majors extends Migration
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
                'comment' => 'nama jurusan',
            ],
            'faculty_id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'comment' => 'menghubungkan jurusan dengan fakultas dimana 1 fakultas bisa terdapat 1 atau banyak jurusan',
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
        $this->forge->addForeignKey('faculty_id', 'faculties', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('majors');
    }
    
    public function down()
    {
        $this->forge->dropTable('majors');
    }
    
}
