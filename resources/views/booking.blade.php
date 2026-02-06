@extends('layouts.app')

@section('title', 'Booking')

@section('content')

<!-- Booking Header Section -->
<section class="py-12" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="text-center mb-2">
            <h1 class="text-4xl md:text-5xl font-bold text-red-500 mb-3">Room Booking</h1>
            <p class="text-gray-700 text-base">Lengkapi data pemesanan untuk melanjutkan proses booking kamar pilihanmu.</p>
        </div>
    </div>
</section>

<!-- Booking Form Section -->
<section class="py-8" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 {{ $selectedRoom ? 'lg:grid-cols-3' : 'lg:grid-cols-1' }} gap-8 max-w-7xl mx-auto">
            
            <!-- Form -->
            <div class="{{ $selectedRoom ? 'lg:col-span-2' : 'max-w-3xl mx-auto w-full' }}">
               <form action="{{ url('/payment') }}" method="GET">
                    
                    <!-- Hidden input untuk room type -->
                    @if($selectedRoom)
                    <input type="hidden" name="room_type" value="{{ request()->query('room') }}">
                    @endif
                    
                    <!-- Nama Lengkap -->
                    <div class="mb-6">
                        <label class="block text-gray-800 font-medium mb-2">Nama Lengkap</label>
                        <input 
                            type="text" 
                            name="nama_lengkap"
                            placeholder="Masukkan nama lengkap" 
                            class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:outline-none focus:border-red-500 bg-white"
                            required
                        >
                    </div>
                    
                    <!-- No. Handphone / WhatsApp -->
                    <div class="mb-6">
                        <label class="block text-gray-800 font-medium mb-2">No. Handphone / WhatsApp</label>
                        <input 
                            type="tel" 
                            name="no_handphone"
                            placeholder="Masukkan nomor handphone" 
                            class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:outline-none focus:border-red-500 bg-white"
                            required
                        >
                    </div>
                    
                    <!-- Email -->
                    <div class="mb-6">
                        <label class="block text-gray-800 font-medium mb-2">Email</label>
                        <input 
                            type="email" 
                            name="email"
                            placeholder="Masukkan alamat email" 
                            class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:outline-none focus:border-red-500 bg-white"
                            required
                        >
                    </div>

                    <!-- Pilih Tipe Kamar (hanya muncul jika belum pilih kamar) -->
                    @if(!$selectedRoom)
                    <div class="mb-6">
                        <label class="block text-gray-800 font-medium mb-2">Pilih Tipe Kamar</label>
                        <select 
                            name="room_type"
                            class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:outline-none focus:border-red-500 bg-white text-gray-700 appearance-none" 
                            style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em;"
                            required
                        >
                            <option value="">Pilih tipe kamar</option>
                            <option value="deluxe">Deluxe Room - Rp 1.500.000</option>
                            <option value="standard">Standard Room - Rp 700.000</option>
                            <option value="economy">Economy Room - Rp 350.000</option>
                        </select>
                    </div>
                    @endif
                    
                    <!-- Tanggal Masuk -->
                    <div class="mb-6">
                        <label class="block text-gray-800 font-medium mb-2">Tanggal Masuk</label>
                        <input 
                            type="date" 
                            name="tanggal_masuk"
                            placeholder="dd/mm/yy" 
                            class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:outline-none focus:border-red-500 bg-white"
                            required
                        >
                    </div>
                    
                    <!-- Lama Sewa -->
                    <div class="mb-6">
                        <label class="block text-gray-800 font-medium mb-2">Lama Sewa</label>
                        <select 
                            name="lama_sewa"
                            class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:outline-none focus:border-red-500 bg-white text-gray-700 appearance-none" 
                            style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em;"
                            required
                        >
                            <option value="">Pilih lama sewa</option>
                            <option value="1">1 Bulan</option>
                            <option value="3">3 Bulan</option>
                            <option value="6">6 Bulan</option>
                            <option value="12">12 Bulan</option>
                        </select>
                    </div>
                    
                    <!-- Catatan -->
                    <div class="mb-6">
                        <label class="block text-gray-800 font-medium mb-2">Catatan</label>
                        <textarea 
                            name="catatan"
                            rows="6" 
                            placeholder="Catatan (Opsional)" 
                            class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:outline-none focus:border-red-500 resize-none bg-white"
                        ></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button 
                            type="submit" 
                            class="bg-red-500 text-white px-16 py-3 rounded-lg text-lg font-semibold hover:bg-red-600 transition"
                        >
                            Go To Payment
                        </button>
                    </div>
                </form>
            </div>

            <!-- Selected Room Card - Hanya muncul jika ada kamar yang dipilih -->
            @if($selectedRoom)
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-red-500 sticky top-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Selected Room</h2>
                    
                    <!-- Room Image -->
                    <div class="mb-4">
                        <img src="{{ asset($selectedRoom['image']) }}" alt="{{ $selectedRoom['name'] }}" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    
                    <!-- Room Name & Price -->
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $selectedRoom['name'] }}</h3>
                        <p class="text-gray-700 font-medium">Rp. {{ number_format($selectedRoom['price'], 0, ',', '.') }} / Bulan</p>
                    </div>
                    
                    <hr class="border-t-2 border-gray-300 my-4">
                    
                    <!-- Facilities -->
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Fasilitas</h3>
                        <ul class="space-y-1 text-gray-800 text-sm">
                            @foreach($selectedRoom['facilities'] as $facility)
                            <li class="flex items-start">
                                <span class="mr-2">•</span>
                                <span>{{ $facility }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <hr class="border-t-2 border-gray-300 my-4">
                    
                    <!-- Status -->
                    <div class="mb-4">
                        <div class="flex items-center gap-2">
                            <span class="text-gray-800 font-semibold">Status:</span>
                            <div class="flex items-center gap-1">
                                <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
                                <span class="text-sm text-gray-700">Menunggu Pembayaran</span>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="border-t-2 border-gray-300 my-4">
                    
                    <!-- Total -->
                    <div class="text-center">
                        <p class="text-xl font-bold text-gray-800">Total: Rp. {{ number_format($selectedRoom['price'], 0, ',', '.') }}</p>
                        <p class="text-xs text-gray-600 mt-1">*Harga per bulan</p>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</section>

<!-- Riwayat Booking Section -->
<section class="py-12" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Riwayat Booking</h2>
            
            <!-- Table -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                <table class="w-full">
                    <thead class="bg-red-500 text-white">
                        <tr>
                            <th class="py-4 px-6 text-center font-semibold text-lg">Room</th>
                            <th class="py-4 px-6 text-center font-semibold text-lg">Status</th>
                            <th class="py-4 px-6 text-center font-semibold text-lg">Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        <tr class="border-b border-gray-200">
                            <td class="py-4 px-6 text-center">Deluxe Room</td>
                            <td class="py-4 px-6 text-center">Menunggu Verifikasi</td>
                            <td class="py-4 px-6 text-center">21 Januari 2027</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-center">Standard Room</td>
                            <td class="py-4 px-6 text-center">Selesai</td>
                            <td class="py-4 px-6 text-center">21 November 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection