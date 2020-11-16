<?php
 
/**
 * 递归无限级分类
 */
function modelTree($tree,$pid = 0,$level = 0){
    if(count($tree) == 0){
        return [];
    }
    $arr = [];
    foreach ($tree as $k => $v) {
        if($v['parent_id'] == $pid){
            $v['level'] = $level;
            $arr[$v['id']] = $v;
            $temp_arr = modelTree($tree,$v['id'],$level+1);
            $arr  = array_merge($arr,$temp_arr);
        }
    }
    return $arr;
}

/**
 * 定义的背景色数组
 */
function define_background(){
    $bg = array('purple','orange','brown','yellow','green','blue');
    shuffle($bg);
    return $bg;
}

/**
 * Desc:定义徽章颜色
 * Date:2019/9/27/027
 */
function define_badge_color(){
    $bg = array('primary','info','success','warning','danger','default');
    shuffle($bg);
    return $bg;
}

/**
 * 转换日期，比如2019-09-21 11:54:53,只显示2019-09-21
 */
function date_conversion($old_data){
    $old_time = strtotime($old_data);
    return $new_time = date('Y-m-d',$old_time);
}

/**
 * 将$data 插入关联数组 $array 的键名为 $key 的 Key 之前
 */
function wpjam_array_push($array, $data=null, $key=false){
    $data  = (array)$data;
    $offset  = ($key===false)?false:array_search($key, array_keys($array));
    $offset  = ($offset)?$offset:false;
    if($offset){
      return array_merge(
        array_slice($array, 0, $offset),
        $data,
        array_slice($array, $offset)
      );
    }else{  // 没指定 $key 或者找不到，就直接加到末尾
      return array_merge($array, $data);
    }
}

if (! function_exists('blog_default_title')) {
    function blog_default_title(): string
    {
        return '游兴祥博客,技术博客,个人博客,laravel博客系统,php博客系统';
    }
}

if (! function_exists('blog_default_desc')) {
    function blog_default_desc(): string
    {
        return '个人博客模板,博客模板,博客系统,技术博客,个人博客,ERP,laravel博客,php博客,laravel-admin,dcat-admin,laravel-livewire,livewire';
    }
}

if (! function_exists('user_img')) {
    /**
     * @return string
     */
    function user_img(): string
    {
        if (Auth::check()) {
            //return Auth::user()->image;
            return $src = asset('/images/logo.png');
        } else {
            $src = asset('/images/logo.png');
        }
      
        return $src;
    }
}

if (! function_exists('user_comment_limit_key')) {
    function user_comment_limit_key(): string
    {
        return config('cache.user_comment_limit.cache_key').'u:'.Auth::id();
    }
}

