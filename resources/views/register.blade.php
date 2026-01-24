@extends('layouts.app')

@section('title', 'Register')

@section('content')
<style>
.register-bg {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    min-height: 100vh;
}

.register-card {
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

.btn-register {
    background: #FB4448;
    transition: all 0.3s ease;
}

.btn-register:hover {
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
    top: -200px;
    right: -200px;
}

.circle-2 {
    bottom: -200px;
    left: -200px;
}

.password-strength {
    height: 3px;
    background: #e9ecef;
    border-radius: 2px;
    margin-top: 8px;
    overflow: hidden;
}

.password-strength-bar {
    height: 100%;
    width: 0%;
    transition: all 0.3s ease;
}
</style>

<div class="register-bg relative overflow-hidden">
    <!-- Accent Circles -->
    <div class="accent-circle circle-1"></div>
    <div class="accent-circle circle-2"></div>

    <div class="container mx-auto px-6 py-12 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md relative z-10">
            
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="inline-block bg-[#FB4448] w-16 h-16 rounded-2xl flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
                <h1 class="text-gray-800 text-3xl font-bold mb-2">Create Account</h1>
                <p class="text-gray-600">Join us today and get started</p>
            </div>

            <!-- Register Card -->
            <div class="register-card rounded-2xl p-8">
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf
                    
                    <!-- Username Field -->
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 font-semibold mb-2 text-sm">
                            Username
                        </label>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            required
                            class="input-field w-full px-4 py-3 border-2 border-transparent rounded-xl focus:outline-none"
                            placeholder="Choose a username"
                        >
                    </div>

                    <!-- Email Field -->
                    <div class="mb-4">
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

                    <!-- Phone Field -->
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-semibold mb-2 text-sm">
                            Phone Number
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            required
                            class="input-field w-full px-4 py-3 border-2 border-transparent rounded-xl focus:outline-none"
                            placeholder="08xxxxxxxxxx"
                        >
                    </div>

                    <!-- Password Field -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-2 text-sm">
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="input-field w-full px-4 py-3 border-2 border-transparent rounded-xl focus:outline-none"
                            placeholder="Create a strong password"
                        >
                        <div class="password-strength">
                            <div class="password-strength-bar bg-gray-300" id="strengthBar"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">Must be at least 8 characters</p>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="mb-5">
                        <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2 text-sm">
                            Confirm Password
                        </label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            required
                            class="input-field w-full px-4 py-3 border-2 border-transparent rounded-xl focus:outline-none"
                            placeholder="Re-enter your password"
                        >
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="mb-6">
                        <label class="flex items-start">
                            <input type="checkbox" name="terms" required class="w-4 h-4 mt-1 text-[#FB4448] border-gray-300 rounded focus:ring-[#FB4448]">
                            <span class="ml-2 text-xs text-gray-600">
                                I agree to the <a href="#" class="text-[#FB4448] hover:text-[#e63940] font-semibold">Terms & Conditions</a> and <a href="#" class="text-[#FB4448] hover:text-[#e63940] font-semibold">Privacy Policy</a>
                            </span>
                        </label>
                    </div>

                    <!-- Register Button -->
                    <button 
                        type="submit" 
                        class="btn-register w-full text-white font-semibold py-3 px-6 rounded-xl"
                    >
                        Create Account
                    </button>

                    <!-- Divider -->
                    <div class="divider">
                        <span>or</span>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center">
                        <p class="text-gray-600 text-sm">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="text-[#FB4448] hover:text-[#e63940] font-semibold">
                                Login
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

<script>
// Password Strength Indicator
document.getElementById('password').addEventListener('input', function(e) {
    const password = e.target.value;
    const strengthBar = document.getElementById('strengthBar');
    let strength = 0;
    
    if (password.length >= 8) strength += 25;
    if (password.match(/[a-z]/)) strength += 25;
    if (password.match(/[A-Z]/)) strength += 25;
    if (password.match(/[0-9]/)) strength += 25;
    
    strengthBar.style.width = strength + '%';
    
    if (strength <= 25) {
        strengthBar.style.background = '#ef4444';
    } else if (strength <= 50) {
        strengthBar.style.background = '#f59e0b';
    } else if (strength <= 75) {
        strengthBar.style.background = '#3b82f6';
    } else {
        strengthBar.style.background = '#10b981';
    }
});

// Password Confirmation Match
document.getElementById('password_confirmation').addEventListener('input', function(e) {
    const password = document.getElementById('password').value;
    const confirmation = e.target.value;
    
    if (confirmation && password !== confirmation) {
        e.target.style.borderColor = '#ef4444';
    } else if (confirmation && password === confirmation) {
        e.target.style.borderColor = '#10b981';
    } else {
        e.target.style.borderColor = 'transparent';
    }
});
</script>

@endsection