<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard',[
            'title' => 'Dashboard',
            'menu' => false,
            'submenu' => false,
        ]);
    });

    Route::get('/component/accordion', function () {
        return view('mazer/component/accordion',[
            'title' => 'Accordion',
            'menu' => true,
            'submenu' => true,
        ]);
    });

    Route::get('/component/alert', function () {
        return view('mazer/component/alert',[
            'title' => 'Alert',
            'menu' => true,
            'submenu' => true,
        ]);
    });

    Route::get('/component/badge', function () {
        return view('mazer/component/badge',[
            'title' => 'Badge',
            'menu' => true,
            'submenu' => true,
        ]);
    });

    Route::get('/component/breadcrumb', function () {
        return view('mazer/component/breadcrumb',[
            'title' => 'Breadcrumb',
            'menu' => true,
            'submenu' => true,
        ]);
    });
});
