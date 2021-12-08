<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/dashboard2', function () {
    return view('index2');
});

Route::get('/pages/calendar.html', function () {
    return view('pages/calendar');
});

Route::get('/pages/mailbox/mailbox.html', function () {
    return view('pages/mailbox');
});

Route::get('/pages/widgets.html', function () {
    return view('pages/widgets');
});

Route::get('/pages/tables/data.html', function () {
    return view('pages/mailbox');
});

Route::get('pages/tables/data.html', function () {
    return view('pages/tables/data');
});

Route::get('/pages/tables/simple.html', function () {
    return view('pages/tables/simple');
});

Route::get('/pages/mailbox/simple.html', function () {
    return view('pages/mailbox/compose');
});

Route::get('/pages/charts/chartjs.html', function () {
    return view('pages/charts/chartjs');
});

Route::get('/pages/charts/flot.html', function () {
    return view('pages/charts/flot');
});

Route::get('/pages/charts/inline.html', function () {
    return view('pages/charts/inline');
});

Route::get('/pages/charts/morris.html', function () {
    return view('pages/charts/morris');
});