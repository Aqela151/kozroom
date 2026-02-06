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
            
            <!-- Room Slider -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden max-w-4xl mx-auto relative p-5 md:p-6">
                <div id="roomSlider" class="relative">
                    <!-- Deluxe Room -->
                    <div class="room-slide active">
                        <div class="grid md:grid-cols-2 gap-5 items-stretch">
                            <div class="relative min-h-[280px]">
                                <img src="{{ asset('assets/bannerutama.png') }}" alt="Deluxe Room" class="w-full h-full object-cover rounded-2xl shadow-lg">
                            </div>
                            
                            <div class="flex flex-col justify-center py-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Deluxe Room</h3>
                                <p class="text-gray-600 mb-3 text-xs md:text-sm leading-relaxed">
                                    Kamar luas dengan fasilitas lengkap untuk kenyamanan maksimal.
                                </p>
                                <ul class="space-y-1.5">
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>Ukuran 3×4 m</span>
                                    </li>
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>AC & kamar mandi dalam</span>
                                    </li>
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>WiFi cepat</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Standard Room -->
                    <div class="room-slide">
                        <div class="grid md:grid-cols-2 gap-5 items-stretch">
                            <div class="relative min-h-[280px]">
                                <img src="{{ asset('assets/standardroom.png') }}" alt="Standard Room" class="w-full h-full object-cover rounded-2xl shadow-lg">
                            </div>
                            
                            <div class="flex flex-col justify-center py-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Standard Room</h3>
                                <p class="text-gray-600 mb-3 text-xs md:text-sm leading-relaxed">
                                    Kamar nyaman dengan fasilitas standar, cocok untuk kehidupan sehari-hari.
                                </p>
                                <ul class="space-y-1.5">
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>Rp 700.000 / Bulan</span>
                                    </li>
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>Ukuran 8 m²</span>
                                    </li>
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>Kipas angin & meja belajar</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Economy Room -->
                    <div class="room-slide">
                        <div class="grid md:grid-cols-2 gap-5 items-stretch">
                            <div class="relative min-h-[280px]">
                                <img src="{{ asset('assets/economyroom.png') }}" alt="Economy Room" class="w-full h-full object-cover rounded-2xl shadow-lg">
                            </div>
                            
                            <div class="flex flex-col justify-center py-1">
                                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Economy Room</h3>
                                <p class="text-gray-600 mb-3 text-xs md:text-sm leading-relaxed">
                                    Pilihan hemat dengan fasilitas dasar untuk budget terbatas.
                                </p>
                                <ul class="space-y-1.5">
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>Rp 350.000 / Bulan</span>
                                    </li>
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>Ukuran 6 m²</span>
                                    </li>
                                    <li class="flex items-center text-gray-700 text-xs md:text-sm">
                                        <span class="text-red-500 mr-2">•</span>
                                        <span>Ventilasi & tempat tidur</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center mt-8 space-x-2">
                    <button onclick="changeSlide(0)" class="dot w-3 h-3 rounded-full bg-red-500 transition-all"></button>
                    <button onclick="changeSlide(1)" class="dot w-3 h-3 rounded-full bg-gray-300 hover:bg-red-300 transition-all"></button>
                    <button onclick="changeSlide(2)" class="dot w-3 h-3 rounded-full bg-gray-300 hover:bg-red-300 transition-all"></button>
                </div>
            </div>
        </div>
    </section>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.room-slide');
        const dots = document.querySelectorAll('.dot');
        
        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => {
                dot.classList.remove('bg-red-500');
                dot.classList.add('bg-gray-300');
            });
            
            slides[index].classList.add('active');
            dots[index].classList.remove('bg-gray-300');
            dots[index].classList.add('bg-red-500');
        }
        
        function changeSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
        
        // Auto slide setiap 5 detik
        setInterval(nextSlide, 5000);
    </script>

    <style>
        .room-slide {
            display: none;
        }
        
        .room-slide.active {
            display: block;
        }
    </style>

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
            
            <!-- Article Slider -->
            <div class="max-w-5xl mx-auto relative">
                <div id="articleSlider" class="relative">
                    <!-- Artikel 1 -->
                    <div class="article-slide active">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-white border-2 border-red-500 rounded-lg overflow-hidden hover:shadow-lg transition">
                                <div class="flex h-full">
                                    <div class="w-2/5">
                                        <img src="{{ asset('assets/artikel3.png') }}" alt="5 cara hemat tinggal di kos" class="w-full h-full object-cover">
                                    </div>
                                    <div class="w-3/5 p-4 md:p-5 flex flex-col justify-center">
                                        <h3 class="text-base md:text-lg font-bold text-gray-800 mb-2">5 cara hemat tinggal di kos</h3>
                                        <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                            Tips praktis mengatur keuangan dan gaya hidup agar tetap hemat saat tinggal di kos...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white border-2 border-red-500 rounded-lg overflow-hidden hover:shadow-lg transition">
                                <div class="flex h-full">
                                    <div class="w-2/5">
                                        <img src="{{ asset('assets/artikel4.png') }}" alt="Pengumuman renovasi gedung" class="w-full h-full object-cover">
                                    </div>
                                    <div class="w-3/5 p-4 md:p-5 flex flex-col justify-center">
                                        <h3 class="text-base md:text-lg font-bold text-gray-800 mb-2">Pengumuman renovasi gedung</h3>
                                        <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                            Informasi terkini mengenai jadwal dan area renovasi gedung kos untuk meningkatkan kenyamanan penghuni...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Artikel 2 (slide berikutnya - bisa ditambahkan nanti) -->
                    <div class="article-slide">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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
                                        <img src="{{ asset('assets/artikel2.png') }}" alt="Aturan tinggal di kos" class="w-full h-full object-cover">
                                    </div>
                                    <div class="w-3/5 p-4 md:p-5 flex flex-col justify-center">
                                        <h3 class="text-base md:text-lg font-bold text-gray-800 mb-2">Aturan tinggal di kos</h3>
                                        <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                                            Tinggal di kos berarti hidup bersama dengan banyak orang yang memiliki kebiasaan dan latar belakang berbeda. Agar suasana tetap nyaman, aman, dan harmonis...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center mt-6 space-x-2">
                    <button onclick="changeArticleSlide(0)" class="article-dot w-2.5 h-2.5 rounded-full bg-red-500"></button>
                    <button onclick="changeArticleSlide(1)" class="article-dot w-2.5 h-2.5 rounded-full bg-gray-300 hover:bg-red-300"></button>
                </div>
            </div>
        </div>
    </section>

    <script>
        let currentArticleSlide = 0;
        const articleSlides = document.querySelectorAll('.article-slide');
        const articleDots = document.querySelectorAll('.article-dot');
        
        function showArticleSlide(index) {
            articleSlides.forEach(slide => slide.classList.remove('active'));
            articleDots.forEach(dot => {
                dot.classList.remove('bg-red-500');
                dot.classList.add('bg-gray-300');
            });
            
            articleSlides[index].classList.add('active');
            articleDots[index].classList.remove('bg-gray-300');
            articleDots[index].classList.add('bg-red-500');
        }
        
        function changeArticleSlide(index) {
            currentArticleSlide = index;
            showArticleSlide(currentArticleSlide);
        }
        
        function nextArticleSlide() {
            currentArticleSlide = (currentArticleSlide + 1) % articleSlides.length;
            showArticleSlide(currentArticleSlide);
        }
        
        // Auto slide setiap 6 detik
        setInterval(nextArticleSlide, 6000);
    </script>

    <style>
        .article-slide {
            display: none;
        }
        
        .article-slide.active {
            display: block;
        }
    </style>

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