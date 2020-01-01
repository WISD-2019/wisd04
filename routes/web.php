<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/aa/a1', function () {
    return view('aa.a1');
});

Route::get('/aa/a2', function () {
    return view('aa.a2');
});


Route::get('/bb/b1', function () {
    return view('bb.b1');
});
Route::get('/bb/b2', function () {
    return view('bb.b2');
});

Route::get('/cc/c1', function () {
    return view('cc.c1');
});
Route::get('/cc/c2', function () {
    return view('cc.c2');
});
Route::get('/dd/d1', function () {
    return view('dd.d1');
});
Route::get('/dd/d2', function () {
    return view('dd.d2');
});
Route::get('/ee/e1', function () {
    return view('ee.e1');
});
Route::get('/ee/e2', function () {
    return view('ee.e2');
});

Route::get('/gg/g1', function () {
    return view('gg.g1');
});
Route::get('/gg/g2', function () {
    return view('gg.g2');
});
Route::get('/ff/f1', function () {
    return view('ff.f1');
});

Route::get('/ff/f2', function () {
    return view('ff.f2');

});
Route::get('/ff/f2', function () {
    return view('ff.f2');
});
Route::get('/ii/i1', function () {
    return view('ii.i1');
});
Route::get('/ii/i2', function () {
    return view('ii.i2');
});


Route::get('/hh/h1', function () {
    return view('hh.h1');
});

Route::get('/hh/h2', function () {
    return view('hh.h2');

});

