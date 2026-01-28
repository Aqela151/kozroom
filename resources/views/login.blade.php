@extends('layouts.app')

@section('title', 'Login')

@section('content')
<style>
.login-container {
    background: #F7F7FF;
    min-height: 100vh;
}

.login-card {
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

.btn-login {
    background: #FB4448;
}

.btn-login:hover {
    background: #e63940;
}

.link-text {
    color: #FB4448;
}

.link-text:hover {
    color: #e63940;
}
</style>

<div class="login-container">
    <div class="container mx-auto px-6 py-20 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-gray-900 text-2xl font-semibold mb-1">Login</h1>
                <p class="text-gray-600 text-sm">Masuk ke akun KozRoom Anda</p>
            </div>

            <!-- Login Card -->
            <div class="login-card rounded-lg p-8">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    
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
                            placeholder="Masukkan password"
                        >
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="w-4 h-4 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                        </label>
                        <a href="#" class="text-sm link-text">
                            Lupa password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <button 
                        type="submit" 
                        class="btn-login w-full text-white font-medium py-2.5 rounded"
                    >
                        Masuk
                    </button>

                    <!-- Register Link -->
                    <div class="text-center mt-6">
                        <p class="text-gray-600 text-sm">
                            Belum punya akun? 
                            <a href="{{ route('register') }}" class="link-text font-medium">
                                Daftar sekarang
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