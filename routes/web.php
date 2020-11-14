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

Route::get('/', 'Home@index')->name('root');
 
Route::get('/home', 'Home@index')->name('home.index');

Route::get('/detail/{aid}', 'Home@detail')->name('home.detail');

Route::get('/jobs', 'Jobs@index')->name('home.jobs');

Route::get('/projects/{id}', 'Projects@index')->name('home.projects');

Route::get('/massages', 'Massages@index')->name('home.massages');

Route::get('/friends', 'Friends@index')->name('home.friends');

Route::get('/about', 'About@index')->name('home.about');

Route::get('/search', 'Search@index')->name('home.search');


Auth::routes();

Route::get('/accountsetting', 'Setting@index')->name('home.setting');

 
