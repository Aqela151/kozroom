@extends('layouts.app')

@section('title', 'Deluxe Room')

@section('content')
<style>
.room-detail-hero-bg {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/bannerutama.png');
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
<section class="room-detail-hero-bg relative h-[350px] md:h-[450px]">
    <div class="container mx-auto px-6 h-full flex flex-col items-center justify-center text-center">
        <h1 class="text-white text-3xl md:text-4xl font-bold mb-3">
            Deluxe Room
        </h1>
        <h2 class="text-white text-xl md:text-2xl font-semibold mb-4">
            Rp. 1.500.000 / Bulan
        </h2>
        <a href="{{ route('booking', ['room' => 'deluxe']) }}" class="bg-red-500 text-white px-8 py-2.5 rounded-full text-base font-semibold hover:bg-red-600 transition">
            Book Now
        </a>
    </div>
</section>

<!-- Description Section -->
<section class="py-6" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <p class="text-center text-red-500 text-base md:text-lg max-w-5xl mx-auto leading-relaxed">
            Nikmati pengalaman tinggal yang lebih nyaman di Deluxe Room, dengan ruang yang luas, desain modern, dan fasilitas premium.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-10" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 max-w-6xl mx-auto">
            
            <!-- Description and Facilities Box -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-red-400">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Description</h2>
                <p class="text-gray-800 leading-relaxed mb-6 text-sm">
                    Deluxe Room merupakan tipe kamar dengan ruang yang lebih luas dan fasilitas premium untuk menunjang kenyamanan tinggal. Kamar ini dilengkapi dengan tempat tidur nyaman, lemari, meja kerja, serta pencahayaan yang baik untuk aktivitas sehari-hari. Cocok bagi kamu yang menginginkan suasana tenang, privasi lebih, dan kenyamanan maksimal selama tinggal di kos.
                </p>
                
                <hr class="border-t-2 border-gray-300 my-6">
                
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Fasilitas</h2>
                <ul class="space-y-2 text-gray-800 text-sm">
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>Kamar mandi dalam</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>AC</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>Air panas (water heater)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>Tempat tidur Queen Size</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>Lemari pakaian ukuran besar</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2">•</span>
                        <span>Meja kerja lebih luas</span>
                    </li>
                </ul>
            </div>

            <!-- Quick Info Box -->
<div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-red-400 self-start">
    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Quick Info</h2>
    <ul class="space-y-2.5 text-gray-800 mb-6 text-sm">
        <li class="flex items-start">
            <span class="mr-2">•</span>
            <span><strong>Harga:</strong> Rp 1.500.000 / Bulan</span>
        </li>
        <li class="flex items-start">
            <span class="mr-2">•</span>
            <span><strong>Ukuran:</strong> 12 m²</span>
        </li>
        <li class="flex items-start">
            <span class="mr-2">•</span>
            <span><strong>Kamar mandi:</strong> dalam</span>
        </li>
        <li class="flex items-start">
            <span class="mr-2">•</span>
            <span><strong>Fasilitas Utama:</strong> AC, Air panas</span>
        </li>
        <li class="flex items-start">
            <span class="mr-2">•</span>
            <span><strong>Kapasitas:</strong> 1 orang</span>
        </li>
    </ul>
    <div class="flex justify-center">
        <a href="{{ route('booking', ['room' => 'deluxe']) }}" class="inline-block bg-red-500 text-white px-8 py-2.5 rounded-lg text-base font-semibold hover:bg-red-600 transition">
            Book Now
        </a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- Gallery Section with Carousel -->
<section class="py-12" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="relative carousel-container rounded-2xl overflow-hidden shadow-2xl">
                <div class="carousel-track" id="carouselTrack">
                    <!-- Slide 1 -->
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/bannerutama.png') }}" alt="Deluxe Room 1" class="w-full h-[350px] md:h-[450px] object-cover">
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/deluxe2.png') }}" alt="Deluxe Room 2" class="w-full h-[350px] md:h-[450px] object-cover">
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide">
                        <img src="{{ asset('assets/deluxe3.png') }}" alt="Deluxe Room 3" class="w-full h-[350px] md:h-[450px] object-cover">
                    </div>
                </div>
                
                <!-- Navigation Arrows -->
                <button onclick="prevSlide()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full w-10 h-10 flex items-center justify-center shadow-lg transition z-10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button onclick="nextSlide()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full w-10 h-10 flex items-center justify-center shadow-lg transition z-10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Indicators -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                    <button onclick="goToSlide(0)" class="indicator w-2.5 h-2.5 rounded-full bg-white transition"></button>
                    <button onclick="goToSlide(1)" class="indicator w-2.5 h-2.5 rounded-full bg-white/50 transition"></button>
                    <button onclick="goToSlide(2)" class="indicator w-2.5 h-2.5 rounded-full bg-white/50 transition"></button>
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
    autoSlideInterval = setInterval(nextSlide, 2500); // Auto slide setiap 2.5 detik
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