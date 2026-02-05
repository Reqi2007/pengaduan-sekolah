@extends('layout')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">
    <div class="text-center mb-8">
        <h2 class="text-2xl font-bold text-gray-700">Sampaikan Aspirasi Anda</h2>
        <p class="text-gray-500">Kami mendengar untuk sekolah yang lebih baik.</p>
    </div>

    <form action="{{ route('store.aspirasi') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Nomor Induk Siswa (NIS)</label>
            <input type="number" name="nis" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 p-3 bg-gray-50" placeholder="Contoh: 12345">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Kategori Masalah</label>
            <select name="id_kategori" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 bg-gray-50">
                <option value="">Pilih Kategori...</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id_kategori }}">{{ $cat->ket_kategori }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Lokasi Kejadian</label>
            <input type="text" name="lokasi" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 bg-gray-50" placeholder="Contoh: Lab Komputer 1">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Isi Laporan / Aspirasi</label>
            <textarea name="ket" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3 bg-gray-50" placeholder="Jelaskan detail kerusakan atau saran..."></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition duration-300 shadow-lg transform hover:-translate-y-1">
            🚀 Kirim Aspirasi
        </button>
    </form>
</div>
@endsection