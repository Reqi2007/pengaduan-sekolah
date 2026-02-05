<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // --- BAGIAN 1: INPUT DATA KATEGORI (Wajib) ---
        // Kita isi manual agar saat aplikasi dibuka, dropdown kategori tidak kosong.
        
        Category::create([
            'ket_kategori' => 'Fasilitas Kelas'
        ]);

        Category::create([
            'ket_kategori' => 'Kebersihan'
        ]);

        Category::create([
            'ket_kategori' => 'Laboratorium'
        ]);

        Category::create([
            'ket_kategori' => 'Kantin & Makanan'
        ]);

        Category::create([
            'ket_kategori' => 'Sarana Olahraga'
        ]);

        Category::create([
            'ket_kategori' => 'Toilet / Kamar Mandi'
        ]);


        // --- BAGIAN 2: INPUT DATA SISWA CONTOH (Opsional) ---
        // Ini untuk memudahkan testing, jadi Anda bisa mencoba input NIS 12345 nanti.
        
        Student::create([
            'nis' => 12345,
            'nama' => 'Budi Santoso',
            'kelas' => 'XII RPL 1'
        ]);
        
        // Catatan: Kode default User::factory bawaan Laravel dihapus/di-komen
        // karena kita menggunakan sistem login sederhana via NIS untuk tugas ini.
    }
}