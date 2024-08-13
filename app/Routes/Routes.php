<?php
use App\Controllers\AuthController;
use App\Controllers\Controller;
use App\Controllers\HomeController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\PagesController;
use App\Middlewares\AuthMiddleware;

SimpleRouter::group(['prefix' => '/' .  $_ENV['BASE_PATH']], function () {
    
    SimpleRouter::get('/', 'PagesController@home');
    // SimpleRouter::get('/shop', 'PagesController@shop');
    SimpleRouter::get('/products','PagesController@products');
    SimpleRouter::get('/blog','PagesController@blog');
    SimpleRouter::get('/blog-single','PagesController@blogSingle')->name('blog-single');
    SimpleRouter::get('/about-us','PagesController@about');
    SimpleRouter::get('/contact-us','PagesController@contact');
    SimpleRouter::get('/login', "AuthController@loginView")->name('login');
    SimpleRouter::post('/login', "AuthController@login")->name('login');




    SimpleRouter::group(['middleware' => AuthMiddleware::class, 'prefix' => '/admin'], function () {
    
        SimpleRouter::get('/', 'PagesController@admin');
        SimpleRouter::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
        SimpleRouter::get('/product-list','AdminController@products')->name('product-list');
        SimpleRouter::get('/mailbox','AdminController@mail')->name('mailbox');
        SimpleRouter::get('/settings','AdminController@settings')->name('settings');
        SimpleRouter::get('/blog','AdminController@blog')->name('blog');
    });

    // SimpleRouter::basic('/import', function () {
    //     return view('admin/import');
    // });
});



// // Authentication routes
// SimpleRouter::group(['prefix' => '/' .  $_ENV['BASE_PATH']], function () {

//     //get
    // SimpleRouter::get('/login', "AuthController@loginView")->name('login');
//     SimpleRouter::get('/signup', 'AuthController@signupForm')->name('signup');
//     SimpleRouter::get('/verify', 'AuthController@verifyView')->name('verify');
//     SimpleRouter::get('/forgot-password', 'AuthController@forgotView')->name('forgot');
//     SimpleRouter::get('/reset-password', 'AuthController@resetView')->name('reset');
//     SimpleRouter::get('/logout', 'AuthController@logout')->name('logout');

//     //post
//     SimpleRouter::post('/login', 'AuthController@login');
//     SimpleRouter::post('/signup', 'AuthController@signup')->name('signup');
//     SimpleRouter::post('/forgot-password', 'AuthController@forgot')->name('forgot');
//     SimpleRouter::post('/verify', 'AuthController@verify')->name('verify');
//     SimpleRouter::post('/reset-password', 'AuthController@reset')->name('reset');

    
// });

// //admin
// SimpleRouter::group(['prefix' => '/' .  $_ENV['BASE_PATH'] . '/admin'], function () {

//     //get
//     SimpleRouter::get('/', 'AdminController@dashboard')->name('admin');
//     SimpleRouter::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
//     SimpleRouter::get('/settings', 'AdminController@settings')->name('settings');
//     SimpleRouter::get('/admins', 'AdminController@admins')->name('admins');
//     SimpleRouter::get('/products', 'AdminController@products')->name('products');

//     //post
//     SimpleRouter::post('/settings', 'AdminController@settings')->name('settings');
//     SimpleRouter::post('/admins', 'AdminController@admins')->name('admins');
//     SimpleRouter::post('/products', 'AdminController@products')->name('products');
    
// });