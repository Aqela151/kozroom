<header class="border-b border-gray-200 shadow-sm" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-16">

            {{-- LOGO --}}
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/logo.png') }}" alt="KozRoom" class="h-10">
            </div>

            {{-- NAV MENU --}}
            <nav class="hidden md:flex items-center space-x-8">
                <a href="/" class="{{ request()->is('/') ? 'text-red-500 font-semibold' : 'text-gray-700 hover:text-red-500' }} text-base transition">
                    Home
                </a>
                <a href="/room" class="{{ request()->is('room') ? 'text-red-500 font-semibold' : 'text-gray-700 hover:text-red-500' }} text-base transition">
                    Room
                </a>
                <a href="/booking" class="{{ request()->is('booking') ? 'text-red-500 font-semibold' : 'text-gray-700 hover:text-red-500' }} text-base transition">
                    Booking
                </a>
                <a href="/contact" class="{{ request()->is('contact') ? 'text-red-500 font-semibold' : 'text-gray-700 hover:text-red-500' }} text-base transition">
                    Contact
                </a>
            </nav>

            {{-- AUTH BUTTON --}}
            <div class="flex items-center gap-3">
                <a href="/login"
                   class="px-5 py-2 border-2 border-red-500 text-red-500 rounded-lg hover:bg-red-50 font-medium text-sm transition">
                    Login
                </a>
                <a href="/register"
                   class="px-5 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 font-medium text-sm transition">
                    Register
                </a>
            </div>

        </div>
    </div>
</header>