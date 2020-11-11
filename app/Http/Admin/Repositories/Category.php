<?php

namespace App\http\Admin\Repositories;

use App\Models\Category as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Category extends EloquentRepository
{
   
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public static $navigation = [  
        0 => '顶级分类',
        1 => '文章',
        2 => '视频'  
    ];

    public function getTree()
    {
        $get_data = Model::orderBy('id', 'asc')->get()->pluck('title','id')->toArray(); 
        return $get_data;
    }
}
