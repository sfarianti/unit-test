@extends('layouts.app')

@section('title', 'Daftar Task')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Task Management</h1>

    <form action="{{ route('task.store') }}" method="POST" class="flex gap-2 mb-8">
        @csrf
        <input type="text" name="type" placeholder="Apa yang ingin dikerjakan?" 
            class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" required>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition shadow-md">
            Tambah
        </button>
    </form>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b-2 border-gray-100">
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">ID</th>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600">Nama Task</th>
                    <th class="py-3 px-4 text-sm font-semibold text-gray-600 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse($task as $t)
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-4 text-sm text-gray-500">#{{ $t->id }}</td>
                    <td class="py-4 px-4 font-medium text-gray-700">{{ $t->type }}</td>
                    <td class="py-4 px-4 flex justify-center gap-3">
                        <a href="{{ route('task.edit', $t->id) }}" 
                           class="text-amber-600 hover:bg-amber-50 px-3 py-1 rounded-md text-sm font-medium transition border border-amber-200">
                           Edit
                        </a>
                        
                        <form action="{{ route('task.destroy', $t->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus task ini?')" 
                                class="text-red-600 hover:bg-red-50 px-3 py-1 rounded-md text-sm font-medium transition border border-red-200">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="py-10 text-center text-gray-400 italic">Belum ada task hari ini.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection