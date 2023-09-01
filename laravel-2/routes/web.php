<?php

use App\Http\Controllers\tablecontroller;
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
    return view('layouts.index');
});

Route::get('/404', function () {
    return view('layouts.404');
});
Route::get('/modals', function () {
    return view('layouts.modals');
});

Route::get('/alert', function () {
    return view('layouts.alert');
});

Route::get('/bouton', function () {
    return view('layouts.bouton');
});

Route::get('/drop', function () {
    return view('layouts.drop');
});

Route::get('/propo', function () {
    return view('layouts.propo');
});

Route::get('/progre', function () {
    return view('layouts.progre');
});

Route::get('/blank', function () {
    return view('layouts.blank');
});

Route::get('/chat', function () {
    return view('layouts.chat');
});

Route::get('/datatables', function () {
    return view('layouts.datatables');
});
Route::get('/form_advence', function () {
    return view('layouts.form_advence');
});

Route::get('/form_basics', function () {
    return view('layouts.form_basics');
});

Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/register', function () {
    return view('layouts.register');
});

Route::get('/simple_table', function () {
    return view('layouts.simple_table');
});

Route::get('/ui-color', function () {
    return view('layouts.ui-color');
});

