<?php

use App\Http\Controllers\faPageController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', [pageController::class, 'home'])->name('home');
Route::get('/en', [pageController::class, 'home'])->name('home');
Route::get('/blog', [pageController::class, 'blog'])->name('blog');
Route::get('/contact-us', [pageController::class, 'contact'])->name('contact-us');
Route::get('/about-us', [pageController::class, 'about'])->name('about-us');

Route::get('/en' , function () {
    return redirect('/');
})->name('en');

Route::group(['prefix' => '/fa'], function () {
    Route::get('/', [faPageController::class, 'home'])->name('fa.home');
});