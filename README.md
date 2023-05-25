#  e-commerce-test
 API e-commerce

Berikut adalah langkah-langkah untuk menjalankan proyek di lokal komputer:
1. Pastikan Composer telah terinstal. Composer digunakan untuk mengelola dependensi proyek. jika belum dapat mengunduh dan menginstal Composer https://getcomposer.org/.
2. Pastikan telah memiliki database yang sesuai yang telah terpasang (misalnya MySQL, PostgreSQL, SQLite) dan mengatur koneksi database di file konfigurasi proyek jika diperlukan.
3. Jika telah menggunakan platform code repository seperti GitHub atau GitLab, salin URL repositori ke lokal.
4. Jalankan perintah git clone (ganti <URL_REPOSITORY> dengan URL repositori yang sesuai).


Install dependensi proyek:
1. Pindah ke direktori proyek di terminal atau command prompt dengan perintah cd <NAMA_DIREKTORI_PROYEK>.
Jalankan perintah composer install untuk mengunduh dan menginstal semua dependensi proyek yang didefinisikan dalam file composer.json.
Konfigurasi file lingkungan (environment):
2. Salin file .env.example menjadi file .env di direktori proyek.
3. Buka file .env dan atur koneksi database dan pengaturan lainnya sesuai dengan lokal komputer. Pastikan telah memiliki informasi yang diperlukan untuk menghubungkan ke database lokal.


Generate aplikasi:
1. Jalankan perintah "php artisan key:generate" di terminal atau command prompt untuk menghasilkan aplikasi unik yang digunakan oleh Laravel.


Migrasi database:
1. Jalankan perintah "php artisan migrate" di terminal atau command prompt untuk menjalankan migrasi database dan membuat tabel-tabel yang diperlukan.


Jalankan server pengembangan:
1. Jalankan perintah php artisan serve di terminal atau command prompt untuk menjalankan server Laravel.
2. Server akan berjalan di http://localhost:8000 atau alamat yang ditampilkan di terminal atau command prompt.

Buka proyek di browser:
1. Buka browser web dan kunjungi http://localhost:8000 atau alamat yang ditampilkan di terminal atau command prompt.
2. Proyek terbuka dan berjalan di server pengembangan lokal.