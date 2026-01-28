@extends('layouts.app')

@section('title', 'Register')

@section('content')
<style>
.register-container {
    background: #f7f7ff;
    min-height: 100vh;
}

.register-card {
    background: white;
    border: 1px solid #e5e5e5;
}

.input-field {
    transition: border-color 0.2s;
    border: 1px solid #d1d5db;
}

.input-field:focus {
    border-color: #FB4448;
    outline: none;
}

.btn-register {
    background: #FB4448;
}

.btn-register:hover {
    background: #e63940;
}

.link-text {
    color: #FB4448;
}

.link-text:hover {
    color: #e63940;
}
</style>

<div class="register-container">
    <div class="container mx-auto px-6 py-20 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-gray-900 text-2xl font-semibold mb-1">Daftar</h1>
                <p class="text-gray-600 text-sm">Buat akun KozRoom baru</p>
            </div>

            <!-- Register Card -->
            <div class="register-card rounded-lg p-8">
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf
                    
                    <!-- Username Field -->
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 mb-2 text-sm font-medium">
                            Username
                        </label>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            required
                            class="input-field w-full px-3 py-2 rounded"
                            placeholder="Pilih username"
                        >
                    </div>

                    <!-- Email Field -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 mb-2 text-sm font-medium">
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="input-field w-full px-3 py-2 rounded"
                            placeholder="email@example.com"
                        >
                    </div>

                    <!-- Phone Field -->
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 mb-2 text-sm font-medium">
                            No. Telepon
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            required
                            class="input-field w-full px-3 py-2 rounded"
                            placeholder="08xxxxxxxxxx"
                        >
                    </div>

                    <!-- Password Field -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 mb-2 text-sm font-medium">
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="input-field w-full px-3 py-2 rounded"
                            placeholder="Minimal 8 karakter"
                        >
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="mb-5">
                        <label for="password_confirmation" class="block text-gray-700 mb-2 text-sm font-medium">
                            Konfirmasi Password
                        </label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            required
                            class="input-field w-full px-3 py-2 rounded"
                            placeholder="Masukkan ulang password"
                        >
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="mb-6">
                        <label class="flex items-start">
                            <input type="checkbox" name="terms" required class="w-4 h-4 mt-0.5 border-gray-300 rounded">
                            <span class="ml-2 text-xs text-gray-600">
                                Saya setuju dengan <a href="#" class="link-text">Syarat & Ketentuan</a> dan <a href="#" class="link-text">Kebijakan Privasi</a>
                            </span>
                        </label>
                    </div>

                    <!-- Register Button -->
                    <button 
                        type="submit" 
                        class="btn-register w-full text-white font-medium py-2.5 rounded"
                    >
                        Daftar
                    </button>

                    <!-- Login Link -->
                    <div class="text-center mt-6">
                        <p class="text-gray-600 text-sm">
                            Sudah punya akun? 
                            <a href="{{ route('login') }}" class="link-text font-medium">
                                Login
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700 text-sm">
                    ← Kembali ke beranda
                </a>
            </div>

        </div>
    </div>
</div>

@endsection