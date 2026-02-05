<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Tambahkan baris ini. 
    // [] artinya "tidak ada yang dijaga", jadi semua kolom boleh diisi.
    protected $guarded = []; 
    
    // Atau jika ingin lebih spesifik (pilih salah satu cara), pakai yang ini:
    // protected $fillable = ['nis', 'nama', 'kelas'];
}