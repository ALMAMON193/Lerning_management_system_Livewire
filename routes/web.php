<?php

use App\Http\Controllers\Web\Frontend\PageController;
use App\Livewire\Admin\Dashboard;
use App\Livewire\AdminDashboardComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.layouts.index');
});
//page all route
Route::get('course',[PageController::class,'course'])->name('course');
Route::get ('course-details',[PageController::class,'courseDetail'])->name('course.detail');

# Admin Dashboard
Route::get('admin/dashboard', Dashboard::class)->name('admin.dashboard');
