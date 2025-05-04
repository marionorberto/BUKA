<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('bukabem/home');
});

Route::get('bukabem/home', function () {
    return view('landing');
})->name('home');

Route::get('bukabem/politics', function () {
    return view('politics');
})->name('politics');

Route::get('bukabem/terms', function () {
    return view('terms');
})->name('terms');

Route::get('bukabem/faq', function () {
    return view('faq');
})->name('faq');

Route::get('bukabem/library', function () {
    return view('library');
})->name('library');


Route::prefix('bukabem/auth')->group(function () {

    Route::get('/index', [AuthController::class, 'index'])->name('auth.login.show');

    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

    Route::get('/register-student', [AuthController::class, 'registerStudent'])->name('auth.register-student');

    Route::get('/register-mentor', [AuthController::class, 'registerMentor'])->name('auth.register-mentor');

    Route::get('/choose-role', [AuthController::class, 'chooseRole'])->name('auth.choose-role');

    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot');

    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::prefix('bukabem/admin/dashboard')->group(function () {
    Route::get('/index', [AdminController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/profile/index', [AdminController::class, 'profile'])->name('admin.dashboard.profile.index');
    Route::get('/students/index', [AdminController::class, 'students'])->name('admin.dashboard.students.index');
    Route::get('/mentors/index', [AdminController::class, 'mentors'])->name('admin.dashboard.mentors.index');
    Route::get('/settings/index', [AdminController::class, 'settings'])->name('admin.dashboard.settings.index');
});

Route::prefix('bukabem/mentor')->group(function () {
    Route::get('dashboard/index', [MentorController::class, 'index'])->name('mentor.dashboard.index');
});


Route::prefix('bukabem/student')->group(function () {
    Route::get('dashboard/index', [StudentController::class, 'index'])->name('student.dashboard.index');
});

Route::prefix('bukabem/users')->group(function () {
    Route::post('store', [UserController::class, 'store'])->name('users.store');
});

