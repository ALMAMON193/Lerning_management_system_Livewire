<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\PageController;
use App\Livewire\Admin\Dashboard;

// === Frontend ===
Route::get('/', fn () => view('frontend.layouts.index'));
Route::get('/course', [PageController::class, 'course'])->name('course');
Route::get('/course-details', [PageController::class, 'courseDetail'])->name('course.detail');

// === Admin Panel ===
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');


    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Course\Category\IndexComponent::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Course\Category\CreateComponent::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Admin\Course\Category\EditComponent::class)->name('edit');
    });

    Route::prefix('courses')->name('courses.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Course\IndexComponent::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Course\CreateComponent::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Admin\Course\EditComponent::class)->name('edit');
    });

    Route::prefix('enrollments')->name('enrollments.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Course\Enrollment\IndexComponent::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Course\Enrollment\CreateComponent::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Admin\Course\Enrollment\EditComponent::class)->name('edit');
    });

    Route::prefix('lessons')->name('lessons.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Course\Lesson\IndexComponent::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Course\Lesson\CreateComponent::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Admin\Course\Lesson\EditComponent::class)->name('edit');
    });
    Route::prefix('certificates')->name('certificates.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Course\Certificate\IndexComponent::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Course\Certificate\CreateComponent::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Admin\Course\Certificate\EditComponent::class)->name('edit');
    });

    Route::prefix('progress')->name('progress.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Course\Progress\IndexComponent::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Course\Progress\CreateComponent::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Admin\Course\Progress\EditComponent::class)->name('edit');
    });

    Route::prefix('reviews')->name('reviews.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Course\Review\IndexComponent::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Course\Review\CreateComponent::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Admin\Course\Review\EditComponent::class)->name('edit');
    });

    Route::prefix('sections')->name('sections.')->group(function () {
        Route::get('/', \App\Livewire\Admin\Course\Section\IndexComponent::class)->name('index');
        Route::get('/create', \App\Livewire\Admin\Course\Section\CreateComponent::class)->name('create');
        Route::get('/edit/{id}', \App\Livewire\Admin\Course\Section\EditComponent::class)->name('edit');
    });
});
