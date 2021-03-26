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
    return view('client.checkout');
});

Route::get('/homepage', function () {
    return view('client.homepage');
})->name('homepage');

Route::get('/teacher', function () {
    return view('client.teacher');
});

Route::get('/admin', 'AdminController@index');
Route::get('/admin/hocvien', 'AdminController@getHocvien');
Route::get('/admin/giangvien', 'AdminController@getGiangvien');

Route::post('/register_student', 'Auth\RegisterStudentController@register_student')->name('registerstudent');
Route::post('/register_teacher', 'Auth\RegisterTeacherController@register_teacher')->name('registerteacher');

Route::get('/checkout', 'CheckoutController@checkout')->name('checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
