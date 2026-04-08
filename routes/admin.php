<?php
use App\Http\Controllers\Admin\AppointmentController;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Add this for appointments
    Route::resource('appointments', AppointmentController::class);
});
