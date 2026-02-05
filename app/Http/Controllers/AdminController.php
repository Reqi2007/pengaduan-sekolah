<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspiration;

class AdminController extends Controller
{
    public function index() {
        // Mengambil list aspirasi (List Aspirasi Keseluruhan)
        $aspirations = Aspiration::with('category', 'student')->latest()->get();
        return view('admin.dashboard', compact('aspirations'));
    }

    public function update(Request $request, $id) {
        $aspiration = Aspiration::findOrFail($id);

        $aspiration->update([
            'status' => $request->status,
            'feedback' => $request->feedback
        ]);

        return redirect()->back()->with('success', 'Status & Feedback diperbarui.');
    }
}
