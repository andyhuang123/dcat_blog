<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Home extends Controller
{  
    /**
     * 首页
     */
    public function index(Request $request)
    {
        $post = new Post();

        $list = $post->where(['is_show'=>1])->orderBy('id','desc')->paginate(5);
         
        return view('home',compact('list'));
    }
    /**
     * 详情
     */
    public function detail($aid)
    {
         
        $post = new Post(); 
        $info = $post::find($aid);
       
        return view('detail',compact('info'));
    }


}
