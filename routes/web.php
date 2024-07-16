<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactFormController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\LatestProjectController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\WhyHireMeController;
use App\Http\Controllers\Backend\WorkExperienceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard route
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // Resource routes
    Route::resource('hero', HeroController::class);
    Route::resource('about', AboutController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('work-experience', WorkExperienceController::class);
    Route::resource('latest-project', LatestProjectController::class);
    Route::resource('education', EducationController::class);
    Route::resource('why-hire-me', WhyHireMeController::class);
    Route::resource('contact-form', ContactFormController::class);
});

require __DIR__.'/auth.php';
