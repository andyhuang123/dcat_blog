<?php

use Dcat\Admin\Config\Http\Controllers;
use Illuminate\Support\Facades\Route;
 
Route::resource('configs', Controllers\ConfigController::class);
