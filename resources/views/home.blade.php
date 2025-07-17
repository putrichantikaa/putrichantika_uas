@extends('layouts.template')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="min-h-screen flex bg-[#f9f9f9] text-gray-800">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#f0f0f0] p-6 border-r border-gray-200">
        <h2 class="text-xl font-semibold mb-6">Menu</h2>
        <nav class="space-y-4">
            <a href="#" class="block text-gray-600 hover:text-gray-900">Dashboard</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900">Pengguna</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900">Laporan</a>
            <a href="#" class="block text-gray-600 hover:text-gray-900">Pengaturan</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">
        <div class="mb-8">
            <h1 class="text-3xl font-bold">Selamat Datang, Admin 👋</h1>
            <p class="text-gray-500 mt-1">Semoga harimu tenang dan produktif ✨</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-100 hover:shadow-md transition">
                <p class="text-sm text-gray-500">Total Pengguna</p>
                <h3 class="text-3xl font-bold text-gray-700 mt-2">1,234</h3>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-100 hover:shadow-md transition">
                <p class="text-sm text-gray-500">Transaksi Hari Ini</p>
                <h3 class="text-3xl font-bold text-gray-700 mt-2">98</h3>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-100 hover:shadow-md transition">
                <p class="text-sm text-gray-500">Notifikasi Baru</p>
                <h3 class="text-3xl font-bold text-gray-700 mt-2">7</h3>
            </div>
        </div>
    </main>
</div>
@endsection
