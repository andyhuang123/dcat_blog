<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
/**
 * 项目分类
 */
class Projects extends Controller
{
    public function index(Request $request,$id){

        $post = new Post;
        $cate = new Category;
        $name = $cate->find($id);
        if(!$name){
            return view('error.404');
        }
        $list = $post::with(['nav_name'])->where(['nav_id' => $id,'is_show'=>1])->orderBy('id','desc')->paginate(5);
        if(!$list){
            return view('error.404');
        }
       
        return view('projects',compact('list','name'));
    }
}
