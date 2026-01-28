<aside class="w-64 bg-black text-white absolute top-0 left-0 flex flex-col" style="min-height: 100%; padding-bottom: 0;">
    <!-- Logo -->
    <div class="px-6 py-8 border-b border-gray-800 flex justify-center items-center">
        <img src="{{ asset('assets/logo-putih.png') }}" alt="KAZ ROOMS" class="h-16 w-auto">
    </div>

    <!-- Menu -->
    <nav class="mt-8 flex flex-col flex-1">
        <a href="{{ url('/admin/dashboard') }}"
           class="flex items-center gap-3 px-6 py-3 hover:bg-gray-800 transition {{ request()->is('admin/dashboard') ? 'bg-gray-800 border-l-4 border-red-500' : '' }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
            </svg>
            <span class="font-medium">Dashboard</span>
        </a>

        <a href="{{ url('/admin/room') }}"
           class="flex items-center gap-3 px-6 py-3 hover:bg-gray-800 transition {{ request()->is('admin/room*') ? 'bg-gray-800 border-l-4 border-red-500' : '' }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
            <span class="font-medium">Rooms</span>
        </a>

        <a href="{{ url('/admin/booking') }}"
           class="flex items-center gap-3 px-6 py-3 hover:bg-gray-800 transition {{ request()->is('admin/booking*') ? 'bg-gray-800 border-l-4 border-red-500' : '' }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/>
            </svg>
            <span class="font-medium">Booking</span>
        </a>

        <a href="{{ url('/admin/payment') }}"
           class="flex items-center gap-3 px-6 py-3 hover:bg-gray-800 transition {{ request()->is('admin/payment*') ? 'bg-gray-800 border-l-4 border-red-500' : '' }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
            </svg>
            <span class="font-medium">Payments</span>
        </a>

        <a href="{{ url('/admin/artikel') }}"
           class="flex items-center gap-3 px-6 py-3 hover:bg-gray-800 transition {{ request()->is('admin/artikel*') ? 'bg-gray-800 border-l-4 border-red-500' : '' }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
            </svg>
            <span class="font-medium">Articles</span>
        </a>

        <a href="{{ url('/admin/messages') }}"
           class="flex items-center gap-3 px-6 py-3 hover:bg-gray-800 transition {{ request()->is('admin/messages*') ? 'bg-gray-800 border-l-4 border-red-500' : '' }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
            </svg>
            <span class="font-medium">Messages</span>
        </a>

        <a href="{{ url('/admin/tenant') }}"
           class="flex items-center gap-3 px-6 py-3 hover:bg-gray-800 transition {{ request()->is('admin/tenant*') ? 'bg-gray-800 border-l-4 border-red-500' : '' }}">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
            </svg>
            <span class="font-medium">Tenant</span>
        </a>

        <!-- Spacer to push logout to bottom -->
        <div class="flex-1"></div>

        <!-- Logout -->
        <div class="border-t border-gray-800 mt-4"></div>
        <a href="{{ url('/logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="flex items-center gap-3 px-6 py-4 text-red-400 hover:bg-gray-800 transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
            </svg>
            <span class="font-medium">Log Out</span>
        </a>
    </nav>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</aside>