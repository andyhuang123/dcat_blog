<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 留言
 */
class Massages extends Controller
{
    public function index(){

        return view('massages');
    }
}
