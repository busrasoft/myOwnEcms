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
    return view('welcome');
});
Route::get('admin','Backend\DefaultController@index')->name('admin.Index');


Route::get('admin/settings','Backend\SettingsController@index')->name('settings.Index');
Route::post('admin/sortable','Backend\SettingsController@index')->name('settings.Sortable');
Route::get('admin/settings/delete{id}','Backend\SettingsController@destroy');
Route::get('admin/settings/edit{id}','Backend\SettingsController@edit')->name('settings.Edit');
Route::post('admin/update{id}','Backend\SettingsController@update')->name('settings.Update');