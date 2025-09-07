# 📝 PHP MVC - Latihan CRUD Mahasiswa

Project ini merupakan hasil **latihan PHP MVC** mengikuti tutorial dari channel [Web Programming UNPAS (WPU)](https://www.youtube.com/@sandhikagalihWPU).  
Dibuat untuk memahami konsep dasar **MVC (Model - View - Controller)** dalam PHP, sekaligus latihan membuat aplikasi sederhana CRUD (Create, Read, Update, Delete).

---

## 🚀 Fitur

- Tambah data mahasiswa (via modal popup).
- Ubah data mahasiswa (form modal otomatis terisi data lama).
- Hapus data mahasiswa dengan konfirmasi.
- Cari data mahasiswa dengan keyword.
- Flash message untuk notifikasi aksi.
- Struktur kode dengan konsep **MVC sederhana**.

---

## 🛠️ Teknologi yang digunakan

- **PHP 8**
- **MySQL**
- **Bootstrap 4** (untuk tampilan)
- **jQuery + AJAX** (untuk fitur ubah data di modal)

---

## ⚙️ Cara Menjalankan

1. Clone repository ini
   ```bash
   git clone https://github.com/TinoNurcahya/PHP-MVC-learning.git
2. Pindahkan folder ke direktori server lokal (contoh: htdocs untuk XAMPP atau www untuk Laragon).
3. Import database dari file phpmvc.sql ke MySQL.
4. Sesuaikan konfigurasi di:
   - app/config/config.php → BASEURL
   - app/config/database.php → koneksi database
5. Jalankan di browser:
   - http://localhost/PHP-MVC/public/
