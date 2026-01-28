<footer class="bg-black text-white py-10">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            {{-- BRAND --}}
            <div class="flex flex-col items-center">
                <div class="mb-5">
                    <img src="{{ asset('assets/logo-putih.png') }}" alt="KozRoom Logo" class="h-12 w-auto">
                </div>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                        <img src="{{ asset('assets/instagram-icon.png') }}" class="h-5 w-5" alt="Instagram">
                    </a>
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                        <img src="{{ asset('assets/facebook-icon.png') }}" class="h-5 w-5" alt="Facebook">
                    </a>
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                        <img src="{{ asset('assets/twitter-icon.png') }}" class="h-5 w-5" alt="X">
                    </a>
                </div>
            </div>

            {{-- ADDRESS --}}
            <div>
                <h3 class="text-lg font-bold mb-4">Address</h3>
                <p class="text-white text-sm leading-relaxed">
                    Jl. Kendalsari IV No.28A,<br>
                    RT.01/RW.09, Tulusrejo,<br>
                    Kec. Lowokwaru, Kota<br>
                    Malang, Jawa Timur<br>
                    65141
                </p>
            </div>

            {{-- CONTACT --}}
            <div>
                <h3 class="text-lg font-bold mb-4">Contact</h3>
                <div class="space-y-2">
                    <p class="text-white text-sm">+62 8333 3456 7890</p>
                    <p class="text-white text-sm">KozRoom@gmail.com</p>
                </div>
            </div>

            {{-- QUICK LINKS --}}
            <div>
                <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm text-white">
                    <li><a href="/" class="hover:text-gray-300 transition">Home</a></li>
                    <li><a href="/room" class="hover:text-gray-300 transition">Room</a></li>
                    <li><a href="/booking" class="hover:text-gray-300 transition">Booking</a></li>
                    <li><a href="/contact" class="hover:text-gray-300 transition">Contact</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>