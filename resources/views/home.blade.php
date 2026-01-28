@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
.hero-bg {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/headline.png');
    background-size: cover;
    background-position: center;
}

/* Pastikan konten utama mengambil tinggi minimal */
.main-content {
    min-height: calc(100vh - 200px);
}
</style>

<div class="main-content">
    <!-- Hero Section - Ukuran dikurangi -->
    <section class="hero-bg relative h-[350px] md:h-[450px]">
        <div class="container mx-auto px-6 h-full flex flex-col items-center justify-center text-center">
            <h1 class="text-white text-3xl md:text-4xl font-bold mb-3">
                Temukan Kos Nyaman untuk Hunian Anda
            </h1>
            <p class="text-white text-base md:text-lg mb-6 max-w-2xl">
                Lihat ketersediaan kamar, pesan online, dan bayar dengan aman di KozRoom.
            </p>
            
            <div class="w-full max-w-xl bg-white rounded-full shadow-lg p-1.5 flex items-center">
                <input 
                    type="text" 
                    placeholder="Cari kos berdasarkan lokasi atau nama kamar" 
                    class="flex-1 px-4 py-2.5 text-sm text-gray-700 focus:outline-none rounded-l-full"
                >
                <button class="bg-red-500 text-white px-6 py-2.5 rounded-full text-sm font-medium hover:bg-red-600 transition">
                    Search
                </button>
            </div>
        </div>
    </section>

    <!-- Available Rooms Section -->
    <section class="py-12" style="background-color: #f7f7ff;">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2">Available Rooms</h2>
                <div class="w-20 h-1 bg-red-500 mx-auto"></div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="relative h-64 md:h-auto">
                        <img src="{{ asset('assets/bannerutama.png') }}" alt="Deluxe Room" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="p-6 md:p-8 flex flex-col justify-center">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-3">Deluxe Room</h3>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">
                            Kamar luas dengan fasilitas lengkap untuk kenyamanan maksimal.
                        </p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start text-gray-700 text-sm md:text-base">
                                <span class="text-red-500 mr-2">•</span>
                                <span>Ukuran 3×4 m</span>
                            </li>
                            <li class="flex items-start text-gray-700 text-sm md:text-base">
                                <span class="text-red-500 mr-2">•</span>
                                <span>AC & kamar mandi dalam</span>
                            </li>
                            <li class="flex items-start text-gray-700 text-sm md:text-base">
                                <span class="text-red-500 mr-2">•</span>
                                <span>WiFi cepat</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="flex justify-center py-3 space-x-2">
                    <button class="w-2.5 h-2.5 rounded-full bg-red-500"></button>
                    <button class="w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-red-300"></button>
                    <button class="w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-red-300"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-12" style="background-color: #f7f7ff;">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2">Why Choose Us?</h2>
                <div class="w-20 h-1 bg-red-500 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="flex justify-center mb-3">
                        <img src="{{ asset('assets/wifi-icon.png') }}" alt="WiFi" class="h-12 w-12 md:h-14 md:w-14">
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-gray-800 mb-1">Free WiFi</h3>
                    <p class="text-gray-600 text-xs md:text-sm">Akses internet cepat 24 jam</p>
                </div>
                
                <div class="text-center">
                    <div class="flex justify-center mb-3">
                        <img src="{{ asset('assets/parkir-icon.png') }}" alt="Parking" class="h-12 w-12 md:h-14 md:w-14">
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-gray-800 mb-1">Parking Area</h3>
                    <p class="text-gray-600 text-xs md:text-sm">Area parkir aman & luas</p>
                </div>
                
                <div class="text-center">
                    <div class="flex justify-center mb-3">
                        <img src="{{ asset('assets/map-icon.png') }}" alt="Location" class="h-12 w-12 md:h-14 md:w-14">
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-gray-800 mb-1">Strategic Area</h3>
                    <p class="text-gray-600 text-xs md:text-sm">Dekat kampus & pusat kota</p>
                </div>
                
                <div class="text-center">
                    <div class="flex justify-center mb-3">
                        <img src="{{ asset('assets/security-icon.png') }}" alt="Security" class="h-12 w-12 md:h-14 md:w-14">
                    </div>
                    <h3 class="text-base md:text-lg font-bold text-gray-800 mb-1">24/7 Security</h3>
                    <p class="text-gray-600 text-xs md:text-sm">Keamanan 24 jam</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips & Information Section -->
    <section class="py-12" style="background-color: #f7f7ff;">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2">Tips & Information</h2>
                <div class="w-20 h-1 bg-red-500 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                <div class="bg-white border-2 border-red-500 rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="flex h-full">
                        <div class="w-2/5">
                            <img src="{{ asset('assets/artikel1.png') }}" alt="Tips Memilih Kos" class="w-full h-full object-cover">
                        </div>
                        <div class="w-3/5 p-4 md:p-5 flex flex-col justify-center">
                            <h3 class="text-base md:text-lg font-bold text-gray-800 mb-2">Tips Memilih Kos</h3>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                Memilih kos bukan sekadar mencari tempat untuk tidur, tetapi juga menentukan kenyamanan dan kelancaran aktivitas sehari-hari...
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border-2 border-red-500 rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="flex h-full">
                        <div class="w-2/5">
                            <img src="{{ asset('assets/artikel2.png') }}" alt="Aturan tinggal di..." class="w-full h-full object-cover">
                        </div>
                        <div class="w-3/5 p-4 md:p-5 flex flex-col justify-center">
                            <h3 class="text-base md:text-lg font-bold text-gray-800 mb-2">Aturan tinggal di...</h3>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                Tinggal di kos berarti hidup bersama dengan banyak orang yang memiliki kebiasaan dan latar belakang berbeda. Agar suasana tetap nyaman, aman, dan harmonis, setiap penghuni...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-center mt-6 space-x-2">
                <button class="w-2.5 h-2.5 rounded-full bg-red-500"></button>
                <button class="w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-red-300"></button>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-12" style="background-color: #f7f7ff;">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-red-500 mb-2">Location</h2>
                <div class="w-20 h-1 bg-red-500 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6 md:gap-8 max-w-5xl mx-auto items-center">
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5447893156885!2d112.61803131477824!3d-7.945784994277684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f3b0b3b3b%3A0x1234567890abcdef!2sJl.%20Kendalsari%20IV%20No.28A%2C%20Tulusrejo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1234567890123!5m2!1sid!2sid" 
                        width="100%" 
                        height="280" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <div class="text-center md:text-left">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Full Address</h3>
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed mb-6">
                        Jl. Kendalsari IV No.28A, RT.01/ RW.09, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                    </p>
                    <a 
                        href="https://www.google.com/maps/search/?api=1&query=Jl.+Kendalsari+IV+No.28A,+Tulusrejo,+Kec.+Lowokwaru,+Kota+Malang,+Jawa+Timur+65141" 
                        target="_blank"
                        class="inline-block bg-red-500 text-white px-6 py-2.5 rounded-lg text-sm font-medium hover:bg-red-600 transition shadow-lg">
                        View Location
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection