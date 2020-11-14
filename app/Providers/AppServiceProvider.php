<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; 
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        //共享导航栏列表
        View::share('nav_list', $this->system_nav());
    }
    public function system_nav()
    { 
        $top_data = Category::where(['is_open'=>1])->where('parent_id', '=', 0)->orderBy('order', 'asc')->get()->keyBy('id');
        $top_id   = $top_data->keys();
        $son_data =  Category::where(['is_open'=>1])->whereIn('parent_id', $top_id)->orderBy('order', 'asc')->get(); 
        foreach ($son_data as $k => $v) { 
            $top_data->get($v->parent_id)->son_nav[$v->id] = $v;
        }
         
        return $top_data;
    }

}
