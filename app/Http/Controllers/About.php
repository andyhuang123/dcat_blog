<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 关于
 */
class About extends Controller
{
    public function index(){

        return view('about');
    }
}
