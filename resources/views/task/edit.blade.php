@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<div class="max-w-md mx-auto">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Edit Task</h1>

        <form action="{{ route('task.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Nama/Tipe Task</label>
                <input type="text" name="type" value="{{ $task->type }}" 
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition-all" required>
            </div>

            <div class="flex flex-col gap-3">
                <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                    Update Task
                </button>
                <a href="{{ route('task.index') }}" class="w-full text-center text-gray-500 hover:text-gray-700 text-sm font-medium">
                    Kembali ke Daftar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection