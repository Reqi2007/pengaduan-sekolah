@extends('layout')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Dashboard Admin</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Laporan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($aspirations as $asp)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $asp->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-gray-700">{{ $asp->nis }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">
                        <div class="font-bold">{{ $asp->category->ket_kategori ?? '-' }}</div>
                        <div class="text-xs text-gray-500">{{ Str::limit($asp->ket, 50) }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        {{ $asp->status == 'Selesai' ? 'bg-green-100 text-green-800' : ($asp->status == 'Proses' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                            {{ $asp->status }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <form action="{{ route('admin.update', $asp->id_aspirasi) }}" method="POST" class="flex flex-col gap-2">
                            @csrf
                            @method('PUT')
                            <select name="status" class="text-xs border rounded p-1">
                                <option value="Menunggu" {{ $asp->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                                <option value="Proses" {{ $asp->status == 'Proses' ? 'selected' : '' }}>Proses</option>
                                <option value="Selesai" {{ $asp->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                            <input type="text" name="feedback" placeholder="Isi Feedback..." value="{{ $asp->feedback }}" class="text-xs border rounded p-1 w-32">
                            <button type="submit" class="bg-blue-600 text-white text-xs px-2 py-1 rounded hover:bg-blue-700">Simpan</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection