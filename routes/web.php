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

    Route::get('/component/button', function () {
        return view('mazer/component/button',[
            'title' => 'Button',
            'menu' => true,
            'submenu' => true,
        ]);
    });

    Route::get('/component/card', function () {
        return view('mazer/component/card',[
            'title' => 'Card',
            'menu' => true,
            'submenu' => true,
        ]);
    });

    Route::get('/component/carousel', function () {
        return view('mazer/component/carousel',[
            'title' => 'Carousel',
            'menu' => true,
            'submenu' => true,
        ]);
    });

    Route::get('/component/collapse', function () {
        return view('mazer/component/collapse',[
            'title' => 'Collapse',
            'menu' => true,
            'submenu' => true,
        ]);
    });

    Route::get('/component/dropdown', function () {
        return view('mazer/component/dropdown',[
            'title' => 'Dropdown',
            'menu' => true,
            'submenu' => true,
        ]);
    });
});
