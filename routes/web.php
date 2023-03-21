<?php

use App\Models\StudentParent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|form
*/


Route::get('/', function () {
    if (Auth::check()) {
        return view('dashboard');
    }
    return redirect()->route('loginForm');
})->name('dashboard');

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', "UserController@loginForm")->name('loginForm');
    Route::post('login', "UserController@login")->name('login');
    Route::get('register', "UserController@registerForm")->name('registerForm');
    Route::post('register', "UserController@register")->name('register');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('home', "UserController@index")->name('home');
    // Route::post('update/{id?}', "UserController@login")->name('update');
    Route::get('logout', 'UserController@logout')->name('logout');
    Route::get('users', 'UserController@users')->name('users');
    Route::get('dbusers', 'DataContoller@index')->name('dbusers');
    Route::get('allUsersPostL', 'SqlConntroller@allUsersPostL');
    Route::get('allUsersPostR', 'SqlConntroller@allUsersPostR');
    Route::get('authUserPost', 'SqlConntroller@authUserPost');
    Route::get('getPostComm', 'SqlConntroller@getPostComm');
    Route::get('delete/user/{id}', 'SqlConntroller@del');
    Route::get('student/count', 'SqlConntroller@studentCount');
    Route::get('classandsection', 'SqlConntroller@classSec');

});


