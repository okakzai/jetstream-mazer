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
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/alert', function () {
        return view('mazer/component/alert',[
            'title' => 'Alert',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/badge', function () {
        return view('mazer/component/badge',[
            'title' => 'Badge',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/breadcrumb', function () {
        return view('mazer/component/breadcrumb',[
            'title' => 'Breadcrumb',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/button', function () {
        return view('mazer/component/button',[
            'title' => 'Button',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/card', function () {
        return view('mazer/component/card',[
            'title' => 'Card',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/carousel', function () {
        return view('mazer/component/carousel',[
            'title' => 'Carousel',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/collapse', function () {
        return view('mazer/component/collapse',[
            'title' => 'Collapse',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/dropdown', function () {
        return view('mazer/component/dropdown',[
            'title' => 'Dropdown',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/listgroup', function () {
        return view('mazer/component/listgroup',[
            'title' => 'List Group',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/modal', function () {
        return view('mazer/component/modal',[
            'title' => 'Modal',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/navs', function () {
        return view('mazer/component/navs',[
            'title' => 'Navs',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/pagination', function () {
        return view('mazer/component/pagination',[
            'title' => 'Pagination',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/placeholder', function () {
        return view('mazer/component/placeholder',[
            'title' => 'Placeholder',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/progress', function () {
        return view('mazer/component/progress',[
            'title' => 'Progress',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/spinner', function () {
        return view('mazer/component/spinner',[
            'title' => 'Spinner',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/toasts', function () {
        return view('mazer/component/toasts',[
            'title' => 'Toasts',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/component/tooltip', function () {
        return view('mazer/component/tooltip',[
            'title' => 'Tooltip',
            'menu' => 'component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/avatar', function () {
        return view('mazer/extra-component/avatar',[
            'title' => 'Avatar',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/comment', function () {
        return view('mazer/extra-component/comment',[
            'title' => 'Comment',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/divider', function () {
        return view('mazer/extra-component/divider',[
            'title' => 'Divider',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/datepicker', function () {
        return view('mazer/extra-component/datepicker',[
            'title' => 'Date Picker',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/flag', function () {
        return view('mazer/extra-component/flag',[
            'title' => 'Flag',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/sweetalert', function () {
        return view('mazer/extra-component/sweetalert',[
            'title' => 'Sweet Alert',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/toastify', function () {
        return view('mazer/extra-component/toastify',[
            'title' => 'Toastify',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });

    Route::get('/extra-component/rating', function () {
        return view('mazer/extra-component/rating',[
            'title' => 'Rating',
            'menu' => 'extra-component',
            'submenu' => true,
        ]);
    });
});
