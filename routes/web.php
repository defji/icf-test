<?php

use App\Constants\Roles;
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
    return redirect()->to('/home');
});


Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['role:' . Roles::ROLE_ADMINISTRATOR]], function() {
        Route::get('/admin-page', function() {
            return view('adminPage');
        });
    });

    Route::group(['middleware' => ['role:' . Roles::ROLE_CONTENT_EDITOR."|".Roles::ROLE_ADMINISTRATOR]], function() {
        Route::get('/editor-page', function() {
            return view('editorPage');
        });
    });

    Route::group(['middleware' => ['role:' . Roles::ROLE_REGULAR_USER."|".Roles::ROLE_ADMINISTRATOR]], function() {
        Route::get('/user-page', function() {
            return view('userPage');
        });
    });

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
