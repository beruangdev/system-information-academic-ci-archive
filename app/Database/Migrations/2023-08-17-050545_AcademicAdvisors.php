<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AcademicAdvisors extends Migration
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
            'lecturer_id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
            ],
            'student_id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
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
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('lecturer_id', 'lecturers', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('student_id', 'students', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('academic_advisors');
    }

    public function down()
    {
        $this->forge->dropTable('academic_advisors');
    }
}
