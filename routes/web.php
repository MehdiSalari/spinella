<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\faPageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\productController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', [pageController::class, 'home'])->name('home');
Route::get('/en', [pageController::class, 'home'])->name('home');
Route::get('/blog', [pageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [pageController::class, 'blogSingle'])->name('blog.show');
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::get('/contact-us', [pageController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [TicketController::class, 'store'])->name('contact-us');
Route::get('/about-us', [pageController::class, 'about'])->name('about-us');
Route::get('/products', [pageController::class, 'products'])->name('products');

Route::get('/en' , function () {
    return redirect('/');
})->name('en');

Route::group(['prefix' => '/fa'], function () {
    Route::get('/', [faPageController::class, 'home'])->name('fa.home');
});

Route::get('/login', [adminController::class, 'loginView'])->name('login');
Route::post('/login', [adminController::class, 'login'])->name('login');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->group( function () {
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/settings', [adminController::class, 'settings'])->name('admin.settings');

    // Products
    Route::name('admin')->resource('product-list', productController::class)->except(['create', 'edit', 'show']);
    Route::post('/product-list/status', [productController::class, 'updateStatus'])->name('admin.product-list.status');

    Route::name('admin')->resource('category', categoryController::class)->except(['create', 'edit', 'show']);
    
    // Mailbox
    Route::name('admin')->resource('mailbox', TicketController::class)->except(['create', 'edit']);
    Route::get('/mailbox/{mailbox}', [TicketController::class, 'show'])->name('admin.mailbox.show')->withTrashed();
    Route::get('/mailbox-trash', [TicketController::class, 'trash'])->name('admin.mailbox-trash');
    Route::get('mailbox/{mailbox}/restore', [TicketController::class, 'restore'])->name('admin.mailbox.restore');
    Route::delete('mailbox/{mailbox}/force-destroy', [TicketController::class, 'forceDestroy'])->name('admin.mailbox.force-destroy');
    
    // Comments
    Route::name('admin')->resource('comments', CommentController::class)->except(['edit']);

    Route::name('admin')->resource('blog', BlogController::class);

    Route::post('/upload-image', [ImageController::class, 'uploadImage']);
});