<?php
use App\Controllers\AuthController;
use App\Controllers\Controller;
use App\Controllers\HomeController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\PagesController;
use App\Middlewares\AuthMiddleware;

SimpleRouter::group(['prefix' => '/' .  $_ENV['BASE_PATH']], function () {
    
    SimpleRouter::get('/', 'PagesController@home');
    SimpleRouter::get('/products','PagesController@products');
    SimpleRouter::get('/blog','PagesController@blog');
    SimpleRouter::get('/blog-single','PagesController@blogSingle')->name('blog-single');
    SimpleRouter::get('/about-us','PagesController@about');
    SimpleRouter::get('/contact-us','PagesController@contact');
    SimpleRouter::get('/login', "AuthController@loginView")->name('login');
    SimpleRouter::post('/login', "AuthController@login")->name('login');
    SimpleRouter::get('/logout', 'AuthController@logout')->name('logout');

    SimpleRouter::group(['prefix' => '/fa'], function () {
        SimpleRouter::get('/', 'PagesController@homeFa');
        SimpleRouter::get('/products','PagesController@productsFa');
        SimpleRouter::get('/blog','PagesController@blogFa');
        SimpleRouter::get('/blog-single','PagesController@blogSingleFa')->name('blog-single');
        SimpleRouter::get('/about-us','PagesController@aboutFa');
        SimpleRouter::get('/contact-us','PagesController@contactFa');
    });



    SimpleRouter::group(['middleware' => AuthMiddleware::class, 'prefix' => '/admin'], function () {
    
        SimpleRouter::get('/', 'PagesController@admin');
        SimpleRouter::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
        SimpleRouter::get('/product-list','AdminController@products')->name('product-list');
        SimpleRouter::post('product-list','AdminController@updateProduct')->name('product-list');
        SimpleRouter::get('/mailbox','AdminController@mail')->name('mailbox');
        SimpleRouter::get('/settings','AdminController@settings')->name('settings');
        SimpleRouter::post('/settings', 'AdminController@settingsConfig')->name('settings');
        SimpleRouter::get('/blog','AdminController@blog')->name('blog');
        SimpleRouter::get('/blog-details','AdminController@blogDetails')->name('blog-details');
    });
});