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

Route::get('/','Site\HomeController@index');
Route::get('/contato','Site\HomeController@contato');
Route::get('/vereadores','Site\HomeController@vereadores');
Route::get('/leis','Site\HomeController@leis');
Route::get('/mesa-diretora','Site\HomeController@mesa');



Route::prefix('painel')->group(function(){
    Route::get('/','Admin\HomeController@index')->name('admin');

    Route::get('login','Admin\Auth\LoginController@index')->name('login');
    Route::post('login','Admin\Auth\LoginController@authenticate');

    Route::get('register','Admin\Auth\RegisterController@index')->name('register');
    Route::post('register', 'Admin\Auth\RegisterController@register');

    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

    Route::resource('users', 'Admin\UserController');
    Route::resource('pages','Admin\PageController');
    Route::resource('vereador','Admin\VereadorController');
    Route::resource('diretor','Admin\DiretorController');
    Route::resource('leis','Admin\LeisController');

    Route::get('profile', 'Admin\profileController@index')->name('profile');
    Route::put('profilesave','Admin\ProfileController@save')->name('profile.save');

    Route::get('settings', 'Admin\SettingController@index')->name('settings');
    Route::put('settingssave','Admin\SettingController@save')->name('settings.save');


});

Route::fallback('Site\PageController@index');