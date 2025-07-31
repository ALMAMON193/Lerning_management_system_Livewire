<?php

use App\Http\Controllers\Web\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.app');
});
//page all route
Route::get('course',[PageController::class,'course'])->name('course');
Route::get ('course-details',[PageController::class,'courseDetail'])->name('course.detail');
