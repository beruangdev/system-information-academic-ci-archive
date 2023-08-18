<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        //
    }

    /*
      $facultyNames = [
            "Ekonomi dan Bisnis",
            "Kedokteran Hewan",
            "Hukum",
            "Teknik",
            "Keguruan dan Ilmu Pendidikan",
            "Pertanian",
            "Kedokteran",
            "Matematika dan Ilmu Pengetahuan Alam",
            "Ilmu Sosial dan Ilmu Politik",
            "Keperawatan"
        ];
    */
    public function courseUniversity()
    {
        $courses = [
            [
                'id' => 1,
                'name' => 'Pendidikan Pancasila',
                'description' => 'Mengajarkan tentang ideologi negara dan nilai-nilai yang terkandung di dalam Pancasila.',
            ],
            [
                'id' => 2,
                'name' => 'Bahasa Indonesia',
                'description' => 'Meningkatkan kemampuan mahasiswa dalam berbahasa Indonesia yang baik dan benar.',
            ],
            [
                'id' => 3,
                'name' => 'Pendidikan Kewarganegaraan (PKn)',
                'description' => 'Memberikan pemahaman tentang hak dan kewajiban sebagai warga negara.',
            ],
            [
                'id' => 4,
                'code' => 'STAT101',
                'name' => 'Dasar-Dasar Statistika',
                'credits' => 3,
                'major_id' => null,
                'faculty_id' => null,
            ],
            [
                'id' => 5,
                'code' => 'IT101',
                'name' => 'Pengantar Teknologi Informasi',
                'credits' => 3,
                'major_id' => null,
                'faculty_id' => null,
            ],
            [
                'id' => 6,
                'code' => 'BIO101',
                'name' => 'Biologi Dasar',
                'credits' => 3,
                'major_id' => null,
                'faculty_id' => null,
            ],
            [
                'id' => 7,
                'code' => 'CHEM101',
                'name' => 'Kimia Dasar',
                'credits' => 3,
                'major_id' => null,
                'faculty_id' => null,
            ],
        ];

        $course_requirements = [
            [
                'course_id' => 1,
                'faculty_id' => null,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 2,
                'faculty_id' => null,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 3,
                'faculty_id' => null,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 4,
                'faculty_id' => 4,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 4,
                'faculty_id' => 1,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 5,
                'faculty_id' => 8,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 5,
                'faculty_id' => 9,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 6,
                'faculty_id' => 7,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 6,
                'faculty_id' => 8,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 7,
                'faculty_id' => 7,
                'major_id' => null,
                'is_mandatory' => true,
            ],
            [
                'course_id' => 7,
                'faculty_id' => 8,
                'major_id' => null,
                'is_mandatory' => true,
            ],
        ];
    }
}
