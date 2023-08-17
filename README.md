# System Information Academic CI

System Information Academic CI adalah proyek berbasis web yang dibangun dengan menggunakan framework CodeIgniter 4. Proyek ini bertujuan untuk mengelola informasi akademik di sebuah universitas, termasuk data mahasiswa, dosen, mata kuliah, kelas, jadwal, dan sebagainya.

## Instalasi

1. Clone repositori ini ke dalam direktori proyek Anda:

```bash
 git clone https://github.com/Putifinalian/System-Information-Academic-CI.git
```

2. Pindah ke direktori proyek:

```bash
 cd System-Information-Academic-CI
```

3. Salin file `.env.example` menjadi `.env` dan atur konfigurasi database dan pengaturan lainnya.

```bash
 cp .env.example .env
```

4. Jalankan perintah berikut untuk menginstal dependensi:

```bash
 composer install
 npm install
```

5. Jalankan migrasi database untuk membuat tabel-tabel yang diperlukan:

```bash
php spark migrate
```

6. Jalankan server lokal:

```bash
php spark serve
```

7. Akses aplikasi melalui browser dengan URL: http://localhost:8080

---

## User Roles

The application has six user roles, each with different access and permissions:

- **Admin**: Users with the admin role have full access to the entire system. They can manage student data, lecturer information, courses, classes, schedules, and more.

- **Academic University**: Users with the academic university role can manage university-wide information, such as faculties and departments. They also have specific actions related to the university's academic affairs.

- **Academic Faculty**: Users with the academic faculty role have the authority to manage faculty-specific information, including programs or majors within the faculty.

- **Academic Major**: Users with the academic major role can manage information related to specific academic programs or majors.

- **Lecturer**: Users with the lecturer role can manage their own information, including specializations, teaching schedules, and assigning grades to students.

- **Student**: Users with the student role can access information about class schedules, grades, and other relevant academic detail.

---

# System Information Academic - Todo List

## Setup

- [x] Install CodeIgniter 4.
- [x] Setup database connection di `app/config/Database.php`.
- [x] Aktifkan library yang diperlukan.

## Roles & Permissions

- [ ] Tentukan permissions untuk setiap role:
  - [ ] Admin
  - [ ] Academic University
  - [ ] Academic Faculty
  - [ ] Academic Major
  - [ ] Lecturer
  - [ ] Student

## Database

- [x] Buat rancangan database.

## Models

- [x] Buat rancangan model.
- [x] Buat model untuk setiap tabel:
  - [x] AcademicAdvisorModel
  - [x] AcademicModel
  - [x] ClassroomEnrollmentModel
  - [x] ClassroomLecturerModel
  - [x] ClassroomSessionModel
  - [x] ClassroomStudentModel
  - [x] ClassroomModel
  - [x] CoursePrerequisiteModel
  - [x] CourseModel
  - [x] FacultyModel
  - [x] LecturerModel
  - [x] MajorModel
  - [x] RoomModel
  - [x] SeasonModel
  - [x] StudentAttendanceModel
  - [x] StudentGradeModel
  - [x] StudentSeasonLogModel
  - [x] StudentModel
  - [x] TuitionPaymentModel
  - [x] UserModel

## Controllers

- [ ] Buat rancangan controller.
- [ ] Buat controller untuk setiap entitas utama dan tambahkan fitur berdasarkan role:
  - [ ] AdminController (full access)
  - [ ] AcademicUniversityController (hanya akses ke data universitas)
  - [ ] AcademicFacultyController (hanya akses ke data fakultas)
  - [ ] AcademicMajorController (hanya akses ke data jurusan)
  - [ ] LecturerController (hanya akses ke data dosen dan kelas yang diajar)
  - [ ] StudentController (hanya akses ke data pribadi dan kelas yang diikuti)

## Views

- [ ] Buat rancangan view (Strategi view yang digunakan).
- [ ] Buat views untuk setiap controller dengan mempertimbangkan hak akses role:
  - [ ] Admin layout
  - [ ] Academic University layout
  - [ ] Academic Faculty layout
  - [ ] Academic Major layout
  - [ ] Lecturer layout
  - [ ] Student layout

## Features

- [ ] Autentikasi user berdasarkan role.
- [ ] Manajemen user (CRUD) oleh Admin.
- [ ] Manajemen mahasiswa oleh Academic University, Academic Faculty, dan Academic Major.
- [ ] Manajemen dosen oleh Academic University, Academic Faculty, dan Academic Major.
- [ ] Manajemen kelas oleh Lecturer.
- [ ] Manajemen mata kuliah oleh Academic University.
- [ ] Manajemen fakultas oleh Academic University.
- [ ] Manajemen jurusan oleh Academic Faculty.
- [ ] Manajemen pembayaran SPP oleh Academic University dan Student.
- [ ] Manajemen kehadiran mahasiswa oleh Lecturer.
- [ ] Manajemen nilai mahasiswa oleh Lecturer.
- [ ] Laporan dan statistik oleh Admin dan Academic roles.

## Testing

- [ ] Buat unit tests untuk setiap model.
- [ ] Buat feature tests untuk setiap controller dengan mempertimbangkan hak akses role.

## Deployment

- [ ] Siapkan server produksi.
- [ ] Setup environment produksi.
- [ ] Deploy aplikasi ke server produksi.
- [ ] Test aplikasi di lingkungan produksi.

---

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat _pull request_ melalui GitHub.

## Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT. Lihat berkas [LISENSI](LICENSE) untuk detail lebih lanjut.

---

Terima kasih telah menggunakan System Information Academic CI. Jangan ragu untuk memberikan masukan atau pertanyaan melalui [issues](https://github.com/Putifinalian/System-Information-Academic-CI/issues).
