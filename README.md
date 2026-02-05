
# 🏫 Aplikasi Pengaduan Sarana Sekolah (SaranaCare)

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css)
![MySQL](https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql)
![Status](https://img.shields.io/badge/Status-Completed-success?style=for-the-badge)

> **Project Assignment:** Junior Assistant Programmer - SMK Class XII  
> **Tema:** Pengembangan Aplikasi Pengaduan Sarana Sekolah dengan Metode Waterfall & MVC.

---

## 📖 Deskripsi Proyek

Aplikasi ini dirancang untuk memudahkan siswa dalam menyampaikan aspirasi atau laporan kerusakan sarana prasarana sekolah, serta memudahkan admin sekolah dalam mengelola dan menindaklanjuti laporan tersebut secara transparan.

Dibangun menggunakan **Laravel Framework** dengan arsitektur **MVC (Model-View-Controller)** dan antarmuka modern menggunakan **Tailwind CSS**.

---

## 🔥 Fitur Utama

Sesuai dengan spesifikasi tugas, aplikasi ini memiliki dua peran utama:

### 🎓 Halaman Siswa (Frontend)
* ✅ **Input Aspirasi:** Form pengaduan dengan validasi NIS dan kategori.
* ✅ **Cek Histori:** Pencarian status laporan berdasarkan NIS.
* ✅ **Real-time Status:** Melihat status (Menunggu/Proses/Selesai) dan feedback dari admin.
* ✅ **Auto-Register:** Sistem otomatis mengenali/mendaftarkan NIS baru saat melapor.

### 👮 Halaman Admin (Backend)
* ✅ **Dashboard Monitoring:** Melihat seluruh daftar aspirasi yang masuk.
* ✅ **Filter & Sort:** Data diurutkan dari yang terbaru.
* ✅ **Manajemen Status:** Mengubah status laporan (Menunggu ➝ Proses ➝ Selesai).
* ✅ **Feedback System:** Memberikan balasan/tanggapan atas laporan siswa.

---

## 🛠️ Struktur Database (ERD)

Aplikasi ini menggunakan relasi tabel yang efisien:

| Tabel | Fungsi |
| :--- | :--- |
| `students` | Menyimpan data siswa (NIS, Nama, Kelas). |
| `categories` | Menyimpan jenis kategori (Kebersihan, Fasilitas, dll). |
| `aspirations` | Tabel transaksi utama yang menyimpan laporan, lokasi, dan status. |

---

## 🚀 Panduan Instalasi (Localhost)

Ikuti langkah ini untuk menjalankan proyek di komputer Anda (XAMPP).

### 1. Prasyarat
Pastikan sudah terinstall:
* PHP >= 8.1
* Composer
* XAMPP (MySQL)

### 2. Instalasi
Buka terminal/CMD di folder proyek:

```bash
# 1. Install dependensi Laravel
composer install

# 2. Salin file environment
copy .env.example .env

# 3. Generate key aplikasi
php artisan key:generate

```

### 3. Konfigurasi Database

1. Buka **XAMPP Control Panel** -> Start **Apache** & **MySQL**.
2. Buka `phpMyAdmin` dan buat database baru: `db_pengaduan_sekolah`.
3. Edit file `.env` di text editor:
```env
DB_DATABASE=db_pengaduan_sekolah
DB_USERNAME=root
DB_PASSWORD=

```



### 4. Migrasi & Seeding (PENTING!)

Jalankan perintah ini untuk membuat tabel dan mengisi data awal (Kategori & Siswa Contoh):

```bash
php artisan migrate:fresh --seed

```

### 5. Jalankan Server

```bash
php artisan serve

```

Buka browser dan akses: `http://127.0.0.1:8000`

---

## 🧪 Cara Pengujian (Testing)

Gunakan kredensial berikut untuk mendemonstrasikan aplikasi:

### 👤 Akses Siswa

1. Buka Halaman Utama.
2. Masukkan NIS: **12345** (Data Dummy) atau NIS baru bebas (misal: 1001).
3. Pilih Kategori & Isi Laporan.
4. Cek status di menu **"Cek Status"**.

### 🔐 Akses Admin

1. Akses URL: `http://127.0.0.1:8000/admin`
2. Lihat laporan yang baru masuk.
3. Ubah status menjadi **"Proses"** atau **"Selesai"**.
4. Isi kolom feedback, lalu simpan.

---

## 📂 Struktur Folder (MVC)

* `app/Models` -> **M**odel (Student, Aspiration, Category)
* `resources/views` -> **V**iew (Tampilan Blade & Tailwind)
* `app/Http/Controllers` -> **C**ontroller (Logika Program)

---

### 👨‍💻 Author

Dibuat oleh: **Refan Al-Kholqi** Kelas: XII - SMK Mutiara Bandung

---

*Dibuat dengan ❤️ menggunakan Laravel 12*

```
