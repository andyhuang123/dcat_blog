<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/***
 * 小程序
 */
class Jobs extends Controller
{
    public function index(){

        
        return view('jobs');
    }
}
