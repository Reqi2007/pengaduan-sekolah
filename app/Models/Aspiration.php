<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    protected $primaryKey = 'id_aspirasi';
    protected $guarded = [];

    // Relasi ke Kategori
    public function category() {
        return $this->belongsTo(Category::class, 'id_kategori', 'id_kategori');
    }

    // Relasi ke Siswa (Manual via NIS)
    public function student() {
        return $this->belongsTo(Student::class, 'nis', 'nis');
    }
}
