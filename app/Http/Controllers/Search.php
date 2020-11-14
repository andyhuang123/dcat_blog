<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Search extends Controller
{
    public function index(Request $request){

        $keywords = $request->input('keywords');

        

        return view('search',compact('keywords'));
    }
}
