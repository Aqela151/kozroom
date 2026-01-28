@extends('layouts.app')

@section('title', 'Room')

@section('content')
<style>
.room-hero-bg {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/room.png');
    background-size: cover;
    background-position: center;
}
</style>

<!-- Hero Section -->
<section class="room-hero-bg relative h-[350px] md:h-[450px]">
    <div class="container mx-auto px-6 h-full flex flex-col items-center justify-center text-center">
        <h1 class="text-white text-3xl md:text-4xl font-bold mb-4">
            Room
        </h1>
        <h2 class="text-white text-xl md:text-2xl font-semibold mb-3">
            Pilih Tipe Kamar Sesuai Kebutuhanmu
        </h2>
        <p class="text-white text-base md:text-lg max-w-3xl">
            Temukan berbagai pilihan kamar kos dengan fasilitas lengkap dan harga transparan untuk kenyamanan tinggalmu.
        </p>
    </div>
</section>

<!-- Subtitle Section -->
<section class="py-8" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <h2 class="text-center text-red-500 text-xl md:text-2xl font-bold">
            Tersedia pilihan kamar dengan fasilitas dan harga yang beragam.
        </h2>
    </div>
</section>

<!-- Room Cards Section -->
<section class="py-12" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-7xl mx-auto">
            
            <!-- Deluxe Room Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Deluxe Room</h3>
                    
                    <div class="mb-4">
                        <img src="{{ asset('assets/bannerutama.png') }}" alt="Deluxe Room" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    
                    <p class="text-gray-600 text-center mb-4 text-sm leading-relaxed">
                        Deluxe Room adalah pilihan tepat dengan fasilitas premium dan ruang lebih luas untuk kenyamanan maksimal.
                    </p>
                    
                    <div class="flex items-center justify-center mb-4">
                        <span class="text-lg font-bold text-gray-800">Rp. 1.500.000 / Bulan</span>
                    </div>
                    
                    <a href="/room/deluxe" class="block w-full bg-red-500 text-white text-center py-2.5 rounded-lg text-sm font-semibold hover:bg-red-600 transition">
                        View Detail
                    </a>
                </div>
            </div>

            <!-- Standard Room Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Standard Room</h3>
                    
                    <div class="mb-4">
                        <img src="{{ asset('assets/standardroom.png') }}" alt="Standard Room" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    
                    <p class="text-gray-600 text-center mb-4 text-sm leading-relaxed">
                        Standard Room menawarkan kenyamanan dasar dengan fasilitas yang cukup lengkap untuk kebutuhan tinggal sehari-hari.
                    </p>
                    
                    <div class="flex items-center justify-center mb-4">
                        <span class="text-lg font-bold text-gray-800">Rp. 700.000 / Bulan</span>
                    </div>
                    
                    <a href="/room/standard" class="block w-full bg-red-500 text-white text-center py-2.5 rounded-lg text-sm font-semibold hover:bg-red-600 transition">
                        View Detail
                    </a>
                </div>
            </div>

            <!-- Economy Room Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-3 text-center">Economy Room</h3>
                    
                    <div class="mb-4">
                        <img src="{{ asset('assets/economyroom.png') }}" alt="Economy Room" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    
                    <p class="text-gray-600 text-center mb-4 text-sm leading-relaxed">
                        Economy Room menawarkan tempat hunian yang praktis dengan fasilitas dasar untuk pilihan yang lebih hemat.
                    </p>
                    
                    <div class="flex items-center justify-center mb-4">
                        <span class="text-lg font-bold text-gray-800">Rp. 350.000 / Bulan</span>
                    </div>
                    
                    <a href="/room/economy" class="block w-full bg-red-500 text-white text-center py-2.5 rounded-lg text-sm font-semibold hover:bg-red-600 transition">
                        View Detail
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection