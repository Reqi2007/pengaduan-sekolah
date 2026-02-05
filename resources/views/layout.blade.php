<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Sarana Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-blue-600 p-4 shadow-lg text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">🏫 SaranaCare</h1>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:text-blue-200">Formulir</a>
                <a href="{{ route('history') }}" class="hover:text-blue-200">Cek Status</a>
                <a href="{{ route('admin.dashboard') }}" class="bg-white text-blue-600 px-3 py-1 rounded-full text-sm font-bold">Admin Area</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto p-6 min-h-screen">
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        <p>&copy; 2024 Project Junior Programmer - SMK Hebat</p>
    </footer>

</body>
</html>