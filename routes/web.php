<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('About');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/package', [PackageController::class, 'index'])->name('package');

Route::get('/destination', [DestinationController::class, 'index'])->name('destination');

Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
