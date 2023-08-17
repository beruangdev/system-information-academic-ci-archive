# System Information Academic CI

System Information Academic CI adalah proyek berbasis web yang dibangun dengan menggunakan framework CodeIgniter 4. Proyek ini bertujuan untuk mengelola informasi akademik di sebuah universitas, termasuk data mahasiswa, dosen, mata kuliah, kelas, jadwal, dan sebagainya.

## Fitur

- [x] Buat project base
- [ ] Manajemen Data Mahasiswa
- [ ] Manajemen Data Dosen
- [ ] Manajemen Data Mata Kuliah
- [ ] Manajemen Data Kelas
- [ ] Manajemen Jadwal Kuliah
- [ ] Sistem Pendaftaran Kelas
- [ ] Manajemen Nilai dan Absensi Mahasiswa
- [ ] Sistem Pembayaran SPP

## User Roles

The application has six user roles, each with different access and permissions:

- **Admin**: Users with the admin role have full access to the entire system. They can manage student data, lecturer information, courses, classes, schedules, and more.

- **Academic University**: Users with the academic university role can manage university-wide information, such as faculties and departments. They also have specific actions related to the university's academic affairs.

- **Academic Faculty**: Users with the academic faculty role have the authority to manage faculty-specific information, including programs or majors within the faculty.

- **Academic Major**: Users with the academic major role can manage information related to specific academic programs or majors.

- **Lecturer**: Users with the lecturer role can manage their own information, including specializations, teaching schedules, and assigning grades to students.

- **Student**: Users with the student role can access information about class schedules, grades, and other relevant academic detail.

## Instalasi

1. Clone repositori ini ke dalam direktori proyek Anda:


2. Pindah ke direktori proyek:


3. Salin file `.env.example` menjadi `.env` dan atur konfigurasi database dan pengaturan lainnya.

4. Jalankan perintah berikut untuk menginstal dependensi:


5. Jalankan migrasi database untuk membuat tabel-tabel yang diperlukan:


6. Jalankan server lokal:


7. Akses aplikasi melalui browser dengan URL: http://localhost:8080

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat _pull request_ melalui GitHub.

## Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT. Lihat berkas [LISENSI](LICENSE) untuk detail lebih lanjut.

---

Terima kasih telah menggunakan System Information Academic CI. Jangan ragu untuk memberikan masukan atau pertanyaan melalui [issues](https://github.com/Putifinalian/System-Information-Academic-CI/issues).
