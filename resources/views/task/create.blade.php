{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-xl font-bold mb-4">Tambah Task Baru</h2>

        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Tipe Task</label>
                <input type="text" name="type" class="w-full border p-2 rounded @error('type') border-red-500 @enderror" placeholder="Contoh: Pekerjaan Rumah" value="{{ old('type') }}">
                @error('type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('task.index') }}" class="text-gray-600 hover:underline">Kembali</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Simpan Task
                </button>
            </div>
        </form>
    </div>
</body>
</html> --}}