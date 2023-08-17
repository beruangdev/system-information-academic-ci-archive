<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courses extends Migration
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
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'comment' => 'menyimpan kode unik untuk mata kuliah',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'comment' => 'menyimpan nama lengkap mata kuliah',
            ],
            'credits' => [
                'type' => 'INT',
                'comment' => 'menyimpan nilai default jumlah kredit atau sks (sistem kredit semester) dari mata kuliah',
            ],
            'major_id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'comment' => 'menyimpan foreign key untuk menghubungkan data mata kuliah dengan jurusan',
            ],
            'faculty_id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'comment' => 'menyimpan foreign key untuk menghubungkan data mata kuliah dengan fakultas',
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
        $this->forge->addForeignKey('major_id', 'majors', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('faculty_id', 'faculties', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('courses');
    }
    
    public function down()
    {
        $this->forge->dropTable('courses');
    }
    
}
