<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    HomeController, DepartmentController, DoctorController, AppointmentController,
    NewsController, JobController, ContactController, LocaleController
};
use App\Http\Controllers\Admin\{
    DashboardController, DepartmentController as AdminDepartmentController,
    DoctorController as AdminDoctorController, ServiceController as AdminServiceController,
    NewsController as AdminNewsController, JobController as AdminJobController,
    FeedbackController as AdminFeedbackController
};

Route::get('/locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{department:slug}', [DepartmentController::class, 'show'])->name('departments.show');

Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/doctors/{doctor:id}', [DoctorController::class, 'show'])->name('doctors.show');

Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/thank-you', [AppointmentController::class, 'thankyou'])->name('appointments.thankyou');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/about', function () { return view('about.index'); })->name('about.index'); // change here


Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job:slug}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job:slug}/apply', [JobController::class, 'apply'])->name('jobs.apply');
Route::post('/jobs/{job:slug}/apply', [JobController::class, 'submit'])->name('jobs.submit');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::middleware(['auth','ensure.admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('departments', AdminDepartmentController::class);
    Route::resource('doctors', AdminDoctorController::class);
    Route::resource('services', AdminServiceController::class);
    Route::resource('news', AdminNewsController::class)->except(['show']);
    Route::resource('jobs', AdminJobController::class)->except(['show']);
    Route::resource('feedback', AdminFeedbackController::class)->only(['index','show','update','destroy']);
});
Route::get('/emergency', [EmergencyController::class, 'index'])->name('emergency');


Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
use Illuminate\Support\Facades\Auth;



Route::get('/login', function () {
    return view('admin.auth.login');
})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

use App\Http\Controllers\Admin\Auth\LoginController;


Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

 use App\Http\Controllers\Admin\doctors;

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('appointments', [\App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('appointments.index');
});


Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('feedback', [DashboardController::class, 'feedbackIndex'])->name('feedback.index');
});



// USER ROUTES
Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'index'])
    ->name('doctors.index');
   

// ADMIN ROUTES
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('doctors', App\Http\Controllers\Admin\DoctorController::class);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('departments', App\Http\Controllers\Admin\DepartmentController::class);
});


use App\Http\Controllers\BlogController;

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

use App\Http\Controllers\ServiceController;
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{department}', [ServiceController::class, 'show'])->name('services.show');



use App\Http\Controllers\Admin\FeedbackController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::get('/feedback/{id}', [FeedbackController::class, 'show'])->name('feedback.show');
    Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
});
use App\Http\Controllers\AboutUsController;

Route::get('/about', [AboutUsController::class, 'index'])->name('about');

use App\Http\Controllers\FeatureController;

Route::get('/features', [FeatureController::class, 'index'])->name('features.index');

Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'am'])) {
        $locale = 'en';
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');



Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

use App\Http\Controllers\FaqController;

Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');
use App\Http\Controllers\HealthInfoController;

Route::get('/health', [HealthInfoController::class, 'index'])->name('health.index');
Route::get('/health/{healthInfo}', [HealthInfoController::class, 'show'])->name('health.show');
Route::get('/health/download/{healthInfo}', [HealthInfoController::class, 'downloadFile'])->name('health.download');

use App\Http\Controllers\TestimonialController;

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
