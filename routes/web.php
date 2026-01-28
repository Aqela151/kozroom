<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Room Page
Route::get('/room', function () {
    return view('room');
})->name('room');

// Detail Room - Deluxe
Route::get('/room/deluxe', function () {
    return view('deluxe');
})->name('room.deluxe');

// Detail Room - Standard
Route::get('/room/standard', function () {
    return view('standard');
})->name('room.standard');

// Detail Room - Economy
Route::get('/room/economy', function () {
    return view('economy');
})->name('room.economy');

// Booking Page
Route::get('/booking', function () {
    return view('booking');
})->name('booking');

// Payment Page
Route::get('/payment', function () {
    return view('payment');
})->name('payment');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Login Page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Register Page
Route::get('/register', function () {
    return view('register');
})->name('register');

// Login Post (untuk nanti)
Route::post('/login', function () {
    // Logic login nanti disini
})->name('login.post');

// Register Post (untuk nanti)
Route::post('/register', function () {
    // Logic register nanti disini
})->name('register.post');

// Logout (untuk nanti)
Route::post('/logout', function () {
    // Logic logout nanti disini
})->name('logout');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/room', function () {
        return view('admin.roomadmin');
    });

    Route::get('/booking', function () {
        return view('admin.bookingadmin');
    });

    Route::get('/payment', function () {
        return view('admin.paymentadmin');
    });

    Route::get('/messages', function () {
        return view('admin.messagesadmin');
    });

    Route::get('/artikel', function () {
        return view('admin.articleadmin');
    });

});
