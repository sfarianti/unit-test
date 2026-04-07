<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task App - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <nav class="bg-white shadow-sm border-b mb-10">
        <div class="max-w-4xl mx-auto px-4 py-4">
            <a href="{{ route('task.index') }}" class="text-xl font-bold text-blue-600">Task<span class="text-gray-700">Master</span></a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-4">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6 shadow-sm" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </main>

</body>
</html>