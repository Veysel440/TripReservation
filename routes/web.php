<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AboutsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\GuidesController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::post('/admin/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('admin.logout');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('About');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/package', [PackageController::class, 'index'])->name('package');

Route::get('/destination', [DestinationController::class, 'index'])->name('destination');

Route::get('/team', [TeamController::class, 'index'])->name('team.index');

Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('about', AboutsController::class)->except(['show']);
    Route::resource('guides', GuidesController::class)->except(['show']);
    Route::resource('service', ServicesController::class)->except(['show']);
    Route::resource('contact', ContactsController::class)->except(['show']);
    Route::resource('reservation', ReservationController::class)->except(['show']);
});
