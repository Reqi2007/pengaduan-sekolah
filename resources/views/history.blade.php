@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white p-6 rounded-xl shadow mb-6">
        <h3 class="text-lg font-bold mb-4">Cek Status Laporan Anda</h3>
        <form action="{{ route('history') }}" method="GET" class="flex gap-2">
            <input type="number" name="nis_cari" placeholder="Masukkan NIS Anda..." class="flex-1 p-3 border rounded-lg" value="{{ request('nis_cari') }}">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-indigo-700">Cari</button>
        </form>
    </div>

    @if(count($aspirations) > 0)
        <div class="grid gap-4">
            @foreach($aspirations as $item)
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 {{ $item->status == 'Selesai' ? 'border-green-500' : ($item->status == 'Proses' ? 'border-yellow-500' : 'border-red-500') }}">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="text-xs font-bold text-gray-400 uppercase">{{ $item->created_at->format('d M Y') }}</span>
                        <h4 class="text-xl font-bold text-gray-800">{{ $item->category->ket_kategori ?? 'Umum' }}</h4>
                        <p class="text-gray-600 mt-1">"{{ $item->ket }}"</p>
                        <p class="text-sm text-gray-400 mt-2">Lokasi: {{ $item->lokasi }}</p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-bold text-white 
                        {{ $item->status == 'Selesai' ? 'bg-green-500' : ($item->status == 'Proses' ? 'bg-yellow-500' : 'bg-red-500') }}">
                        {{ $item->status }}
                    </span>
                </div>

                @if($item->feedback)
                <div class="mt-4 bg-gray-100 p-3 rounded text-sm text-gray-700">
                    <strong>💬 Admin Feedback:</strong> {{ $item->feedback }}
                </div>
                @endif
            </div>
            @endforeach
        </div>
    @else
        @if(request('nis_cari'))
        <p class="text-center text-gray-500 mt-10">Belum ada data untuk NIS tersebut.</p>
        @endif
    @endif
</div>
@endsection