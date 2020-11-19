<?php

use Dcat\Admin\Config\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('configs', Controllers\ConfigController::class.'@index')->name('dcat-admin.config.index');

Route::delete('config/{id}', Controllers\ConfigController::class.'@destroy')->name('dcat-admin.config.destroy');