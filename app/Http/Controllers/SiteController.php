<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Aspiration;
use App\Models\Student;

class SiteController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function store(Request $request) {
        // Validasi Input (Coding Guidelines: Secure Query)
        $request->validate([
            'nis' => 'required|numeric',
            'id_kategori' => 'required',
            'lokasi' => 'required',
            'ket' => 'required',
        ]);

        // Cek apakah NIS ada (Simulasi Login sederhana)
        $siswa = Student::where('nis', $request->nis)->first();
        if(!$siswa) {
            // Auto create siswa jika belum ada (opsional, agar mudah testing)
            Student::create(['nis' => $request->nis, 'kelas' => 'XII', 'nama' => 'Siswa Baru']);
        }

        Aspiration::create([
            'nis' => $request->nis,
            'id_kategori' => $request->id_kategori,
            'lokasi' => $request->lokasi,
            'ket' => $request->ket,
            'status' => 'Menunggu'
        ]);

        return redirect()->back()->with('success', 'Aspirasi berhasil dikirim! Silakan cek histori.');
    }

    public function search(Request $request) {
        $aspirations = collect(); // Array kosong
        if($request->has('nis_cari')) {
            $aspirations = Aspiration::where('nis', $request->nis_cari)
                            ->with('category')
                            ->latest()
                            ->get();
        }
        return view('history', compact('aspirations'));
    }
}
