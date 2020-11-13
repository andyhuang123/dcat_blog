<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 项目分类
 */
class Projects extends Controller
{
    public function index(){

        return view('projects');
    }
}
