@extends('layouts.app')

@section('title', 'Standard Room')

@section('content')
<style>
.room-detail-hero-bg {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/standardroom.png');
    background-size: cover;
    background-position: center;
}

.carousel-container {
    position: relative;
    overflow: hidden;
}

.carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-slide {
    min-width: 100%;
    flex-shrink: 0;
}
</style>

<!-- Hero Section -->
<section class="room-detail-hero-bg relative h-[500px] md:h-[600px]">
    <div class="container mx-auto px-6 h-full flex flex-col items-center justify-center text-center">
        <h1 class="text-white text-5xl md:text-6xl font-bold mb-4">
            Standard Room
        </h1>
        <h2 class="text-white text-2xl md:text-3xl font-semibold mb-6">
            Rp. 1.000.000 / Bulan
        </h2>
        <a href="#book" class="bg-red-500 text-white px-12 py-3 rounded-full text-lg font-semibold hover:bg-red-600 transition">
            Book Now
        </a>
    </div>
</section>

<!-- Description Section -->
<section class="py-8" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <p class="text-center text-red-500 text-lg md:text-xl max-w-5xl mx-auto leading-relaxed">
            Kamar kos yang nyaman dan terjangkau untuk kehidupan sehari-hari, dilengkapi dengan fasilitas dasar yang memadai.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-12" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 max-w-6xl mx-auto">
            
            <!-- Description and Facilities Box -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border-2 border-red-400">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Description</h2>
                <p class="text-gray-800 leading-relaxed mb-8 text-base">
                    Standard Room adalah pilihan tepat untuk kamu yang mencari hunian praktis dan ekonomis. Kamar ini dilengkapi dengan fasilitas dasar seperti tempat tidur yang nyaman, lemari pakaian, dan meja belajar. Meskipun sederhana, kamar ini tetap menawarkan kenyamanan untuk aktivitas harian seperti istirahat, belajar, atau bekerja. Cocok untuk mahasiswa dan pekerja yang menginginkan tempat tinggal yang fungsional dengan harga terjangkau.
                </p>
                
                <hr class="border-t-2 border-gray-300 my-8">
                
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Fasilitas</h2>
                <ul class="space-y-2 text-gray-800 text-base">
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span>Kamar mandi luar (sharing)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span>Kipas angin</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span>Tempat tidur Single</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span>Lemari pakaian</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span>Meja belajar</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span>Jendela untuk sirkulasi udara</span>
                    </li>
                </ul>
            </div>

            <!-- Quick Info Box -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border-2 border-red-400">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Quick Info</h2>
                <ul class="space-y-3 text-gray-800 mb-8 text-base">
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span><strong>Harga:</strong> Rp 1.000.000 / Bulan</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span><strong>Ukuran:</strong> 8 m²</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span><strong>Kamar mandi:</strong> Luar (sharing)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span><strong>Fasilitas Utama:</strong> Kipas angin, Meja belajar</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">•</span>
                        <span><strong>Kapasitas:</strong> 1 orang</span>
                    </li>
                </ul>
                <div class="flex justify-center">
                    <a href="#book" class="inline-block bg-red-500 text-white px-12 py-3 rounded-lg text-lg font-semibold hover:bg-red-600 transition">
                        Book Now
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Gallery Section with Carousel -->
<section class="py-16" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="relative carousel-container rounded-2xl overflow-hidden shadow-2xl">
                <div class="carousel-track" id="carouselTrack">
                    <!-- Slide 1 -->
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/standardroom.png') }}" alt="Standard Room 1" class="w-full h-[500px] md:h-[600px] object-cover">
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/standard2.png') }}" alt="Standard Room 2" class="w-full h-[500px] md:h-[600px] object-cover">
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/standard3.png') }}" alt="Standard Room 3" class="w-full h-[500px] md:h-[600px] object-cover">
                    </div>
                </div>
                
                <!-- Navigation Arrows -->
                <button onclick="prevSlide()" class="absolute left-6 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button onclick="nextSlide()" class="absolute right-6 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full w-12 h-12 flex items-center justify-center shadow-lg transition z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Indicators -->
                <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10">
                    <button onclick="goToSlide(0)" class="indicator w-3 h-3 rounded-full bg-white transition"></button>
                    <button onclick="goToSlide(1)" class="indicator w-3 h-3 rounded-full bg-white/50 transition"></button>
                    <button onclick="goToSlide(2)" class="indicator w-3 h-3 rounded-full bg-white/50 transition"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
let currentSlide = 0;
const totalSlides = 3;
const track = document.getElementById('carouselTrack');
const indicators = document.querySelectorAll('.indicator');
let autoSlideInterval;

function updateCarousel() {
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    // Update indicators
    indicators.forEach((indicator, index) => {
        if (index === currentSlide) {
            indicator.classList.remove('bg-white/50');
            indicator.classList.add('bg-white');
        } else {
            indicator.classList.remove('bg-white');
            indicator.classList.add('bg-white/50');
        }
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
    resetAutoSlide();
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateCarousel();
    resetAutoSlide();
}

function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
    resetAutoSlide();
}

function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 4000); // Auto slide setiap 4 detik
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// Start auto slide when page loads
startAutoSlide();

// Pause auto slide on hover
const carouselContainer = document.querySelector('.carousel-container');
carouselContainer.addEventListener('mouseenter', () => {
    clearInterval(autoSlideInterval);
});

carouselContainer.addEventListener('mouseleave', () => {
    startAutoSlide();
});
</script>

@endsection