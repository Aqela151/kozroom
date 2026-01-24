@extends('layouts.app')

@section('title', 'Login')

@section('content')
<style>
.login-bg {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    min-height: 100vh;
}

.login-card {
    background: white;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.input-field {
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.input-field:focus {
    background: white;
    border-color: #FB4448;
    box-shadow: 0 0 0 3px rgba(251, 68, 72, 0.1);
}

.btn-login {
    background: #FB4448;
    transition: all 0.3s ease;
}

.btn-login:hover {
    background: #e63940;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(251, 68, 72, 0.3);
}

.divider {
    display: flex;
    align-items: center;
    text-align: center;
    margin: 1.5rem 0;
}

.divider::before,
.divider::after {
    content: '';
    flex: 1;
    border-bottom: 1px solid #dee2e6;
}

.divider span {
    padding: 0 1rem;
    color: #6c757d;
    font-size: 0.875rem;
}

.accent-circle {
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: linear-gradient(135deg, #FB4448 0%, #ff6b6e 100%);
    opacity: 0.05;
}

.circle-1 {
    top: -250px;
    right: -250px;
}

.circle-2 {
    bottom: -250px;
    left: -250px;
}
</style>

<div class="login-bg relative overflow-hidden">
    <!-- Accent Circles -->
    <div class="accent-circle circle-1"></div>
    <div class="accent-circle circle-2"></div>

    <div class="container mx-auto px-6 py-12 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md relative z-10">
            
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="inline-block bg-[#FB4448] w-16 h-16 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-3xl font-bold mb-2">Welcome Back</h1>
                <p class="text-gray-600">Please login to your account</p>
            </div>

            <!-- Login Card -->
            <div class="login-card rounded-2xl p-8">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="mb-5">
                        <label for="email" class="block text-gray-700 font-semibold mb-2 text-sm">
                            Email Address
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="input-field w-full px-4 py-3 border-2 border-transparent rounded-xl focus:outline-none"
                            placeholder="your.email@example.com"
                        >
                    </div>

                    <!-- Password Field -->
                    <div class="mb-5">
                        <label for="password" class="block text-gray-700 font-semibold mb-2 text-sm">
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="input-field w-full px-4 py-3 border-2 border-transparent rounded-xl focus:outline-none"
                            placeholder="Enter your password"
                        >
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="w-4 h-4 text-[#FB4448] border-gray-300 rounded focus:ring-[#FB4448]">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                        <a href="#" class="text-sm text-[#FB4448] hover:text-[#e63940] font-semibold">
                            Forgot Password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <button 
                        type="submit" 
                        class="btn-login w-full text-white font-semibold py-3 px-6 rounded-xl"
                    >
                        Login
                    </button>

                    <!-- Divider -->
                    <div class="divider">
                        <span>or</span>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center">
                        <p class="text-gray-600 text-sm">
                            Don't have an account? 
                            <a href="{{ route('register') }}" class="text-[#FB4448] hover:text-[#e63940] font-semibold">
                                Sign Up
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800 font-medium inline-flex items-center text-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Home
                </a>
            </div>

        </div>
    </div>
</div>
@endsection