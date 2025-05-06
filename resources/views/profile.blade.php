@extends('layout.app')
@section('content')
<div class="flex flex-col md:flex-row justify-center items-start gap-10 p-10">
    <!-- Box Foto -->
    <div class="shadow-xl rounded-xl overflow-hidden bg-white p-4">
        <img src="https://i.pinimg.com/736x/e4/97/36/e4973658bd0b11736f61752267c1ce32.jpg" alt="Foto Profil" class="w-64 h-auto rounded-md">
    </div>
@php
    $user= session('user');
@endphp
    <!-- Box Informasi -->
    <div class="flex-1 space-y-4">
        <!-- Box Nama -->
        <div class="bg-rose-100 p-6 rounded-xl shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 text-center">{{ $user['name'] }}</h1>
        </div>

        <div class="bg-rose-100 p-6 rounded-xl shadow-md space-y-2">
            <p class="text-lg font-semibold text-gray-700">Username: <span class="font-normal text-gray-800">{{ $user['username'] }}</span></p>
            <p class="text-lg font-semibold text-gray-700">Nomor Telepon: <span class="font-normal text-gray-800">{{ $user['tlpn'] }}</span></p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Informasi Tambahan</h2>
            <p class="text-gray-800"><strong>Role:</strong> Customer</p>
            <p class="text-gray-800"><strong>Tanggal Bergabung:</strong> 15 Maret 2024</p>
            <p class="text-gray-800"><strong>Alamat:</strong> Samarinda, Kalimantan Timur</p>
            <p class="text-gray-800"><strong>Bio:</strong> Seorang pecinta desain warna dan pengelola produk ColorMatch.</p>
        </div>
        <!-- Rekomendasi Warna -->
        <div class="mt-10">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">🎨 Rekomendasi Warna</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Warna 1 -->
                <div class="bg-white rounded-xl shadow-md p-4 border">
                    <div class="h-24 w-full rounded-lg mb-3" style="background-color: #B76E79;"></div>
                    <h3 class="text-lg font-semibold text-gray-800">Rosewood</h3>
                    <p class="text-sm text-gray-600">Elegan dan hangat, cocok untuk branding feminin.</p>
                </div>
                <!-- Warna 2 -->
                <div class="bg-white rounded-xl shadow-md p-4 border">
                    <div class="h-24 w-full rounded-lg mb-3" style="background-color: #89CFF0;"></div>
                    <h3 class="text-lg font-semibold text-gray-800">Ocean Mist</h3>
                    <p class="text-sm text-gray-600">Warna tenang untuk tampilan modern dan bersih.</p>
                </div>
                <!-- Warna 3 -->
                <div class="bg-white rounded-xl shadow-md p-4 border">
                    <div class="h-24 w-full rounded-lg mb-3" style="background-color: #9DC183;"></div>
                    <h3 class="text-lg font-semibold text-gray-800">Sage Green</h3>
                    <p class="text-sm text-gray-600">Lembut dan alami, bagus untuk background produk.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
