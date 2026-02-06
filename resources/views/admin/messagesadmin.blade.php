@extends('admin.layouts.app')
@section('content')
<div class="min-h-screen" style="background-color: #f7f7ff;">
    <div class="flex-1 p-8">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-3xl font-bold text-black">Messages</h1>
                <p class="text-gray-600 text-sm mt-1">Kelola pesan dari tenant dan pengunjung</p>
            </div>

            <!-- Profile Icon -->
            <button class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <input 
                type="text" 
                placeholder="Search" 
                class="w-full px-6 py-4 rounded-lg focus:outline-none text-base" 
                style="background-color: #ffffff; border: 2px solid #FB4448;"
            >
        </div>

        <!-- Tabs -->
        <div class="flex gap-4 mb-6">
            <button onclick="filterMessages('all')" id="tab-all" class="px-6 py-3 font-bold rounded-lg" style="background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448;">
                Semua
            </button>
            <button onclick="filterMessages('unread')" id="tab-unread" class="px-6 py-3 font-semibold text-gray-700 rounded-lg hover:bg-gray-50" style="background-color: #ffffff; border: 2px solid #e5e7eb;">
                Belum dibaca
            </button>
            <button onclick="filterMessages('read')" id="tab-read" class="px-6 py-3 font-semibold text-gray-700 rounded-lg hover:bg-gray-50" style="background-color: #ffffff; border: 2px solid #e5e7eb;">
                Sudah dibaca
            </button>
        </div>

        <!-- Messages Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
            <!-- Message List (LEFT - LARGER - 3 columns) -->
            <div class="lg:col-span-3 rounded-lg p-4" style="background-color: #ffffff; border: 2px solid #FB4448; max-height: 600px; overflow-y: auto;">
                <!-- Message Item 1 (Unread - has red dot) -->
                <div class="message-item flex items-start gap-3 p-4 mb-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50" data-status="unread">
                    <div class="flex-shrink-0 w-3 h-3 rounded-full mt-2" style="background-color: #FB4448;"></div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-base">Mingyu Kim</h4>
                            <span class="text-sm text-gray-500">Hari ini, 07.00</span>
                        </div>
                        <p class="text-sm text-gray-700">
                            <span class="font-bold">Selamat pagi pak</span><br>
                            Saya ingin menanyakan...
                        </p>
                    </div>
                </div>

                <!-- Message Item 2 (Read - no red dot) -->
                <div class="message-item flex items-start gap-3 p-4 mb-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50" data-status="read">
                    <div class="flex-1 ml-6">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-base">Leonel Messi</h4>
                            <span class="text-sm text-gray-500">Kemarin, 16.30</span>
                        </div>
                        <p class="text-sm text-gray-700">
                            <span class="font-bold">Halo admin</span><br>
                            Saya mau tanya tentang...
                        </p>
                    </div>
                </div>

                <!-- Message Item 3 (Unread - has red dot) -->
                <div class="message-item flex items-start gap-3 p-4 mb-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50" data-status="unread">
                    <div class="flex-shrink-0 w-3 h-3 rounded-full mt-2" style="background-color: #FB4448;"></div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-base">Nolan North</h4>
                            <span class="text-sm text-gray-500">Hari ini, 09.15</span>
                        </div>
                        <p class="text-sm text-gray-700">
                            <span class="font-bold">Permisi pak</span><br>
                            Kapan saya bisa pindah...
                        </p>
                    </div>
                </div>

                <!-- Message Item 4 (Read - no red dot) -->
                <div class="message-item flex items-start gap-3 p-4 cursor-pointer hover:bg-gray-50" data-status="read">
                    <div class="flex-1 ml-6">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-base">Marco Silva</h4>
                            <span class="text-sm text-gray-500">2 hari lalu, 14.20</span>
                        </div>
                        <p class="text-sm text-gray-700">
                            <span class="font-bold">Terima kasih pak</span><br>
                            Saya sudah terima informasinya...
                        </p>
                    </div>
                </div>

                <!-- Message Item 5 (Unread - has red dot) -->
                <div class="message-item flex items-start gap-3 p-4 mb-3 border-b border-gray-200 cursor-pointer hover:bg-gray-50" data-status="unread">
                    <div class="flex-shrink-0 w-3 h-3 rounded-full mt-2" style="background-color: #FB4448;"></div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-bold text-base">Jiwa Pratama</h4>
                            <span class="text-sm text-gray-500">Hari ini, 11.45</span>
                        </div>
                        <p class="text-sm text-gray-700">
                            <span class="font-bold">Pak saya mau komplain</span><br>
                            AC di kamar saya rusak...
                        </p>
                    </div>
                </div>
            </div>

            <!-- Chat Area (RIGHT - SMALLER - 2 columns) -->
            <div class="lg:col-span-2 rounded-lg p-5" style="background-color: #ffffff; border: 2px solid #FB4448;">
                <!-- Chat Header -->
                <div class="flex justify-between items-center mb-5 pb-4 border-b border-gray-200">
                    <div>
                        <h3 class="text-lg font-bold">Mingyu Kim</h3>
                        <p class="text-xs text-gray-600">mingyukim@gmail.com</p>
                    </div>
                    <button class="px-4 py-2 rounded-lg font-semibold text-sm hover:bg-red-50" style="color: #FB4448; border: 2px solid #FB4448; background-color: #ffffff;">
                        Arsipkan
                    </button>
                </div>

                <!-- Chat Messages -->
                <div class="space-y-4 mb-5" style="min-height: 320px; max-height: 320px; overflow-y: auto;">
                    <!-- Message from User -->
                    <div class="flex justify-start">
                        <div class="w-full">
                            <div class="bg-gray-100 rounded-lg p-4 mb-1">
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    <span class="font-bold">Selamat pagi pak</span><br>
                                    Saya ingin menanyakan apakah masih ada kamar kosong untuk bulan ini. Jika ada, mohon informasinya terkait harga dan fasilitas yang tersedia. Terima kasih.
                                </p>
                            </div>
                            <span class="text-xs text-gray-500 ml-2">Hari ini 07.00</span>
                        </div>
                    </div>

                    <!-- Message from Admin -->
                    <div class="flex justify-end">
                        <div class="w-full">
                            <div class="rounded-lg p-4 mb-1" style="background-color: #f0f0f0;">
                                <p class="text-sm font-bold mb-2">Admin</p>
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    <span class="font-bold">Selamat sore</span><br>
                                    Terima kasih sudah menghubungi kami. Saat ini masih tersedia kamar untuk bulan ini. Harga dan fasilitas dapat kami informasikan lebih lanjut sesuai tipe kamar. Silakan konfirmasi jika berminat. Terima kasih.
                                </p>
                            </div>
                            <div class="text-right">
                                <span class="text-xs text-gray-500 mr-2">Hari ini 15.00</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Input -->
                <div class="border-t border-gray-200 pt-4">
                    <textarea 
                        placeholder="Tulis balasan..." 
                        rows="3" 
                        class="w-full px-3 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-gray-400 text-sm resize-none mb-3"
                        style="background-color: #f9fafb;"
                    ></textarea>
                    <div class="flex flex-col gap-2">
                        <button class="w-full px-4 py-2 rounded-lg font-semibold text-sm text-gray-700 hover:bg-gray-50" style="background-color: #ffffff; border: 2px solid #e5e7eb;">
                            Tandai selesai
                        </button>
                        <button class="w-full px-4 py-2 rounded-lg font-semibold text-sm text-white hover:opacity-90" style="background-color: #FB4448;">
                            Kirim
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function filterMessages(type) {
    // Remove active state from all tabs
    document.getElementById('tab-all').style.cssText = 'background-color: #ffffff; color: #6b7280; border: 2px solid #e5e7eb;';
    document.getElementById('tab-unread').style.cssText = 'background-color: #ffffff; color: #6b7280; border: 2px solid #e5e7eb;';
    document.getElementById('tab-read').style.cssText = 'background-color: #ffffff; color: #6b7280; border: 2px solid #e5e7eb;';
    
    // Add active state to clicked tab
    if (type === 'all') {
        document.getElementById('tab-all').style.cssText = 'background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448; font-weight: bold;';
    } else if (type === 'unread') {
        document.getElementById('tab-unread').style.cssText = 'background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448; font-weight: bold;';
    } else if (type === 'read') {
        document.getElementById('tab-read').style.cssText = 'background-color: #ffffff; color: #FB4448; border: 2px solid #FB4448; font-weight: bold;';
    }
    
    // Filter message items
    const messageItems = document.querySelectorAll('.message-item');
    
    messageItems.forEach(item => {
        if (type === 'all') {
            // Show all messages
            item.style.display = '';
        } else {
            // Show only messages matching the selected status
            if (item.getAttribute('data-status') === type) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        }
    });
}
</script>
@endsection