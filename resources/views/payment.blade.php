@extends('layouts.app')

@section('title', 'Payment')

@section('content')

<!-- Breadcrumb Section -->
<section class="py-6" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <p class="text-gray-700 text-base">
                Detail Room > Booking > <span class="font-semibold">Payment</span>
            </p>
        </div>
    </div>
</section>

<!-- Payment Header -->
<section class="py-8" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-red-500">Booking Payment</h1>
    </div>
</section>

<!-- Payment Content Section -->
<section class="pb-16" style="background-color: #f7f7ff;">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            
            <!-- Left Column - Payment Info (2 columns wide) -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-lg p-8 border-2 border-red-500">
                    
                    <!-- Total Payment -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-3">Total yang harus dibayar:</h2>
                        <p class="text-4xl font-bold text-gray-900">Rp. 3.000.000</p>
                    </div>

                    <!-- Payment Method -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Metode pembayaran:</h2>
                        
                        <!-- BCA Transfer -->
                        <div class="border-2 border-red-400 rounded-xl p-6 mb-6">
                            <div class="flex items-start gap-6">
                                <div class="bg-white p-2 border-2 border-gray-300 rounded-lg">
                                    <img src="{{ asset('assets/rekening.png') }}" alt="BCA" class="w-32 h-32 object-contain">
                                </div>
                                <div class="flex items-center h-32">
                                    <p class="text-lg font-semibold text-gray-800">No. Rekening</p>
                                </div>
                            </div>
                        </div>

                        <!-- QRIS -->
                        <div class="border-2 border-red-400 rounded-xl p-6">
                            <div class="flex items-start gap-6">
                                <div class="bg-white p-2 border-2 border-gray-300 rounded-lg">
                                    <img src="{{ asset('assets/qris-icon.png') }}" alt="QR Code" class="w-32 h-32">
                                </div>
                                <div class="flex items-center h-32">
                                    <p class="text-lg font-semibold text-gray-800">Scan QRIS</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Deadline -->
                    <div>
                        <p class="text-base text-gray-800 font-medium">Batas waktu pembayaran: <span class="font-bold">24 jam</span></p>
                    </div>

                </div>
            </div>

            <!-- Right Column - Room & Upload Info (1 column wide) -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-lg p-8 border-2 border-red-500 sticky top-6">
                    
                    <!-- Room Info -->
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Room:</h2>
                        <p class="text-xl text-gray-800 pb-3 border-b-2 border-red-400">Deluxe Room</p>
                    </div>

                    <!-- Name Info -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Name:</h2>
                        <p class="text-xl text-gray-800 pb-3 border-b-2 border-red-400">Mingyu</p>
                    </div>

                    <!-- Upload Section -->
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Upload Bukti Pembayaran:</h2>
                        
                        <!-- File Input -->
                        <div class="mb-4">
                            <input 
                                type="file" 
                                id="buktiPembayaran" 
                                accept="image/*,.pdf"
                                class="w-full text-sm text-gray-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-md file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-red-500 file:text-white
                                    hover:file:bg-red-600
                                    file:cursor-pointer cursor-pointer"
                            >
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="button"
                            onclick="submitPayment()"
                            class="w-full bg-red-500 text-white py-3 rounded-lg text-lg font-semibold hover:bg-red-600 transition"
                        >
                            Kirim Pembayaran
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
function submitPayment() {
    const fileInput = document.getElementById('buktiPembayaran');
    
    if (!fileInput.files || fileInput.files.length === 0) {
        alert('Silakan upload bukti pembayaran terlebih dahulu!');
        return;
    }
    
    // Di sini Anda bisa menambahkan logic untuk submit form
    // Misalnya dengan AJAX atau submit form biasa
    alert('Pembayaran berhasil dikirim! Mohon tunggu konfirmasi dari admin.');
    
    // Redirect atau action lainnya
    // window.location.href = '/booking-success';
}
</script>

@endsection