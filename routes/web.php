<?php

use Illuminate\Support\Facades\Route;
use Kirich\LaravelMemcached\Middleware\CacheViews;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(CacheViews::class)->group(function() {
    Route::get('cached-view', 'Controller@cached');
});
