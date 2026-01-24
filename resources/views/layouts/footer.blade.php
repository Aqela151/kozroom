<footer class="bg-black text-white py-16">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">

            {{-- BRAND --}}
            <div class="flex flex-col items-start">
                <div class="mb-8">
                    <img src="{{ asset('assets/logo-putih.png') }}" alt="KozRoom Logo" class="h-16 w-auto">
                </div>
                <div class="flex gap-4">
                    <a href="#" class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                        <img src="{{ asset('assets/instagram-icon.png') }}" class="h-6 w-6" alt="Instagram">
                    </a>
                    <a href="#" class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                        <img src="{{ asset('assets/facebook-icon.png') }}" class="h-6 w-6" alt="Facebook">
                    </a>
                    <a href="#" class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                        <img src="{{ asset('assets/twitter-icon.png') }}" class="h-6 w-6" alt="X">
                    </a>
                </div>
            </div>

            {{-- ADDRESS --}}
            <div>
                <h3 class="text-2xl font-bold mb-6">Address</h3>
                <p class="text-white text-base leading-relaxed">
                    Jl. Kendalsari IV No.28A,<br>
                    RT.01/RW.09, Tulusrejo,<br>
                    Kec. Lowokwaru, Kota<br>
                    Malang, Jawa Timur<br>
                    65141
                </p>
            </div>

            {{-- CONTACT --}}
            <div>
                <h3 class="text-2xl font-bold mb-6">Contact</h3>
                <div class="space-y-3">
                    <p class="text-white text-base">+62 8333 3456 7890</p>
                    <p class="text-white text-base">KozRoom@gmail.com</p>
                </div>
            </div>

            {{-- QUICK LINKS --}}
            <div>
                <h3 class="text-2xl font-bold mb-6">Quick Links</h3>
                <ul class="space-y-3 text-base text-white">
                    <li><a href="/" class="hover:text-gray-300 transition">Home</a></li>
                    <li><a href="/room" class="hover:text-gray-300 transition">Room</a></li>
                    <li><a href="/booking" class="hover:text-gray-300 transition">Booking</a></li>
                    <li><a href="/contact" class="hover:text-gray-300 transition">Contact</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>